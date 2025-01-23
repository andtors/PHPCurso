<?php 

    echo "<h1> Booleanos </h1>";
    
    echo true;
    echo "<br>";
    echo false;

    if(true){
        echo "é verdadeiro <br>";
    }

    if(5 > 2){
        echo "é verdadeiro <br>";
    }

    $podeEntrar = true;

    if($podeEntrar){
        echo "O Usuario pode entrar";
    }
    echo "<br>";
    echo "<br>";

    echo "<h2>Checando o dado Booleano</h2>";

    $a = true;

    if(is_bool($a)){
        echo "é um booleano 1<br>";
    }

    if(is_bool(0)){
        echo "é um booleano 2<br>";
    }

    if(is_bool(false)){
        echo "é um booleano <br>";
    }

    if(is_bool(0 == false)){
        echo "0 é considerado falso <br>";
    }
    echo "<a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";

