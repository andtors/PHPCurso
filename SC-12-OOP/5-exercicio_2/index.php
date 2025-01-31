<?php

    echo "<h1> Exercicio 2 </h1>";

    class Cachorro {

        function latir(){

            echo "Estou latindo<br>";
            
        }

        function andar(){

            echo "Estou andando<br>";

        }
    }

    $doberman = new Cachorro;
    $golden = new Cachorro;

    $doberman->latir();
    $golden->andar();

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";