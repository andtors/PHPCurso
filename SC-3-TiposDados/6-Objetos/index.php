<?php

    echo "<h1> Objetos </h1>";

    class Pessoa {
        function falar(){
            echo "Olá pessoal!";
        }
    }


    $matheus = new Pessoa();

    $matheus->nome = "Matheus";

    echo $matheus->nome;
    
    echo "<br>";

    $matheus->falar();

    echo "<br><a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";