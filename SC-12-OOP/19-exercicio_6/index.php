<?php

    echo "<h1> Exercicio 6 </h1>";

    class Cachorro {

        public $nome;
        public $idade;
        public $raca;
        
        function __construct($nome, $idade, $raca){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
        }

        function detalhes(){

            echo "O nome do cachorro é $this->nome, tem $this->idade anos, e é da raça $this->raca<br>";
        }
        
    }

    $zeca = new Cachorro("Zeca", 4, "ChowChow");
    $pitu = new Cachorro("Pitu", 10, "Labrador");
    $tommy = new Cachorro("Tommy", 20, "Dauschund");

    $zeca->detalhes();
    $pitu->detalhes();
    $tommy->detalhes();

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";