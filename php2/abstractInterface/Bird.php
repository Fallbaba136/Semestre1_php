<?php
require_once "Animal.php";

class Bird extends Animal{
    
    public function scream(): string
    {
        return "TWEET";
    }
}