<?php

    class Triangle extends Shape {

        private int $base;

        function __construct($ample,$alt,$base){
            parent:: __constructi($ample,$alt);
            $this->base = $base;

        }

        function getBase(){
            return $this->base;
        }

        public function area(){
            $area;

            $area = ($this->base * parent::getAlt())/2;

            return $area;
        }

        function toString(){

            return "L'area del triangle es " . area();
        }



    }


?>