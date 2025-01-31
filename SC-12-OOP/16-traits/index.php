<?php

    echo "<h1> Traits </h1>";

    trait Objeto {
        public function teste(){

            echo "Testadno traitr de objeto <br>";

        }
    }

    trait Testando{

        public $y = 10;

        public function traitTeste(){

            echo "Este metodo é da trait testando <br>";
            
        }
    }

    class Central {

        use Objeto;
        use Testando;
        
    }

    $x = new Central;

    $x->teste();
    $x->traitTeste();
    echo $x->y . "<br>";

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";