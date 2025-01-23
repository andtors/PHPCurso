<?php

    echo "<h1> Números inteiros </h1>";
    echo "<br>";
    echo 5;
    echo "<br>";
    echo 5 + 7;
    echo "<br>";
    echo -12;
    echo "<br>";
    echo 5 - 12;


    $n = 5;
    echo "<br>";
    echo $n;

    echo "<br>";
    echo "<br>";
    echo "<h2>Exercicio</h2>";

    echo "<br>";
    echo 1;
    echo "<br>";
    echo 2;
    echo "<br>";
    echo 3;
    echo "<br>";
    echo "<br>";

    echo "<h2>Checando número inteiro</h2>";
    echo "<br>";
    
    if(is_int(5)){
        echo "é um inteiro 1 <br>";
    }

    if(is_int("Não é inteiro")){
        echo "é um inteiro 2 <br>";
    } 

    $a = 10;

    if(is_int($a)){
        echo "é um inteiro 3 <br><br>";
    } 
    

    echo "<a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";