<?php

    class Rectangle extends Shape{

        function __construct($ample,$alt){
            parent::__construct($ample,$alt);
        }

        public function area(){
            $area;

            $area = parent::getAmple() * parent::getAlt();

            return $area;
        }

        function toString(){

            return "La mida del area del rectangle es " . area();
        }

    }


?>