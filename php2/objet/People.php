<?php

class People
{
    private string $name; // string seulement pour php >= 7.4

    /**
        *People constructor 
        * @param $name
     */

     public function __construct($name)
     {
        $this->name = $name;
     }

     /**
        *@return string
      */

      public function getName(): string
      {
        return $this->name;
      }

      /**
       * @return string
       */

       public function __toString() : string 
       {
        return ucwords($this->getName());
       }
}