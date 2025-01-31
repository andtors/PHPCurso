<?php

    echo "<h1> Exercicio 3 </h1>";

    class Pessoa {

        public $nome;
        public $idade;
        
        function andar($km){

            echo "A pessoa anda $km km por dia <br>";
        }
    }

    $andre = new Pessoa;
    $bia = new Pessoa;

    $andre->nome = "André";
    $andre->idade = 24;

    echo "O nome dele é $andre->nome e sua idade é $andre->idade<br>";    
    $andre->andar(2);

    $bia->nome = "Bia";
    $bia->idade = 28;

    echo "O nome dele é $bia->nome e sua idade é $bia->idade<br>";   
    $bia->andar(4);

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";