<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    if($conn->connect_errno){
        echo "Erro na conexão<br>";
        echo "Erro: " . mysqli_connect_error() . "<br>";
        echo "Erro: " . $conn->connect_error . "<br>";
    }

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

