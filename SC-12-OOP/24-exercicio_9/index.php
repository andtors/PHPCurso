<?php

    echo "<h1> Exercicio 9 </h1>";

    class Contact{

        public $name;
        public $email;
        public $phone;

        function getName(){

            echo $this->name . "<br>";

        }

        function getEmail(){

            echo $this->email . "<br>";

        }
        
        function getPhone(){

            echo $this->phone . "<br>";

        }

        function setEmail($email){

            $this->email = $email;

        }

        function setPhone($phone){

            $this->phone = $phone;

        }


        function __construct($name, $email, $phone){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
        }
        
    }

    $contato1 = new Contact("André", "andre@email.com", 119999999);
    $contato1->getName();
    $contato1->getEmail();
    $contato1->getPhone();
    $contato1->setEmail("andre.torres@gmail.com");
    $contato1->setPhone(11987654321);
    $contato1->getEmail();
    $contato1->getPhone();
    


    echo "<br>";

    $contato1 = new Contact("Bia", "bia@email.com", 1122222222);
    $contato1->getName();
    $contato1->getEmail();
    $contato1->getPhone();
    

    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";