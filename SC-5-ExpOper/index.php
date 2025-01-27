<?php

    echo "<h1> Expressão e operações</h1>";

    echo "<h2> Ordem operadores </h2>";
    
    echo 3 + 2 * 5;
    echo "<br>";
    echo (3 + 2) * 5;
    echo "<br>";
    echo 5 + 2 / 10;
    echo "<br>";

    $a = 5;
    $b = 2;
    $c = 10;

    echo $a + $b / $c;
    echo "<br>";
    echo $c + $b / $a;
    echo "<br>";

    $d = $a * $b * $c;
    
    echo $d;
    echo "<br>";

    echo "<h2> Exercicio 1 </h2>";

    $z = 5;
    $x = 10;
    $y = 15;
    $w = 20;

    $xyzw = (($z - $x) * $y) / $w;

    echo $xyzw;
    echo "<br>";

    echo "<h2> Mudança de tipo implicita </h2>";

    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)){
         echo "é float <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3 )){
        echo "é string <br>";
   }

   $nome = "Matheus";
   $sobrenome = "Battisti";

   $nomeCompleto = $nome . " " . $sobrenome;

   echo $nomeCompleto;
   echo "<br>";

   echo "<h2> Exercicio 2 </h2>";

   $ex2 = "5" * 12;

   echo $ex2;
   echo "<br>";
   echo gettype($ex2);
   echo "<br>";
   echo gettype([]);
   echo "<br>";
   echo gettype(12.2);
   echo "<br>";
   echo gettype("teste");
   echo "<br>";

   echo "<h2> Operadores </h2>";

   $soma = 5 + 5;
   echo $soma . "<br>";

   $subtracao = 10 - 2;
   echo $subtracao . "<br>";

   $multi = 2 * 199;
   echo $multi . "<br>";

   $divisao = 123 / 48;
   echo $divisao . "<br>";

   $op = 5 + (2 / 7) * 8;
   echo $op . "<br>";

   echo "<h2> Exercicio 3 </h2>";

   $somaEx3 = 10 + 5;
   echo $somaEx3 . "<br>"; 

   $subtracaoEx3 = $somaEx3 - 10;
   echo $subtracaoEx3 . "<br>"; 
   
   $multiEx3 = $subtracaoEx3 * 3;
   echo $multiEx3 . "<br>"; 

   $divEx3 = $multiEx3 / 2;
   echo $divEx3 . "<br>";
   
   echo "<h2> Operador de módulo </h2>";
   
   echo 12 % 2;
   echo " módulo <br>";

   echo 12 / 2;
   echo " divisão <br>"; 
   
   echo 13 % 2;
   echo " módulo <br>";

   echo 13 % 5;
   echo " módulo <br>"; 

   $aMod = 20;
   $bMod = 4;
   $cMod = 12;

   echo $a % $b;
   echo " módulo <br>";
   echo $a % $c;
   echo " módulo <br>";

   echo "<h2> Exercicio 4 </h2>";

   $aEx4 = 10;
   $bEx4 = 15;
   $cEx4 = 3;

   echo $aEx4 % $bEx4;
   echo " módulo <br>";
   echo $bEx4 % $cEx4;
   echo " módulo <br>";

   echo "<h2> Operação de exponenciação </h2>";

   echo 5 ** 2;
   echo "<br>";
   echo 2 ** 10;
   echo "<br>";

   $aExpo = 7;
   $bExpo = 4;

   echo $a ** $b;
   echo "<br>";

   $cExpo = 12;
   $dExpo = $cExpo ** $aExpo;

   echo $dExpo;
   echo "<br>";

   echo "<h2> Operação de concatenação </h2>";

   echo "Testando a concatenação";
   echo "<br>";
   echo "Testando " . " a " .  "concatenação";
   echo "<br>";

   $t = "Testando";
   $p = "concatenação";

   echo $t . " a " . $p;
   echo "<br>";

   $marca = "Ferrari";
   $motor = "3.0";
   $vel_max = 200;

   echo "O carro da " . $marca . " tem um motor " . $motor . " e chega a uma velocidade de " . $vel_max . " Km";
   echo "<br>"; 

   echo "<h2> Exercicio 5 </h2>";
   
   $saudacaoEx5 = "Bem vindo Sr/Sra ";
   $nomeEx5 = "André ";
   $sobrenomeEx5 = "Torres ";

   $fraseEx5 =  $saudacaoEx5 . $nomeEx5 . $sobrenomeEx5 . " ao estabelecimento";
   echo $fraseEx5;

   echo "<h2> Operação de autoincremento </h2>";

   $xInc = 0;
   $yInc = 0;

   $xInc++;
   $yInc = $yInc + 1;

   echo "x: " . $xInc . "<br>";
   echo "y: " . $yInc . "<br>";

   $nInc = 10;
   $mInc = 10;

   $nInc--;
   $mInc = $mInc - 1; 

   echo "n: " . $nInc . "<br>";
   echo "m: " . $mInc . "<br>";

   echo "<h2> Operadores de comparação </h2>";

   

   echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";