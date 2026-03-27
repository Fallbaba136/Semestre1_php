<?php

final class SecretWordGame 
{
    //Attributs
    private $secret;

    //Constructeur 
    public function __construct(string $secret)
    {
        $tab = str_split($secret);
        $this->secret = $tab;
    }

/**
 * Le ? devant un type signifie que la variable peut être de ce type ou null
 * ?array->$sword peut être un tableau ou null
 * =null si on passe pas d'argument la valeur sera null par defaut
 */
    public function try(?array $word=null): array{
        $resultat = [];
        $win = true;
           if (!isset($word)) {
            //Initialisation du tableau au cas ou c'est pas vide
            $word = [];
        }
      for ($i=1; $i < count($this->secret) ; $i++) { 
            if (isset($word[$i]) && $this->secret[$i] == $word[$i]) {
            $resultat[$i] = $this->secret[$i];
        }else {
            $resultat[$i] = "?";
            $win = false;
        }
      }
      return [
        'word'=>$word,
        'win'=> $win,
        'result'=> implode('', $resultat)
      ];
    }

    public function generateInput(?array $reponse): void{
        ?>
        <form action="" method="post">

            <!-- On utilise l'erreur de coalescence null
            Si le variable est null on prend le valeur par default -->
        <h2 id="interro">
            <?= $reponse["result"] ?>
        </h2>
        <input type="text" class="form-control bg-transparent border border-dark" name="proposition">
        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn">
                <span class="d-flex jsutify-content-center align-item-center bg-black text-white p-2 h2">Try</span>
            </button>
        </div>
        </form>
        <?php
    }

    public function generateWin() : void{
        ?>
        <h1 class="love d-flex text-center">i love php</h1>
        <h1 class="win text-info-emphasie  justify-content-center align-item-center text-success">!!! YOU WIN !!!</h1>
        
        
        <?php
    }
}
