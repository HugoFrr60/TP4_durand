<?php
    $server = 'localhost';
    $port = '3306';
    $base = 'td4_post';
    $user = 'root';
    $mdp = 'hugofrr60';
            
    try {
        $pdo = new PDO ("mysql:host=$server;port=$port;dbname=$base;charset=UTF8",$user,$mdp);
    } 
        catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());  
    }
?>