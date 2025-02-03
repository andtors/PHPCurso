<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $nome = "Suporte de microfone";
    $descricao = "O suporte é novo e foi fabricado naa China";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double;

    $stmt->execute();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

