Tu vas rentrer
<?php
    $a_le_permis = true;
?>

<?php if($a_le_permis) : ?>
<!-- apparait seulement si la condition est true -->
 <span style="color: blue"> en voiture :)</span>
 <?php else : ?>
        <!-- apparait seulement si la condition est false -->
         <span style="color: red">à pied :(</span>
<?php endif?><br>
<br>
<?php
    $phonetic_alphabet=array(
        "Alpha" => "A",
        "Bravo" => "B",
        "Charlie" => "C",
        "Delta" => "D"
    );
?>

<style>
    .cell{
        width: 50%;
        border: 1px solid black;
        padding: 3px;
    }
</style>

<table>
    <tr> <th colspan="2">Alphabet phonétique de l'OTAN</th></tr>
    <?php foreach($phonetic_alphabet as $code => $char) : ?>
        <!-- ce code HTML est intégré à la boucle -->
         <tr>
            <td class="celle"> <?= $code ?></td>
            <td class="cell" style="text_align: center"> <?= $char ?></td>
         </tr>
         <?php endforeach ?>
</table><br>

Tu vas rentrer 
<?php 
    $a_le_permis = false;
?>


