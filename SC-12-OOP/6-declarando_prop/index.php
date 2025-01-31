<?php

    echo "<h1> Declarando propriedades </h1>";

    class Car {

        public $rodas;
        public $aro = 20;
        public $cor = "Vermelha";

        function ligar(){
            echo "Vrummm<br>";
        }
    }

    $ferrari = new Car;

    $ferrari->rodas = 4;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    $ferrari->cor = "Azul";

    echo $ferrari->cor . "<br>";

    $ferrari->ligar();

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";