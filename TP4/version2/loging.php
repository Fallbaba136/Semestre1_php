<!-- On utilise un auto loading -->
<?php 
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Logger.php";
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Template.php";
    require_once __DIR__ . DIRECTORY_SEPARATOR . "magic" . DIRECTORY_SEPARATOR . "Browser.php";
?>
<!-- On demarre le buffering -->
 <?php ob_start(); ?>

    <h1 class="prince2 text-white text-center p-3 ms-8 display-1">WELCOME TO THE MAGIC STORE</h1>
    <img src="img/MagicLogo4.png" class="d-block mx-auto" alt="si l'image ne charge pas vous verrez ce texte">

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


       if($tab["gandalf"]){
           $estConnecte = true;
           $nom = $tab["gandalf"];
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


if ($estConnecte) {
   echo "<div class='d-flex justify-content-center align-items-center text-success' style='min-height: 80vh;'>
    <div class='text-center'>
    <h1 class='display-1'>HELLO   $nom  </h1> 
    <form method='POST'> 
      <div class='mt-2'>
       <button class='btn btn-primary mt-3 bg-secondary position-absolute top-0 end-0 m-3 bg-secondary' type='submit' name='logout'>LOGOUT</button>
      </div>
    </form>
  </div>
</div>";
  }else {
    ?>
     <div class="d-flex justify-content-center align-item-center bg-white p-5">
     <?php  $logger->generateLoginForm('http://localhost/semestre2_php/TP2/version2/index.php');?>
    </div>
    <?php
}

?>

 <?php $content=ob_get_clean() ?>

 <!-- Utilisation du contenu bufferise -->
<?php Template::render($content) ?>