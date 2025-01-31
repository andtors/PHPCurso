<?php

    echo "<h1> Ancestralidade </h1>";

    
    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {


    }

    $marcos = new Humano;

    $tucano = new Animal;

    if($marcos instanceof Humano){

        echo "Marcos é um humano <br>";
    } else {

        echo "O Marcos não é um humano <br>";
        
    }

    if($tucano instanceof Humano){

        echo "Marcos é um humano <br>";

    } else {

        echo "O tucano não é um humano <br>";
        
    }

    $pedro = new Professor;

    if($pedro instanceof Professor){

        echo "Pedro é um professor <br>";
    } else {

        echo "O Pedro não é um professor <br>";
        
    }

    if($pedro instanceof Humano){

        echo "Pedro é um humano <br>";
    } else {

        echo "O Pedro não é um humano <br>";
        
    }

    if($tucano instanceof Professor){

        echo "Tucano é um professor <br>";

    } else {

        echo "O Tucano não é um professor <br>";
        
    }

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";