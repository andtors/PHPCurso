<?php

    echo "<h1> Arrays </h1>";

    $a = [1, 2, 3];

    print_r($a);
    echo "<br>";
    echo $a[0];
    echo "<br>";

    $arr = ["Matheus", 1005, true];

    echo "<br>";    
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
    echo "<br>";
    echo "<br>";

    echo "<h2> Array associativo </h2>";

    $arrAss = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

    echo $arrAss['nome'];
    echo "<br>";
    print_r($arrAss);
    echo "<br>";
    echo $arrAss['patas'];

    $arrAssoc = ['chave' => 'valor', 'bool' => true];

    echo "<br>";
    print_r($arrAssoc);

    echo "<br>";
    echo "<br>";
    echo "<h2> Exercicio 1</h2>";

    $carro = [
        "placa" => "abc-1234",
        "marca" => "Hyundai", 
        "modelo" => "HB20", 
        "cor" => "Cinza"
    ];

    print_r($carro);
    echo "<br>";
    echo $carro['placa'];
    echo "<br>";
    echo $carro['marca'];

    $marca = $carro['marca'];
    $modelo = $carro['modelo'];
    echo "<br>";

    echo "O carro é da marca $marca e do modelo $modelo";

    echo "<br>";
    echo "<br>";
    echo "<h2> Exercicio 2</h2>";

    $pessoa = [
        "nome" => "André",
        "idade" => 24,
        "cor" => "Pardo"
    ];

    print_r($pessoa);
    
    $idade = $pessoa['idade'];
    echo "<br>";
    if($idade >= 18){
        echo "Esta pessoa é maior de idade pois tem $idade anos!";
    } else {
        echo "Esta pessoa é menor de idade pois tem $idade anos!";
    } 




    echo "<br><a href='http://localhost/curso_php/SC-3-TiposDados/'>Voltar</a> ";
    