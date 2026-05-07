<?php

//Information sur le BDD et le serveur qui la contient
$db_name = "gamesdb";
$db_host = "127.0.0.1";
$db_port = "3306";

//Information d'authentification de mon script
$db_user = "root";
$db_pwd = "";

//Connexions a la BD
try {
    $dsn = 'mysql:dbname=' . $db_name . '; host=' . $db_host. ';port=' . $db_port;

    // Connexion et récupération de l'objet connecté
    $pdo = new PDO($dsn, $db_user, $db_pwd);
} catch (\Exception $ex) {

//Arrêt de l'éxécution du script php
    die("Erreur : " . $ex->getMessage());
}

//Si pas d'erreur on continue le script

echo "connexion Ok<br>";