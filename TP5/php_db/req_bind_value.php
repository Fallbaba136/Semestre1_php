<?php
try{ // Connexion à la BDD
    $db_name = "gamesdb" ; $db_host = "127.0.0.1" ; $db_port = "3306" ;
    $db_user = "root" ; $db_pwd = "" ;
    $dsn = 'mysql:dbname=' . $db_name . ';host='. $db_host. ';port=' . $db_port;
    $pdo = new PDO($dsn, $db_user, $db_pwd) ;
}catch(\Exception $ex){
    die("Erreur : " . $ex->getMessage()) ;
}

//Préparation d'une requête paramètré 

$query = "INSERT INTO games (name, description) VALUES (:nom, :desc)";
$statement = $pdo->prepare($query);

//Liaison des paramétres à des valeurs
$game_name = "Assasin's Creed Valhalla";
$statement->bindValue(':nom', $game_name);
$statement->bindValue(':desc', "Skol !");

//Execution

$statement->execute() or die(var_dump($statement->errorInfo()));
echo "Le jeu $game_name a été ajouté.<br>";

//La même requête préparé peut être éxecutée plusieurs fois
// avec les valeurs différentes

$statement->bindValue(':nom', "Resident Evil");
$statement->bindValue(':desc', "Miam !");
$statement->execute() or die(var_dump($statement->errorInfo()));
echo "... et puis un autre !<br>";