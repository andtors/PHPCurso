<?php
    echo "<h1> Estruturas de repetição </h1>";

    echo "<h2> While </h2>";

    $x = 0;

    while($x < 10){

        echo $x . "<br>";
        $x++;

    }

    echo "Continuando código <br>";

    $y = 0;

    while($y <= 10){

        echo $y . "<br>";
        $y = $y + 2;

    }

    echo "Continuando código <br>";

    $z = 10;

    while($z > 0){

        echo $z . "<br>";
        $z--;
    }
    echo "Continuando código <br>";

    $a = 10;

    while($a > 0){

       if($a % 2 != 0){
        echo $a . "<br>";
       }

       $a--;
    }

    echo "<h2> Exercicio 1 </h2>";

    $arraySorts = ["Casa", 100, "Roupa", 1231.1745, true, false, "Azul", -90, 123, "Teste"];

    $arrayLength = count($arraySorts) - 1;

    while($arrayLength >= 0){

        if(is_string($arraySorts[$arrayLength])){
            echo $arraySorts[$arrayLength] . "<br>";
        }
         
        $arrayLength--;
    }

    echo "<h2> Break </h2>";

    $xBreak = 0;
    
    while($xBreak < 10){

        echo "O X é $xBreak <br>";

        if($xBreak === 5){
            echo "Terminando o loop <br>";
            break;
        }

        $xBreak++;
    }

    echo "Saiu do loop <br>";

    echo "<h2> Exercicio 2 </h2>";

    $xCounter1 = 4;

    while($xCounter1 <= 30){

        echo "Executando o loop " . $xCounter1 . "<br>";
        if($xCounter1 === 24){
            break;
        }

        $xCounter1 = $xCounter1 + 2;
    }

    echo "<h2> Loop dentro de um loop </h2>";

    $i = 1;
    while($i < 10){

        echo "Loop externo $i <br><br>";

        $j= 0;

        while($j <= 5){

            echo "Loop interno $j <br>";

            $j++;
        }
        echo "<br>";
        $i++;
    }

    echo "<h2> Instrução continue </h2>";

    $aLoop = 10;

    while($aLoop > 0){

        echo "Executando o loop $aLoop<br>";

        if($aLoop == 5|| $aLoop == 7){

            echo "Pulou a execução de $aLoop <br>";

            $aLoop--;

            continue;
        }

        if($aLoop == 2){

            echo "Terminando o loop break $aLoop <br>";

            break;
        }

        $aLoop--;
    }

    echo "<h2> Exercicio 3 </h2>";

    $arrayEx3 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $countArr = count($arrayEx3) - 1;

    while($countArr >= 0){
        
        if($arrayEx3[$countArr] == 30 || $arrayEx3[$countArr] == 40){
            
            $countArr--;
            continue;

        }
        echo $arrayEx3[$countArr] . "<br>";
        
        $countArr--;
    }

    // Outro jeito

    $iEx3 = 0;

    while($iEx3 < count($arrayEx3)){
    
        $numAtual = $arrayEx3[$iEx3];

        if($numAtual == 30 || $numAtual == 40){
            $iEx3++;
            continue;
        }

        echo "Elemento: $numAtual <br>";

         $iEx3++;
    
    }

    echo "<h2> Do while </h2>";

    $jCount = 0;

    do {

        echo "Testando do while $jCount<br>";

        $jCount++;

    } while($jCount < 10);

    $lCount = 10;
 
    echo "Decrescente <br>";
    do {

        echo "Testando do while 2 $lCount <br>";

        $lCount--;

    } while($lCount > 0);

    echo "<h2> For </h2>";

    for($i = 0; $i < 10; $i++){

        if($i == 4){
            echo "Teste<br>";
        }

        if($i == 8){
            break;
        }

        echo $i . "<br>";

    }

    echo "<h2> Exercicio 4 </h2>";

    $ex4Arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    
    for($i = 0; $i < count($ex4Arr); $i++){

        $numArr = $ex4Arr[$i];

        if($numArr % 2 != 1){

            echo $numArr , "<br>";
            continue;

        }

    }

    echo "<h2> Exercicio 4b </h2>";

    $arr4b = [];

    for($i = 1; $i < 11; $i++){

        array_push($arr4b, $i);

    }

    print_r($arr4b);

    echo "<h2> Exercicio 5c </h2>";

    $arr4c = [];

    for($i = 10; $i < 21; $i++){

        array_push($arr4c, $i);

    }

    for($i = 0; $i < count($arr4c); $i++){

        if($arr4c[$i] % 2 != 0){
            
            echo $arr4c[$i] . "<br>";
            continue;

        }
    }

    echo "<h2> Loop infinito </h2>";

    echo "<a href='http://localhost/curso_php/SC-7-EstrRepet/LoopInf/'>Link</a> ";

    echo "<h2> ForEach </h2>";

    $nomes = ["Matheus", "João", "Pedro", "Maria"];

    foreach($nomes as $nome){

        echo "O nome do indice atual é $nome<br>";

        if($nome == "Matheus"){

            echo "Opa<br>";
        }

    }
    
    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";