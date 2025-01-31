<?php

    echo "<h1> Exercicio 8 </h1>";

    class Task {

        public $title;
        public $description;
        public $completed;

        public function markAsComplete() {
           
            $this->completed = true;
            
        }

        public function markAsIncomplete() {

            $this->completed = 0;

        }

        public function getTitle() {

            echo $this->title . "<br>";

        }

        public function getDescription() {

            echo $this->description . "<br>";

        }

        public function isCompleted(){

             if($this->completed == true){

                echo "Tarefa completa<br>";
                
             } else {

                echo "Tarefa incompleta<br>";

             }

        }

        function __construct($title, $description, $completed){
            $this->title= $title;
            $this->description= $description;
            $this->completed= $completed;
        }
        
    }

    $acordar = new Task("Despertar", "Acordar as 7h", false);
    $acordar->getTitle();
    $acordar->getDescription();
    $acordar->markAsComplete();
    $acordar->isCompleted();

    echo "<br>";


    $limpar = new Task("Limpar", "Limpar a casa as 13h", false);
    $limpar->getTitle();
    $limpar->getDescription();
    $limpar->isCompleted();


    echo "<br><a href='http://localhost/curso_php/SC-12-OOP'>Voltar</a> ";