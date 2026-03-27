
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="main.css">
    <title>JOKE</title>
</head>
<body>
    <?php
    if (file_exists("jokes.json")){
        $json = file_get_contents("jokes.json");
        $data = json_decode($json, true);
    }
    else{
        echo "Fichier Introuvable";
    }

    echo "<ul id='joke'>";
    foreach($data as $cle => $joke){
      echo   "<li>" . $joke["joke"] . "</li> <br>"; 
    }
    echo "</ul>"; 
?>
</body>
</html>
    