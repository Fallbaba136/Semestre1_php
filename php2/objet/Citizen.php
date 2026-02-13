<?php
    require_once "People.php";

    class Citizen extends People
    {
        // attribut de classe (static)
        private static int $population = 0;

        // methode de classe (static)
         public static function getPopulation(): int
         {
            return self::$population; // accés à l'attrubut de classe
         }

         //------------------------------------------------------------------------

         // attribut d'instance
         private ?string $address ; // le ? signifie que l'attribut peut être null

         /**
          * Citizen constructor
          * @param $name
          */

        public function __construct($name)
        {
            parent::__construct($name); // appel à une méthode de la superclasse 
            self::$population++; // accés à un membre static
        }

        /**
         * @param string|null $adress
         */
        public function setAddresse(?string $address): void
        {
            $this->address = $address;
        }
        /**
         *@return string|null 
         */
        public function getAddress(): ?string
        {
            return $this->address;
        }        
    }
?>