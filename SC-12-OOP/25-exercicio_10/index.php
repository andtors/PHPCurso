<?php

    echo "<h1> Exercicio 10 </h1>";

    class Passenger {

        public $name;
        public $age;
        public $seatNumber;

        public function getName(){
            echo $this->name . "<br>";
        }

        public function getAge(){
            echo $this->age . "<br>";
        }

        public function getSeatNumber(){
            echo $this->seatNumber . "<br>";
        }   

        public function setSeatNumber($seatNumber){
            $this->seatNumber = $seatNumber;
        }
        
        public function detailsPassenger(){

            echo "Passageiro de nome: $this->name, idade: $this->age, tem o assento número $this->seatNumber<br>";
        }

        function __construct($name, $age, $seatNumber){
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;  
        }
    }

    $passageiro1 = new Passenger("André", 24, 40);
    $passageiro1->detailsPassenger();

    $passageiro1 = new Passenger("Bia", 28, 41);
    $passageiro1->detailsPassenger();



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";