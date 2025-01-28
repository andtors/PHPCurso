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

   if(3 == 3){
     echo "Comparação verdadeira 1<br>";
   }

   if(3 == 4){
     echo "Comparação verdadeira 2<br>";
   }
   
   $aComp = 12;
   $bComp = 12;
   $cComp = 100;

   if($aComp == $bComp){
     echo "Comparação verdadeira 3<br>";
   }

   if($aComp == $cComp){
     echo "Comparação verdadeira 4<br>";
   }

   $nomeComp = "Matheus";
   $nomeDoSistema = "Matheus";

   if($nomeComp == $nomeDoSistema){
     echo "O nome coincide <br>";
   }

   echo "<h2> Exercicio 6 </h2>";

   $j = 4;
   $k = 5;
   $l = 4;

   if($j == $k){
     echo "São iguais";
   }

   if($j == $l){
     echo "Não são iguais";
   }

   echo "<h2> Operação de idêntico </h2>";

   if(5 == "5"){
     echo "5 é 5 <br>";
   }

   // op identico
   if(5 === "5"){
     echo "5 é 5 <br>";
   }
   
   if(5 === 5){
     echo "5 é 5 <br>";
   }

   if(3 === "Teste"){
     echo "é igual <br>";
   }

   $f = 4;
   $g = 4;
   $h = "4";

   if($f === $g){
     echo "F é igual a G <br>";
   }

   if($f === $h){
     echo "F é igual a H <br>";
   }

   echo "<h2> Operador de diferença </h2>";

   $v = 3;
   $r = 4;

   if($v != $r) {
     echo "Testando diferença 1<br>";
   }

   if($v != 3) {
     echo "Testando diferença 2<br>";
   }

   if(false != "Teste") {
     echo "Testando diferença 3<br>";
   }

   echo "<h2> Operação de não idêntico a </h2>";

   $ab = 1;
   $bc = "1";

   if($ab != $bc){
     echo "A é diferente de B 1 <br>";
   }

   if($ab !== $bc){
     echo "A é diferente de B 1 <br>";
   }
   
   if(1 !== 2){
     echo "Não é idêntico 1 <br>";
   }

   if(1 !== "1"){
     echo "Não é idêntico 2 <br>";
   }

   if([] !== "abc"){
     echo "Não é idêntico 3 <br>";
   }

   echo "<h2> Exercicio 7 </h2>";

   $valor1Ex7 = 5;
   $valor2Ex7 = 3;
   
   if(5 == 3){
     echo "Os valores são iguais 1<br>";
   }

   if(5 != 3){
     echo "Os valores são iguais 2<br>";
   }

   if(5 === 3){
     echo "Os valores são iguais 3<br>";
   }

   if(5 !== 3){
     echo "Os valores são iguais 4<br>";
   }

   echo "<h2> Operador de maior ou igual </h2>";

   $opM1 = 4;
   $opM2 = 5;
   $opM3 = 6;
   $opM4 = 6;
   $opM5 = 7;

   if($opM1 > $opM2){
     echo "4 é a maior que 6<br>";
   }

   if($opM2 > $opM1){
     echo "6 é a maior que 4<br>";
   }

   if($opM4 >= $opM3){
     echo "6 é a maior ou igual a 6<br>";
   }

   if($opM4 >= $opM1){
     echo "6 é a maior ou igual a 4<br>";
   }

   if($opM4 >= $opM3){
     echo "6 é a maior ou igual a 6<br>";
   }

   if($opM4 >= $opM5){
     echo "6 é a maior ou igual a 7<br>";
   }

   echo "<h2> Operador de menor ou igual </h2>";

   if(4 < 12){
     echo "4 é menor que 12<br>";
   }

   if(24 < 12){
     echo "24 menor que 12<br>";
   }

   if(12 <= 12){
     echo "12 é menor ou igual que 12<br>";
   }

   $aMen = 5;
   $bMen = 18;

   if($aMen <= $bMen){
     echo "A é menor ou igual que B<br>";
   }

   if($bMen <= $aMen){
     echo "B é menor ou igual que A<br>";
   }

   if($bMen <= 42){
     echo "B é menor ou igual que 42<br>";
   }

   echo "<h2> Operadores lógicos </h2>";

   echo "<h3> Operador lógico AND </h3>";

  if(5 > 10  && 10 > 5){ // false e true
    echo "Entrou no if 1 <br>";
  }

  if(50 > 10  && 10 > 5){ // true e true
    echo "Entrou no if 2 <br>";
  }

  if(50 > 10  && 10 > 500){ // true e false
    echo "Entrou no if 3 <br>";
  }

  if(50 > 100  && 10 > 500){ // false e false
    echo "Entrou no if 4 <br>";
  }
  
  $aAND = 10;
  $bAND = 5;
  $cAND = 12;
  $dAND = 12;

  if($aAND > $bAND && $cAND == $dAND){
    echo "Entrou no if 5 <br>";
  }

  if($bAND <= $aAND && $cAND >= $dAND){
    echo "Entrou no if 6 <br>";
  }

  if($bAND === $aAND && $cAND > $dAND){
    echo "Entrou no if 7 <br>";
  }
  
  if(($aAND > $bAND && $cAND == $dAND) && $aAND > $bAND){
    echo "Entrou no if 8 <br>";
  }

  if($bAND <= $aAND && $cAND >= $dAND && $cAND === $aAND){
    echo "Entrou no if 9 <br>";
  }

  echo "<h2> Exercicio 8 </h2>";

  if(15 > 5 && "João" === "João"){
    echo "é verdadeiro 1<br>";
  }

  if("teste" > 5 && 1){
    echo "é verdadeiro 2<br>";
  }

  if(2 == 3 && 5 >= 3){
    echo "é verdadeiro 3<br>";
  }

  echo "<h3> Operador lógico OR </h3>";

  if(5 > 2 || 3 < 4){ // t t
    echo "A operação 1 é verdadeira<br>";
  }

  if(5 > 2 || 30 < 4){ // t f
    echo "A operação 2 é verdadeira<br>";
  }

  if(5 > 20 || 3 < 4){ // f t
    echo "A operação 3 é verdadeira<br>";
  }

  if(5 > 20 || 30 < 4){ // f f
    echo "A operação 4 é verdadeira<br>";
  }

  $aOR = 10;
  $bOR = 20;
  $cOR = 30;
  $dOR = 40;

  if($aOR > $bOR || $dOR > $cOR){ // f t
    echo "A operação 5 é verdadeira<br>";
  }

  if(($aOR > $bOR || $dOR > $cOR) && $cOR < $dOR){ // (f  t - t / t) t
    echo "A operação 6 é verdadeira<br>";
  }

  if(($aOR > $bOR && $dOR > $cOR) || $cOR < $dOR){ // (f  t - t / f) t
    echo "A operação 7 é verdadeira<br>";
  }

  echo "<h2> Exercicio 9 </h2>";

  if(12 < 5 || "João" === "João"){
    echo "é verdadeiro 1<br>";
  }

  if(1 > 5 || 1){
    echo "é verdadeiro 2<br>";
  }

  if(20 === "20" && 51 >= 31){
    echo "é verdadeiro 3<br>";
  }

  echo "<h3> Operador lógico NOT </h3>";
  
  if(!(5 > 2)){ // true > false
    echo "A operação 1 é verdadeira<br>";
  }
  
  if(!(5 > 20)){ // false > true
    echo "A operação 2 é verdadeira<br>";
  }

  $aNOT = 10;
  $bNOT = 20;

  if(!($aNOT > $bNOT)){ // false > true
    echo "A operação 3 é verdadeira<br>";
  }

  echo "<h2> Operador de conversão </h2>";

  $aCAST = (int) "12";

  echo $aCAST;
  echo "<br>";
  echo $aCAST + 10;
  echo "<br>";

  if($aCAST === 12){
    echo "aCAST é identico a 12<br>";
  }
  
  $bCAST = (float) "3.148";

  if($bCAST === 3.148){
    echo "bCAST é identico a 3.148<br>";
  }

  $cCAST = (string) 34;

  echo $cCAST;
  echo "<br>";

  if($cCAST === "34"){
    echo "cCAST é identico a 34<br>";
  }

  echo "<h2> Exercicio 10</h2>";

  $aCASTex = (int) "testando";
  $bCASTex = (int) 12.9;
  $cCASTex = (int) true;
  $dCASTex = (int) [1, 2, 3];
  
  echo $aCASTex;
  echo "<br>";
  echo $bCASTex;
  echo "<br>";
  echo $cCASTex;
  echo "<br>";
  echo $dCASTex;

  echo "<h2>Operador de atribuição</h2>";

  // +=
  $aATR = 0;
  $aATR += 10; // $aATR = $aATR + 10
  
  echo $aATR . "<br>";

  // -=
  $bATR = 0;
  $bATR -= 5;
  
  echo $bATR . "<br>";

  // *=
  $cATR = 5;
  $cATR *= 2;
  
  echo $cATR . "<br>";

  // /=
  $dATR = 5;
  $dATR /= 2;
  
  echo $dATR . "<br>";

  // %=
  $eATR = 5;
  $eATR %= 2;
  
  echo $eATR . "<br>";

  echo "<h2>Operador ternario</h2>";

  echo 20 > 10 ? "Deu true <br>" : "Deu false<br>"; 

  echo 20 > 50 ? "Deu true <br>" : "Deu false<br>"; 

  echo "<h2> Exercicio 11</h2>";

  $aTER = 10;
  $bTER = 20;

  echo $aTER > $bTER ? "A é maior que B<br>" : "A é menor que B<br>";
  echo $bTER > $aTER ? "B é maior que A<br>" : "B é menor que A<br>";

  echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";