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
            $word = [];
        }
      for ($i=0; $i < count($this->secret) ; $i++) { 
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
            <?= $reponse["result"] ?? "?\t????\t???"  ?>
        </h2>
        <input type="text" class="form-control bg-transparent" name="proposition">
        <button type="submit" class="btn"> <h1>Try</h1></button>
        </form>
        <?php
    }

    public function generateWin() : void{
        ?>
        
        <h1 class="text-info-emphasie">!!! YOU WIN !!!</h1>
        
        
        <?php
    }
}
