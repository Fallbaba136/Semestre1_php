<?php 
$greeting = "bonjour";
$fname = "fall";
$message = $greeting . " " . $fname . " ! ";
?>

<p> Le message : <b><?php echo $message ?></b></p>

<?php 
// PHP offre de nombreuse fonctions pour manipuler les strings 

// ucfirst() met le premier lettre de la chaine en majuscule 
// stroupper() met tout la chaine en majuscule 

$formatted = ucfirst($greeting) . " " . strtoupper($fname) . " !!! " ;
?>
<p>
    Le message formaté : <b><?php echo $formatted ?></b> <br>
    Longeur : <?php echo strlen($formatted) ?> caractére(s)
</p>