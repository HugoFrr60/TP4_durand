{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
<h1>Home</h1>
Contenu du site, défini dans le template index.tpl
<?php if (isset($username)): ?>
    <p>Bienvenue, <?php echo $username; ?></p>
    <a href="/profil">Profil</a>
    <a href="/logout">Déconnexion</a>

<!-- Afficher le lien vers /login et /register si l'utilisateur n'est pas connecté -->
<?php elseif (isset($show_login_link) && $show_login_link): ?>
    <a href="/login">Connexion</a>
    <a href="/register">Inscription</a>
<?php endif; ?>
</div>
{/block}