<?php

    abstract class Animal{

        public $tipoAnimal;
        public $nom;

        function __construct($tipoAnimal, $nom){
            $this->tipoAnimal = $tipoAnimal;
            $this->nom = $nom;
        }

        abstract public function makesound();

    }


?>