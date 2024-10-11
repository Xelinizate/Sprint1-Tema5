<?php

    require_once 'Shape.php';

    class Rectangle extends Shape{

         public function area(){

            return $this->ample * $this->alt;
        }

        function toString(){

            return "La mida del area del rectangle es " . $this->area();
        }

    }


?>