<?php

    echo "<h1> Verificando classes </h1>";

    class Humano {

        public $idade;
        public $nome;
        public $profissao;

        public function falar(){}

        public function andar(){}
    }

    if(class_exists("Humano")){

        echo "A classe existe<br>";

    } else {

        echo "A classe não existe<br>";

    }

    if(class_exists("Cachorro")){

        echo "A classe existe<br>";

    } else {

        echo "A classe não existe<br>";
        
    }

    print_r(get_class_vars("Humano"));
    echo "<br>";
    print_r(get_class_methods("Humano"));



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";