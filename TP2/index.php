<?php 
require_once 'header.php';
require_once  'jarvis/JarvisLogger.php';
//Intanciation de la classe
$jarvis = new JarvisLogger();
?>

 <?php
 $estConnecte = false;
 $messageErreur = false;
 $nom='';

 // Traitement du formulaire seulement si POST
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
       //Recuperation des parametres   
        $param1= trim($_POST['username']);
        $param2 = trim($_POST['password']); 
         $tab = $jarvis->log($param1, $param2);

          if ($tab["granted"]) {
              $estConnecte = true;
              $nom = $tab["nick"];
            }else {
              $messageErreur = $tab["error"];
            }
    }else {
         $tab = $jarvis->log("", "");
    }
  }


//L'affichage

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
     <?php  $jarvis->generateLoginForm('http://localhost/semestre2_php/TP2/index.php');?>
    </div>
    <?php
}



require_once 'footer.php';
?>