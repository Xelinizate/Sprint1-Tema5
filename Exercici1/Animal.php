<?php

    class Animal extends So{


        function __construct($tipoAnimal){
            parent::__construct($tipoAnimal);
        }

        public function makeSound(){
            $soAnimal;

            switch (parent::getTipoAnimal()):
                case 'vaca':
                    $soAnimal = "Muu, Muu...";
                    break;
                case 'ovella':
                    $soAnimal = "Be, Be, Be...";
                    break;
                case 'porc':
                    $soAnimal = "Oinc,oinc...";
                    break;
                    default:
                    echo "No reconeix l'animal.";
                    break;
            endswitch;

            return $soAnimal;

        }

        function toString(){

            return "El tipus d'animal escullit es: " . parent::$tipoAnimal . 
            " el so que realitza es: " . makeSound();
        }


    }

?>