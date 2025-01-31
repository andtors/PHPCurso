<?php

    echo "<h1> Exercicio 4 </h1>";

    class Carro {

        public $marca;
        public $cor;
        public $velocidade_maxima;

        function setVelocidadeMaxima($vel){

            $this->velocidade_maxima = $vel;

        }

        function getVelocidadeMaxima(){

            echo "O carro $this->marca da cor $this->cor tem $this->velocidade_maxima km/h de velocidade maxima.<br>";
        }
    }

    $ferrari = new Carro;
    $ferrari->marca = "Ferrari";
    $ferrari->cor = "Vermelha";
    $ferrari->setVelocidadeMaxima(150);
    $ferrari->getVelocidadeMaxima();

    $lamborghini = new Carro;
    $lamborghini->marca = "Lamborghini";
    $lamborghini->cor = "Amarela";
    $lamborghini->setVelocidadeMaxima(200);
    $lamborghini->getVelocidadeMaxima();



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";