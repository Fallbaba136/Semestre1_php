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
$query = "INSERT INTO games (name, description) VALUES (:nom, :desc)" ;
$statement = $pdo->prepare($query) ;

// Liaison des paramètres à des variables
$statement->bindParam(':nom', $game_name) ;
$statement->bindParam(':desc', $desc) ;

// Affectation des variables/paramètres et exécution
$game_name = "Donkey Kong" ;
$desc = "Ça donne la banane." ;
$statement->execute() or die(var_dump($statement->errorInfo())) ;
echo "Le jeu $game_name a été ajouté.<br>" ;

// La même requête préparée peut être exécutée plusieurs fois avec les valeurs
// différentes simplement en réaffectant les variables liées
$game_name = "Elden Ring" ;
$desc = "Un giga jeu !" ;
$statement->execute() or die(var_dump($statement->errorInfo())) ;
echo "Le jeu $game_name a été ajouté.<br>" ;