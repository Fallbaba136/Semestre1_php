<?php 
    abstract class Animal
    {
        public abstract function scream() : string; // methode

        public function __toString()
        {
            return "The " . get_called_class() . " goes " . $this->scream();
        }

    }
?>