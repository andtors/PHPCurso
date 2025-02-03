<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

    $id = 15;

    $stmt->bind_param("i", $id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }

    $conn->close();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

