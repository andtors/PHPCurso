<?php

    echo "<h1> Visibilidade (encapsulamento) </h1>";

    /*

        public = A propriedade ou método pode ser acessada de qualquer forma;

        protected = A propriedaed ou método pode ser acessada apenas pela classe
        de origem ou as que recebem a mesma herança;

        private = a propriedade ou método pode ser acesada apenas pela classe
        que foi criada;
    
    */

    class Car {

        public $rodas = 4;
        private $vidro = "Sem pelicula";
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        }

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }

        public function setPortas($qtdPorta){
            return $this->portas = $qtdPorta;
        }
    }

    class Mecanico {

        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }

    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $matheus = new Mecanico;

    $matheus->alterarRodas($carro);

    echo $carro->rodas . "<br>";
    
    // Não pode alterar por que é private
    // $matheus->colocarPelicula($carro, "G20");

    // $carro->peliculaDeFabrica("G10");

    // echo $carro->vidro . "<br>";

    echo $carro->getVidro() . "<br>";
    
    // echo $carro->portas . "<br>";

    echo $carro->getPortas() . "<br>";

    echo $carro->setPortas(20) . "<br>";



    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";