<?php

     
    abstract class Shape{

        public int $ample;
        public int $alt;

        function __construct($ample,$alt){
            $this->ample = $ample;
            $this->alt = $alt;
        }

        abstract public function area();


    }


?>
