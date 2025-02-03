<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "torres10";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 6;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // $data =  $stmt->fetch(PDO::FETCH_ASSOC);

    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($itens);

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";
