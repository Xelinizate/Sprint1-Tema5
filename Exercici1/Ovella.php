<?php

    class Ovella extends Animal{

        public function makesound()
        {
            return "Bee, bee";
        }

        function toString(){

            return "El tipus d'animal escullit es: " . $this->tipoAnimal . 
             "el seu nom es: " . $this->nom . ".<br> I el so que realitza es: " . $this->makeSound();
        }
    }

   

?>