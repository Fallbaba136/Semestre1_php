<?php
require_once 'header.php';
require_once 'swg/SecretWordGame.php';
 
//Intanciation de la classe 
$secretWord = new SecretWordGame("i love php");
//Initialisations du $reponse
$reponse = null; 

//Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST["proposition"])) {
        //Recuperation de la proposition
        $param = trim($_POST["proposition"]);
        //On convertir la proposition en tableau de char
        $word = str_split($param);
        //On stocke le tableau dans tab
        $reponse = $secretWord->try($word);
    }
}
if ($reponse && $reponse['win']) {
    $secretWord->generateWin();
}else {
    $secretWord->generateInput($reponse);
}



require_once 'footer.php';
?>