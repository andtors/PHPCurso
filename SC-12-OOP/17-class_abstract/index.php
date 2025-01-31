<?php

    echo "<h1> Abstract </h1>";

    abstract class Teste {
        
        public static function testandoClasse(){

            echo "Este metodo é de uma classe abstrata<br>";
        }

        abstract public function testeAbs();

    }

    // $t = new Teste;

    Teste::testandoClasse();

    class Nova extends Teste {

        public function testeAbs(){
            echo "Teste metodo abstrato<br>";
        }

    }

    $n = new Nova;
    $n->testeAbs();

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";