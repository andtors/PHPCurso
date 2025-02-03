<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    /*
    $q = "CREATE TABLE teste(
        nome VARCHAR(100),
        sobrenome VARCHAR(100)
    )";
    */

    $q = "DROP TABLE teste";
    $conn->query($q);

    $conn->close();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

