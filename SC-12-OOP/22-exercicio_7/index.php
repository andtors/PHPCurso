<?php

    echo "<h1> Exercicio 7 </h1>";

    class Calculadora {

        function soma($a, $b){

            echo $a + $b . "<br>";

        }

        function subtrair($a, $b){

            echo $a - $b . "<br>";
            
        }

        function multiplicacao($a, $b){

            echo $a * $b . "<br>";
            
        }

        function divisao($a, $b){

            echo $a / $b . "<br>";
            
        }

    }

    $calc = new Calculadora;

    $calc->soma(40, 20);
    $calc->subtrair(40, 20);
    $calc->multiplicacao(40, 20);
    $calc->divisao(40, 20);
    
    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";