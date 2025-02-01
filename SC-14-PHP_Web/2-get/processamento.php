<?php

    if(isset($_GET["nome"])){

        $nome  = $_GET['nome'];
        $idade = $_GET['idade'];

    } else {

        $nome  = "Padrão";
        $idade = "Padrão";
        
    }
    
    echo "<br><a href='http://localhost/curso_php/SC-14-PHP_Web/2-get/index.php'>Voltar</a> ";
    ?>

    <h1> Seu nome é <?= $nome ?> e você tem <?= $idade ?> anos.</h1>