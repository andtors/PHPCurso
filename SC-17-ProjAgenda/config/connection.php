<?php

    $host = "localhost";
    $dbname = "agenda_php";
    $user = "root";
    $pass = "torres10";


    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
       
        $error = $e->getMessage();
        echo "Erro: $error";

    }