<?php

    echo "<h1> Floats </h1> <br>";
    $a = 1.12;

    echo $a;
    echo "<br>";
    echo 1,23;
    echo "<br>";
    echo 12.5 + 1.3278;
    echo "<br>";
    echo 12 + 1.3278;
    echo "<br>";
    echo "<br>";

    echo "<h2> Checando se é float </h2>";

    $a = "teste";
    $b = 12.8;

    if(is_float($a)){
        echo "é float 1!<br>";
    }

    if(is_float($b)){
        echo "é float 2!<br>";
    }

    if(is_float(6565.63)){
        echo "é float 3!<br>";
    }

    if(is_float("teste")){
        echo "é float 4!<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "<h2> Exercicio </h2>";

    $float1 = 123.123;
    $float2 = 456.456;
    $float3 = -789.789;
    

    echo $float1;
    echo "<br>";
    echo $float2;
    echo "<br>";
    echo $float3;
    echo "<br>";

    if(is_float($float1)){
        echo "é float 1!<br>";
    }

    if(is_float($float2)){
        echo "é float 2!<br>";
    }

    if(is_float($float3)){
        echo "é float 3!<br>";
    }

    echo "<a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";