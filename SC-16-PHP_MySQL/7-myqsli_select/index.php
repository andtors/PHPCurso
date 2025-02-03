<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();
    
    // Um resultaod
    $item = $result->fetch_assoc();

    // TODOS os resultados
    $itens = $result->fetch_all();

    print_r($itens);

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

