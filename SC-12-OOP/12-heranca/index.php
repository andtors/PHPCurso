<?php

    echo "<h1> Herança </h1>";

    class Humano {

        public $idade = 29;

        public function falar(){

            echo "Olá mundo!<br>";
        }

        private function gritar(){

            echo "PHP É MUITO BOM<br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala <br>";
        }

        public function acessarFalarBaixinho(){
            $this->falarBaixinho();
        }
    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();
    // $ze->falarBaixinho();
    $ze->acessarFalarBaixinho();

    class Programador extends Humano {

        public function acessarFalarBaixinhoProgramador(){
            $this->falarBaixinho();
        }
    }


    $matheus = new Programador;

    echo $matheus->idade;
    echo "<br>";

    $matheus->falar();
    $matheus->acessarGritar();
     // $matheus->falarBaixinho();
    $matheus->acessarFalarBaixinho();
    $matheus->acessarFalarBaixinhoProgramador();



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";