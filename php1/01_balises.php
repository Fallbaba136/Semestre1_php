<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple <?php "de pré-processing" ?></title>
    <style>
        .bleu{
            color: <?php echo "blue" ?>
        }
    </style>
</head>
<body>
    <h2 class="bleu">
        Voici un exemple de <span style="color:red"> <?=  "code généré par php" ?></span>
    </h2>
</body>
</html>