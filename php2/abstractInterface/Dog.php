<?php 
require_once "Animal.php";

class Dog extends Animal
{
    public function scream(): string 
    {
        return "WOOF" ;
    }
}