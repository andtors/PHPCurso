<?php

    echo "<h1> Classe anônima </h1>";

    $pessoa = new class() {

        public $nome = "Matheus";

        public function dizerNome(){
            echo "Olá meu nome é $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";