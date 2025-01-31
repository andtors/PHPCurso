<?php

    echo "<h1> Exercicio 5 </h1>";

    class Humano {

        public $nome;
        public $idade;

        public function falar(){

            echo "Eu $this->nome estou falando! <br>";
        }

    }

    class Professor extends Humano {

        public $materia;
        public $graduação;

        public function falarCurriculum(){

            echo "Eu $this->nome de $this->idade anos, graduado em $this->materia estou falando! <br>";
        }

    }

    $bia = new Humano;

    $bia->nome = "Bia";
    $bia->idade = 28;

    $bia->falar();

    $profAndre = new Professor;
    
    $profAndre->nome = "André";
    $profAndre->idade= 24;
    $profAndre->materia = "Matematica";
    $profAndre->graduacao = "PHD";

    $profAndre->falarCurriculum();



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";