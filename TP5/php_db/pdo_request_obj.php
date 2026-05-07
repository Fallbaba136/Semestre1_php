<?php

// Informations sur la BDD et le serveur qui la contient
$db_name = "gamesdb" ; $db_host = "127.0.0.1" ; $db_port = "3306" ;
$db_user = "root" ; $db_pwd = "" ;

// Connexion à la BDD
try{
    $dsn = 'mysql:dbname=' . $db_name . ';host='. $db_host. ';port=' . $db_port;
    $pdo = new PDO($dsn, $db_user, $db_pwd) ;
}catch(\Exception $ex){
    die("Erreur : " . $ex->getMessage()) ;
}

// Préparation d'une requête simple

$sql = "SELECT * FROM games";
$statement = $pdo->prepare($sql);

//Exécution de la requête 

$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ); ?>

<h1>Liste des jeux</h1>
<ul>
    <!-- Affichage du champ 'name' des objets récupérés-->
    <?php foreach($result as $game): ?>
        <li><?= $game->name; ?></li>
    <?php endforeach; ?>
</ul>