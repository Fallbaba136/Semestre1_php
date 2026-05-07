<?php
final class Template{
    public static function render(string $content){?>

    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Game Corner</title>
    </head>
    <body>
        <?php include_once "header.php" ?>
        <main>
            <?= $content ?>
        </main>
        <?php include_once "footer.php" ?>
    </body>
    </html>
    <?php
    }
}