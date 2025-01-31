<?php

    echo "<h1> Constantes em classes </h1>";

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstant(){

            echo "Este ser humano tem " 
            . self::BRACOS . " braços, " 
            . self::BRACOS . " pernas, " 
            . self::OLHOS . " e dois olhos.<br>";

        }

    }

    $matheus = new Humano;

    echo $matheus::OLHOS . "<br>";

    $matheus->mostrarConstant();    


    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";