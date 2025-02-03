<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $sql = "SELECT * FROM ITENS";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

