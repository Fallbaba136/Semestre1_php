<?php require_once "helpers.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test inclusion</title>
</head>
<body>
    <?php include "header.html" ?>

    <?php generateTitle("introduction") ?>
    <p>
        bla bla blaa
    </p>

    <?php generateTitle('serveurs web dynamiques') ?>
    <p>
        bla bla blaa
    </p>

    <?php generateTitle('conclusion') ?>
    <p>
        bla bla blaa
    </p> 

    <?php include "footer.php"; ?>
    
</body>
</html>