<?php

    echo "<h1> Métodods </h1>";

    class Pessoa {

        function falar(){

            echo "Olá eu sou um objeto.<br>";
        }

        function somar($x, $y){

            echo $x + $y . "<br>";
        }
    }

    $matheus = new Pessoa;

    $matheus->falar();
    $matheus->falar();

    $joao = new Pessoa;

    $joao->falar();
    
    $matheus->somar(2,2);
    $joao->somar(10, 12);

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";