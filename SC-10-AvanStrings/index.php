<?php

    echo "<h1> Avançando em strings </h1>";

    echo "<h2> Interpolando variáveis </h2>";

    $nome = "Matheus";
    $idade = 29;
    $profissao = "Programador";

    echo "Eu tenho $idade anos<br>";
    echo "Eu sou o $nome e tenho {$idade} anos, e atuo como $profissao<br>";

    echo "<h2> Valores de escape </h2>";

    // header("Content-type: text/plain");

    //Pular linha
    echo "Isso aqui vai ficar na primeira linha \n
            E sso aqui na segunda linha! (se ativar o header é claro)<br>";

    // Tab
    echo "Testando o tab \t aqui<br>";

    // Barra invertida
    echo "Barra invertida \\ <br>";

    // Dolar
    echo "Imprimindo o dólar \$teste<br>";

    echo "<h2> Exercicio 1 </h2>";

    $carro = ["nome" => "Carro", "preco" => 25000];
    $sofa = ["nome" => "Sofá", "preco" => 3000];
    $cafeteira = ["nome" => "Cafeteira", "preco" => 50];

    function objMaior10($arr){

        if($arr['preco'] > 100){

            echo $arr['nome'] . "<br>";

        }

    }

    objMaior10($carro);
    objMaior10($sofa);
    objMaior10($cafeteira);

    echo "<h2> Função print </h2>";

    print("Imprimindo algo com print <br>");

    $carPrint = "BMW";
 
    print("Carro é da marca $carPrint<br>");

    echo "<h2> Função printf </h2>";

    $nomePrintf = "Matheus";

    // %s -> string

    printf("O nome é %s <br>", $nomePrintf);

    // %d -> int

    $intPrintf = 29;

    printf("O número é %d e o outro é %d<br>", $intPrintf, 150);

    // %f -> float

    printf("A temperatura é de %.1f<br>", 12.58);

    echo "<h2> Tamanho da string </h2>";

    $str1 = "Esta string é muito grande";
    $str2 = "Esta não";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    $len1 = strlen($str1) . "<br>";
    $len2 = strlen($str2) . "<br>";
    
    if($len1 > $len2){

        echo "A string 1 é maior que string 2<br>";

    } else {

        echo "A string 2 é maior que string 1<br>";

    }

    echo "<h2> Percorrendo uma string </h2>";

    $strGr = "Está é uma string muito grande, ela tem varios caracteres";

    for($i = 0; $i < strlen($strGr); $i++){

        echo "$strGr[$i] <br>";

    }

    echo "<h2> Exercicio 2 </h2>";

    $strEx2 = "O rato roeu a roupa do rei de roma";
    $sumA = 0;

    for($i = 0; $i < strlen($strEx2); $i++){

        if($strEx2[$i] == "a"){

            $sumA++;

        }

    }

    echo $sumA;

    echo "<h2> Limpando os espaços em branco </h2>";

    $strLim1 = "  Matheus       ";

    echo "Esta é a string 1: $strLim1 .<br>";

    $strLim2 = trim($strLim1);

    echo "Esta é a string 1: $strLim2 .<br>";

    $strLimpa2 = rtrim($strLim1);

    echo "Esta é a string 1: $strLimpa2 .<br>";



    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";