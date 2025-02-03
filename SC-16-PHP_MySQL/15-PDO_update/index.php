<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "torres10";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 17;
    $nome = "Suport nootbook";
    $descricao = "Suporte nootbook novo e resistente";  

    $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";
