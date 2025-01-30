<?php

    echo "<h1> Avançando em arrays </h1>";  

    echo "<h2> Adicionando dados a um array </h2>";
    
    $arr = [];

    // Adicionando valores
    print_r($arr);
    echo "<br>";

    $arr[0] = 10;

    print_r($arr);
    echo "<br>";

    $arr[1] = 15;

    print_r($arr);
    echo "<br>";

    $arr[5] = 25;

    print_r($arr);
    echo "<br>";

    // Modificando valores
    $arr[1] += 55;

    print_r($arr);
    echo "<br>";

    $arrAssoc = [];

    $arrAssoc["carro"] = "BMW";

    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["aviao"] = "Boeing";

    print_r($arrAssoc);
    echo "<br>";

    $arrAssoc["carro"] = "Ferrari";

    print_r($arrAssoc);
    echo "<br>";

    echo "<h2> Adicionando valor ao fim do array </h2>";

    $arrAdd = [1, 2, 3];

    $arrAdd[] = 4;

    print_r($arrAdd);
    echo "<br>";

    $arrAdd[] = 5;

    print_r($arrAdd);
    echo "<br>";

    $arrAdd = [];

    $arrAdd2[] = 5;

    print_r($arrAdd2);
    echo "<br>";

    $arrAdd3 = [];

    $arrAdd3["teste"] = "testando";

    print_r($arrAdd3);
    echo "<br>";

    echo "<h2> Criando uma array rapidamente </h2>";
    
    $arrRange = range(1, 10);

    print_r($arrRange);
    echo "<br>";
    
    $arrRange2 = range(5, 50);

    print_r($arrRange2);
    echo "<br>";

    $arrRange3 = range(0, 1000, 100);

    print_r($arrRange3);
    echo "<br>";

    echo "<h2> Exercicio 1 </h2>";

    $arrEx1 = range(10, 45);

    foreach($arrEx1 as $num){

       $numPlusSix = $num + 6;

       if($numPlusSix > 30){

        echo "$numPlusSix é um número muito alto!<br>";

       } else {

        echo $numPlusSix . "<br>";

       }   
    }
    
    echo "<h2> Número de elementos </h2>";

    $arrCount1 = [1, 2, 3];

    echo count($arrCount1);
    echo "<br>";

    $arrCount2 = [1, 10];

    echo count($arrCount2);
    echo "<br>";

    $arrCount3 = ["nome" => "Matheus", "idade" => 29, "profissao" => "Programador"];

    echo count($arrCount3);
    echo "<br>";

    echo "<h2> Array multidimensional </h2>";

    $arrMulti1 = [
        [1, 2, 3],
        [2, 4, 6]
    ];

    print_r($arrMulti1);
    echo "<br>";

    echo $arrMulti1[0][1] . "<br>"; // primeiro array e segundo elemento
    echo $arrMulti1[1][2] . "<br>"; // segundo array ultimo elemento

    echo count($arrMulti1) . "<br>";
    echo count($arrMulti1[0]) . "<br>";
    
    echo "<h2> Exercicio 2 </h2>";

    $arrEx2 = [

        [1,2,3,4],
        ["Verde", "Azul", "Vermelho", "Branco"],
        ["Corinthians", "Palmeiras", "São Paulo", "Santos"]
        
    ];

    
    for($i = 0; $i < count($arrEx2); $i++){

        echo "Imprimindo array externo: " . ($i + 1);
        echo "<br>";

        for($j = 0; $j < count($arrEx2[$i]); $j++){

            echo $arrEx2[$i][$j] . "<br>";

        }

    }

    echo "<h2> Criando varias variaveis </h2>";

    $arrList = ["Matheus", 29, "Programador", "verde"];
    
    print_r($arrList);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos) = $arrList;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDosOlhos <br>";

    echo "<h2> Exercicio 3 </h2>";

    $carroEx3 = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

    list($marca, $motor, $cor, $ano, $bonus, $marcha) = $carroEx3;

    echo "$marca <br>";
    echo "$motor <br>";
    echo "$cor <br>";
    echo "$ano <br>";
    echo "$bonus <br>";
    echo "$marcha <br>";

    echo "<h2> Resgatando elementos da array </h2>";

    $arrSlice = range(2, 18, 2);

    $slice1 = array_slice($arrSlice, 1, 3);

    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arrSlice, 4, 4);

    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arrSlice, 4);

    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arrSlice, 4, -3);

    print_r($slice4);
    echo "<br>";

    echo "<h2> Dividindo arrays </h2>";

    $arrayChunk = range(1, 20);

    print_r(array_chunk($arrayChunk, 4));
    echo "<br>";
    echo "<br>";

    $arraysMultiChunk = array_chunk($arrayChunk, 10);

    print_r($arraysMultiChunk);
    echo "<br>";
    echo "<br>";

    print_r($arraysMultiChunk[1]);

    echo "<h2> Chaves e valores </h2>";

    $carroAssoc = [

        "marca" => "BWM",
        "motor" => "2.4",
        "teto_solar" => true,
        "cambio" => "Manual",
        "portas" => 4
        
    ];

    $chaves = array_keys($carroAssoc);

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carroAssoc);
    
    print_r($valores);
    echo "<br>";

    echo "<h2> Verificando se o valor existe </h2>";

    $arrVer = [

        "nome" => "Mahteus",
        "idade" => 29

    ];

    if(array_key_exists("nome", $arrVer)){

        echo "A chave existe<br>";

    } else {

        echo "A chave não existe<br>";

    }

    if(array_key_exists("profissao", $arrVer)){

        echo "A chave existe<br>";

    } else {

        echo "A chave não existe<br>";

    }

    if(isset($arrVer["nome"])){

        echo "A chave existe<br>";

    }else {

        echo "A chave não existe<br>";

    }

    if(isset($arrVer["teste"])){

        echo "A chave existe<br>";
        
    }else {

        echo "A chave não existe<br>";

    }

    if(isset($x)){

        echo "A var existe<br>";
        
    }else {

        echo "A var não existe<br>";

    }

    echo "<h2> Removendo elementos </h2>";

    // Resgatar elementos de Array e remover elementos
    $arrSplice = range(1, 6);

    $removidos = array_splice($arrSplice, 1, 2);

    print_r($arrSplice);
    echo "<br>";

    print_r($removidos);
    echo "<br>";

    $arrSplice2 = range(1, 6);
    
    $removidos2 = array_splice($arrSplice2, 3);

    print_r($arrSplice2);
    echo "<br>";
    
    print_r($removidos2);
    echo "<br>";

    $arrSplice3 = range(1, 6);
    
    $removidos3 = array_splice($arrSplice3, 1, -1);

    print_r($arrSplice3);
    echo "<br>";
    
    print_r($removidos3);
    echo "<br>";

    echo "<h2> Exercicio 4 </h2>";

    $arrEx4 = ["batata", "maça", "pera", "feijão", "arroz"];

    $removidoEx4 = array_splice($arrEx4, 2, 2);

    print_r($arrEx4);
    echo "<br>";

    print_r($removidoEx4);
    echo "<br>";
    

    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";