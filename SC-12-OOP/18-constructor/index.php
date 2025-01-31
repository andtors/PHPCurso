<?php

    echo "<h1> Constructors </h1>";

    class Car{

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferrari = new Car(4, "Vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

    $bmw = new Car(4, "Azul", "BMW");

    echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor <br>";
    

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";