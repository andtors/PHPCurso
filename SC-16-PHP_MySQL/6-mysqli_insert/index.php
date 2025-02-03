<?php

    $host = "localhost";
    $user = "root";
    $pass = "torres10";
    $db = "cursophp";

    $conn = new mysqli( $host, $user, $pass, $db);

    $table = "itens";
    $nome = "Xicara";
    $descricao = "É uma xicara usada de cor rosa";

    $q = "INSERT INTO $table (nome, descricao) VALUES('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();

    echo "<br><a href='http://localhost/curso_php/SC-16-PHP_MySQL'>Voltar</a> ";

