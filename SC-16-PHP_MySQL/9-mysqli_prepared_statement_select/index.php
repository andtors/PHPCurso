<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM itens 
                            WHERE id > ?");

    $stmt->bind_param("i", $id);
    
    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();

    $conn->close();

    print_r($data);

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

