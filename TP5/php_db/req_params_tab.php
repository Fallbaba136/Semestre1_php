<?php
try{ // Connexion à la BDD
    $db_name = "gamesdb" ; $db_host = "127.0.0.1" ; $db_port = "3306" ;
    $db_user = "root" ; $db_pwd = "" ;
    $dsn = 'mysql:dbname=' . $db_name . ';host='. $db_host. ';port=' . $db_port;
    $pdo = new PDO($dsn, $db_user, $db_pwd) ;
}catch(\Exception $ex){
    die("Erreur : " . $ex->getMessage()) ;
}

// Préparation d'une requête paramétrée
$query = "INSERT INTO games (name, description) VALUES (:nom, :desc)";
$statement = $pdo->prepare($query);

//Exécution avec les paramétres
$game_name = "RDR2";
$param = [
    'nom' => $game_name,
    'desc' => "... pan pan ..."
];

$statement->execute($param) or die(var_dump($statement->errorInfo()));
echo "<b>Le jeu $game_name a été ajouté. </b><br> ";

