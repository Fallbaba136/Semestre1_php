<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'gdb' . DIRECTORY_SEPARATOR . 'GameRenderer.php';

try {
    $db_name = "gamesdb"; $db_host = "127.0.0.1"; $db_port = "3306";
    $db_user = "root"; $db_pwd = "";
    $dsn = 'mysql:dbname=' . $db_name . ';host=' . $db_host . ';port=' . $db_port;
    $pdo = new PDO($dsn, $db_user, $db_pwd);
} catch(\Exception $ex) {
    die("Erreur : " . $ex->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM games");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_CLASS, "gdb\GameRenderer");
?>

<h1>Liste des jeux</h1>
<?php foreach($result as $game): ?>
    <?= $game->getHTML() ?>
    <?php endforeach; ?>