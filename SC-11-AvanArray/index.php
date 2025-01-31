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
    
    echo "<h2> Criando variaveis com extract </h2>";

    $arrExt = [
        "cor" => "vermelho",
        "forma" => "retangular",
        "material" => "aço"
    ];

    extract($arrExt);

    echo $cor . "<br>";
    echo $forma . "<br>";
    echo $material . "<br>";

    $nomeExt = "Matheus";

    $pessoaExt = [
        "nomeExt" => "João",
        "idade" => 29
    ];

    echo "$nomeExt <br>";

    extract($pessoaExt);

    echo "$nomeExt <br>";
    echo "$idade <br>";

    echo "<h2> Criando array com compact </h2>";

    $marcaComp = "BMW";
    $motoComp = "3.0";
    $tetoSolarComp = true;
    $portasComp = 4;

    $carroComp = compact("marcaComp", "motoComp", "tetoSolarComp", "portasComp");

    print_r($carroComp);

    echo "<h2> Exercicio 5 </h2>";

    $gpu = "3060ti";
    $cpu = "Ryzen 3600";
    $mem = 16.00;
    $placaM = "LegendSteel350m";

    $computador = compact("gpu", "cpu", "mem", "placaM");

    foreach($computador as $caractec => $peca){

        echo "$caractec: $peca <br>";

    }

    echo "<h2> Foreach e arrays </h2>";

    $pessoaFE1 = [
        "nome" => "Matheus",
        "idade" => 29,
        "profissao" => "Programador"
    ];
    
    $pessoaFE2 = [
        "nome" => "Alexia",
        "idade" => 25,
        "profissao" => "Eng. Civil"
    ];

    foreach($pessoaFE1 as $carac => $value){

        echo "$carac => $value <br>";

    }

    foreach($pessoaFE2 as $carac => $value){

        echo "$carac => $value <br>";

    }

    echo "<h2> Exercicio 6 </h2>";

    $arrEx6 = [

      "Matheus" => 29,
      "Alexia" => 25,
      "Pedro" => 24,
      "João" => 43

    ];

    ?>
    
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($arrEx6 as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>   
  <?php

    echo "<h2> Reduce em arrays </h2>";

    $arrReduce = [1, 2, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b){

        return $a + $b;

    }

    function subtracao($a, $b){

        return $a - $b;

    }

    $resultado = array_reduce($arrReduce, "soma");

    echo "$resultado <br>";

    $resultado2 = array_reduce($arrReduce, "subtracao");

    echo "$resultado2 <br>";

    echo "<h2> Buscando em arrays </h2>";

    $arrI = ["banana", "maça", "batata", "pera", "mamão"];

    if(in_array("batata", $arrI)){

        echo "Há o item batata na array<br>";

    } else {

        echo "Não há o item batata na array<br>";

    }

    $bana = "banana";

    if(in_array($bana, $arrI)){

        echo "Há o item banana na array<br>";

    } else {

        echo "Não há o item banana na array<br>";

    }

    if(in_array("teste", $arrI)){

        echo "Há o item teste na array<br>";

    } else {

        echo "Não há o item teste na array<br>";

    }

    echo "<h2> Ordenação de arrays </h2>";

    $arrOrd = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

    sort($arrOrd);

    print_r($arrOrd);
    echo "<br>";

    $arrOrd2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

    rsort($arrOrd2);

    print_r($arrOrd2);
    echo "<br>";

    $nomesOrd = ["Maria", "Aaron", "João", "José", "Matheus"];

    sort($nomesOrd);

    print_r($nomesOrd);
    echo "<br>";

    echo "<h2> Ordenação de arrays associativos </h2>";

    $arrAssoOrd = [
        "Matheus" => 29,
        "Pedro" => 18,
        "Joaquim" => 14,
        "Maria" => 12
    ];

    asort($arrAssoOrd);
    print_r($arrAssoOrd);
    echo "<br>";

    $arrAssoOrd2 = [
        "Matheus" => 12,
        "Pedro" => 44,
        "Joaquim" => 14,
        "Maria" => 32
    ];

    arsort($arrAssoOrd2);
    print_r($arrAssoOrd2);
    echo "<br>";

    ksort($arrAssoOrd2);
    print_r($arrAssoOrd2);
    echo "<br>";

    krsort($arrAssoOrd2);
    print_r($arrAssoOrd2);
    echo "<br>";

    echo "<h2> Exercicio 7 </h2>";

    $arrEx7 = [

        "Andre" => 24.0,
        "Matheus" => 29.0,
        "Maria" => 12.0,
        "Marcelo" => 54.0,
        "Cauan" => 30.0

    ];

    arsort($arrEx7);
    ?>
    
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($arrEx7 as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>   
  <?php

    echo "<h2> Invertendo arrays  </h2>";

    $arrR = range(1, 5);

    $arrRev = array_reverse($arrR);

    print_r($arrR);
    echo "<br>";

    print_r($arrRev);
    echo "<br>";

    $nomeR = ["Matheus", 12, true, [1, 2]];

    $arr2Rev = array_reverse($nomeR);

    print_r($arr2Rev);
    echo "<br>";

    echo "<h2> Ordem aléatoria de itens </h2>";

    $arrAle = range(1, 20);

    shuffle($arrAle);
    print_r($arrAle);
    echo "<br>";
    shuffle($arrAle);
    print_r($arrAle);
    echo "<br>";

    echo "<h2> Somando itens de um array  </h2>";

    $arrSum = [2, 4, 34, 34.1, 324, 12, 34, 1, "soma"];

    $soma = array_sum($arrSum);

    print_r($arrSum);
    echo "<br>";
    echo "$soma <br>";
    
    echo "<h2> Unindo arrays </h2>";

    $arrUn1 = [1, 2, 3];
    $arrUn2 = [10, 40, 90];
    $arrUn3 = [2.1, 44.5, 43.3];
    $arrUn4 = ["asd", "as", "a"];

    $arrMerge = array_merge($arrUn1, $arrUn2, $arrUn3, $arrUn4, [0, 1]);

    print_r($arrMerge);
    echo "<br>";

    echo "<h2> Diferença entre arrays </h2>";

    $arrDif1 = [1, 2, 3];
    $arrDif2 = [2, 4, 6];

    $diff = array_diff($arrDif1, $arrDif2);
    
    print_r($diff);
    echo "<br>";

    $diff2 = array_diff($arrDif2, $arrDif1);
    
    print_r($diff2);
    echo "<br>";

    $arrDif3 = [4];

    $diff3 = array_diff($arrDif2, $arrDif1, $arrDif3);
    
    print_r($diff3);
    echo "<br>";

    echo "<h2> Exercicio 8 </h2>";


    function somaElementos($arr){
        
        echo array_sum($arr);

    }

    somaElementos([1,3,5,7,8,9]);

    echo "<h2> Exercicio 9 </h2>";

    function maiorElemento($arr){

        $maxValue = 0;

        foreach($arr as $elemento){

            if($elemento > $maxValue){

                $maxValue = $elemento;
                continue;

            } else {

                continue;

            }

        }

        echo $maxValue;
    }

    maiorElemento([10, 2352, 123, 345, 231, 624]);

    echo "<h2> Exercicio 10 </h2>";

    function encontrarPares($arr){

        $arrayPares = [];

        foreach($arr as $elemento){

            if($elemento % 2 == 0){

                array_push($arrayPares, $elemento);
                continue;
                
            } else {

                continue;
                
            }
        }

        print_r($arrayPares);

    }

    encontrarPares([12, 235, 123081, 17231, 1224, 1239716]);

    echo "<h2> Exercicio 11 </h2>";

    function ordenarNumeros($arr){

        arsort($arr);
        print_r($arr);

    }

    ordenarNumeros([1, 23, 4, 12, 6236, 3, 4252]);

    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";

    