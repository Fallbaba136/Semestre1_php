<?php
    include "Citizen.php";

    $greg = new Citizen("Babacar Fall");

    // La syntaxe Heredoc pour une chaine sur plusieurs lignes
    $address = <<<EOT
    666 Highway to Hell
    New HAVEN - USA
    EOT;

    $greg->setAddresse($address);
?>

<p>
    <?php echo "<b>$greg</b> a été céé." ?>
</p>

<p>
    <?php echo "<b>$greg</b> a été créé." ?>
</p>

<p style="white-space: pre ; font-wzight: bold"><?php echo $greg->getAddress() ?></p>
<p>
    Population : <b><?php echo Citizen::getPopulation() ?></b>
</p>