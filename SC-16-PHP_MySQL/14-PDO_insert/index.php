<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "torres10";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome = "Suporte monitor";
    $descricao = "O suporte está novo e na caixa ainda";  

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";
