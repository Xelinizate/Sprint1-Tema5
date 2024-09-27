<?php

    abstract class So{

        protected $tipoAnimal = " ";

        function __construct($tipoAnimal){
            $this->tipoAnimal = $tipoAnimal;
        }

        function getTipoAnimal(){
            return $this->tipoAnimal;
        }
        function setTipoAnimal($tipoAnimal){
            $this->tipoAnimal = $tipoAnimal;
        }

        abstract public function makesound();

    }


?>