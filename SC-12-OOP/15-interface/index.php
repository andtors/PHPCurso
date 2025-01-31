<?php

    echo "<h1> Interface </h1>";

    interface Caracteristicas {

        const nome = "Matheus";
    
        public function falar();

    }

    class Humano implements Caracteristicas{

        public $idade = 29;

        public function falar(){
            echo "Olá mundo! <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>"; 
        }
    }
    
    $matheus = new Humano;
    $matheus->falar();
    $matheus->dizerNome();


    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";