<?php

    echo "<h1> Strings </h1><br>";
    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simples <br>';
    echo "Ele disse: 'Ola!' <br>";
    echo 'Ele disse: "Ola!" <br>';
    $idade = 15;
    echo "Ele tem $idade anos<br>";
    echo 'Ele tem $idade anos<br>';
    echo "<br>";
    echo "<br>"; 

    echo "<h2> Checado Strings </h2>";

    $str = "Matheus";
    $num = 28;

    if(is_string($str)){
        echo "é uma string 1<br>";
    }

    if(is_string($num)){
        echo "é uma string 2<br>";
    }

    if(is_string("asd")){
        echo "é uma string 3<br>";
    }
    
    echo "<br>";
    echo "<br>"; 

    echo "<h2> Exercicio </h2>";

    echo "Texto 1<br>";
    echo 'Texto 2<br>';

    echo "Olá meu nome é $str tenho $num anos de idade! <br>";


    echo "<a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";
