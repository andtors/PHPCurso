<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = "Sofá";
    $descricao = "Sofá seminovo com madeira de construção";
    $id = 11;

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error()){
        echo "Erro: " . $stmt->error;
    }

    $conn->close();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

