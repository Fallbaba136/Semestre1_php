<?php

class Browser{
    private $cart;

    public function __construct()
    {
        if (file_exists("data/cards.json")) {
            $json = file_get_contents("data/cards.json");
            $data = json_decode($json, true);
            $this->cart=$data;
        }else {
            echo "Fichier Introuvable";
        }
    }
public function generateCards():void{
    ?>
    <div class="row row-cols-1 row-cols-md-3 g-1">
    <?php foreach($this->cart as $cle => $valeur):?>
        <div class="col">
            <div class="ratio ratio-1x1 bg-transparent">
                <img src="<?= $valeur['image_uris']['normal'] ?>" 
                     alt="<?= $valeur['name']?>"
                     class="object-fit-contain w-100 h-100">
            </div>
        </div>
    <?php endforeach ?>
    </div>
    <?php
}
}