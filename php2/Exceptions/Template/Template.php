<?php
class Template
{
        public static function render(string $content) : void {?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Test Buffering</title>
                <style>
                        .black-ribbon{
                                padding: 3px;
                                background: black;
                                color: white;
                        }
                        #injected-content{
                                height:100px;
                                display: flex;
                                justify-content: start;
                                align-items: center;
                                color: darkred;
                        }
                </style>
        </head>
        <body>
                <?php include "header.php" ?>
                <div id="injected-content">
                        <?php echo $content ?> <!--Injection du contenu -->
                </div>
                <?php include "footer.html" ?>
        </body>
        </html>
    }
}