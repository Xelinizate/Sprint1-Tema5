<?php

    require_once 'Shape.php';

    class Triangle extends Shape {

        public function area(){


            return ($this->ample * $this->alt)/2;
        }

        function toString(){

            return "L'area del triangle es " . $this->area();
        }

    }


?>