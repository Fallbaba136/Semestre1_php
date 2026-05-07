<!-- On utilise un auto loading -->
<?php 
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Logger.php";
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Template.php";
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Browser.php";
    session_start();
?>
<!-- On demarre le buffering -->
 <?php ob_start(); ?>

    <h1 class="prince2 text-white text-center p-3 ms-8 display-1">WELCOME TO THE MAGIC STORE</h1>

<?php 
$logger = new Logger();
$estConnecte = false;
$messageErreur = false;
$nom='';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   if (isset($_POST['username']) && isset($_POST['password'])) {
      
       $param1 = trim($_POST['username']);
       $param2 = trim($_POST['password']);
       $tab = $logger->log($param1, $param2);


       if(isset($tab["gandalf"]) && $tab["gandalf"]){
           $estConnecte = true;
           $nom = $tab["gandalf"];
           $_SESSION['username'] = $param1;
           header("Location: http://localhost/semestre1_php/TP4/version2/index.php");
           exit();
       }else {
           $messageErreur = $tab["error"];
       }
   }
}

if (!empty($messageErreur)) {
 ?>
 <span style="background-color: black; color: #cc5500; font-size: 50px;">
    <?= $messageErreur; ?>
</span>
 <?php
}


if (!$estConnecte) {
 
    ?>
     <div class="d-flex justify-content-center align-item-center bg-white p-5">
     <?php  $logger->generateLoginForm('loging.php');;?>
    </div>
    <?php
}

?>

 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>