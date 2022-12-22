<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
});

Flight::route('GET /fichier', function(){
    Flight::render("fichier.tpl",array());
});

Flight::route('GET /login', function(){
    Flight::render("login.tpl",array());
});

Flight::route('GET /profil', function(){
    Flight::render("profil.tpl",array());
});

Flight::route('GET /success', function(){
    Flight::render("success.tpl",array());
});


//Exercice 1
// POST route /register
Flight::route('POST /register', function() {
    include ('db.php');
    $valid = true;
    // Récupérez les données du formulaire
    $name = Flight::request()->data['name'];
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];
    $city = Flight::request()->data['city'];
    $country = Flight::request()->data['country'];
    // [ Conditions de validation ]
    // Vérifiez si les champs sont vides
    if ($name == '' || $email == '' || $password == '' || $city == '' || $country == '') {
        $valid = false;
    }

    // Vérifiez si l'adresse e-mail est valide
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
    }

    // Vérifiez si l'e-mail existe déjà
    $sql = "SELECT COUNT(*) AS num FROM utilisateur WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['num'] > 0) {
        $valid = false;
    }

    // Vérifier si le mot de passe fait au moins 8 caractères
    if (strlen($password) < 8) {
        $valid = false;
    }

    // [Redirection et requête]
    if (!$valid) {
        // Si tout n'est pas valide affichez un message d'erreur
        Flight::render("register.tpl",array());
    } else {
        // Si les champs ne sont pas vides, insérez les données dans la base de données
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO utilisateur (Nom, Email, Motdepasse, Ville, Pays) VALUES (:name, :email, :password, :city, :country )";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'password' => $passwordHash, 'city' => $city, 'country' => $country]);
        Flight::redirect('/success');
    }

});

//Exercice 2
// Définition de la route POST /login
Flight::route('POST /login', function() {
    include ('db.php');
    // Récupération des données du formulaire
    $email = Flight::request()->data['email'];
    $password = Flight::request()->data['password'];
  
    // Vérification des champs
    if (empty($email) || empty($password)) {
      // Affichage du template login.tpl avec un message d'erreur
      Flight::render('login.tpl', array('error' => 'Veuillez remplir tous les champs'));
      return;
    }
  
    // Vérification de l'existence de l'adresse email dans la table
    $sql = "SELECT * FROM utilisateur WHERE Email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();
    if (!$user) {
      // Affichage du template login.tpl avec un message d'erreur
      Flight::render('login.tpl', array('error' => 'Cette adresse email est inconnue'));
      return;
    }
  
    // Vérification du mot de passe
    if (!password_verify($password, $user['Motdepasse'])) {
      // Affichage du template login.tpl avec un message d'erreur
      Flight::render('login.tpl', array('error' => 'Le mot de passe est incorrect'));
      return;
    }
  
    // Connexion de l'utilisateur
    $_SESSION['user'] = $user['Email'];
  
    // display avec smarty index.tpl
    $smarty = new Smarty();

    $smarty->assign('username', $user['Email']);
    $smarty->display('index.tpl');

  });

//Exercice 3
Flight::route('GET /', function() {
    // Vérifier si l'utilisateur est connecté
    if (is_logged_in()) {
        // Récupérer le nom de l'utilisateur
        $username = get_logged_in_username();

        // Passer les variables au template
        Flight::render('index.tpl', array(
            'username' => $username
        ));
    } else {
        // Passer les variables au template
        Flight::render('index.tpl', array(
            'show_login_link' => true
        ));
    }
});

// Créer une route GET pour /profil
Flight::route('GET /profil', function() {
    // Vérifier si l'utilisateur est connecté
    if (is_logged_in()) {
        // Récupérer les données de l'utilisateur
        $user_data = get_user_data();

        // Passer les variables au template
        Flight::render('profil.tpl', array(
            'user_data' => $user_data
        ));
    } else {
        // Rediriger vers la route /login
        Flight::redirect('/login');
    }
});

//Exercice 4
// Créer une route GET pour /logout
Flight::route('GET /logout', function() {
    // Vider le tableau de SESSION
    session_destroy();

    // Rediriger vers la route /
    Flight::redirect('/');
});

?>
