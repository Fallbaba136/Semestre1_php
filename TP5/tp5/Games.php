<?php
require_once __DIR__.DIRECTORY_SEPARATOR."template/Template.php";
require_once __DIR__.DIRECTORY_SEPARATOR."gdb/GamesDB.php";
require_once __DIR__.DIRECTORY_SEPARATOR."gdb/GameRenderer.php"; // 👈 ajoute ça
?>
<?php ob_start(); ?>

<h1>GAMES</h1>
<?php
$db = new GamesDB();                // 👈 manquait
$games = $db->getAllGames();        // 👈 manquait

foreach($games as $game) {
    $renderer = new GameRenderer($game);
    $renderer->getHTML();
}?>

<?php $content = ob_get_clean(); ?>
<?php Template::render($content); ?>