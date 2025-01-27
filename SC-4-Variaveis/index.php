<?php

    echo "<h1> Variaveis </h1>";

    echo "<h2> Criação de var</h2>";

    $teste = "Algum texto";
    echo $teste;

    echo "<br>";

    $num = 10;
    echo $num;

    $_nome = "Matheus";

    echo "<br>";

    echo  $_nome;

    $velocidadeMaxima = 100;
    $velocidade_minima = 10;

    echo "<br>";
    echo "<br>";
    echo "<h2> Exercico 1</h2>";

    $nome = "André";
    $idade = 24;
    $altura = 1.82;
    $guitarra = ["modelo" => "Stratos", "cor" => "Vermelha", "marca" => "Stratos"];

    echo "Meu nome é $nome, tenho $idade anos e $altura de altura";
    echo "<br>";
    print_r($guitarra);

    echo "<br>";
    echo "<h2> Exercico 2</h2>";

    $num1 = 123123.234;
    $num2 = 457636.812;

    $res = $num1 + $num2;

    echo $res;

    echo "<br>";
    echo "<h2> Variavel de uma variavel </h2>";

    $x = "nome"; // valor de nome

    echo "$x <br>"; 

    $$x = "Matheus"; // nome virou a variavel com o valor de Matheus, var(x) -> val(nome) -> nome toma o nome da variavel x e assume o valor Matheus

    echo "$nome <br>";

    echo "<h2> Variavel d por referência </h2>";

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;

    $y = 15;

    echo "<br>";
    echo "Atribuição após a ref 1";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $x = 20;
    
    echo "<br>";
    echo "Atribuição após a ref 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;

    $nome1 = "Matheus";

    $nome2 =& $nome1;

    echo "<br>";
    echo $nome1;
    echo "<br>";
    echo $nome2;
    echo "<br>";

    $nome2 = "João";

    echo $nome1;
    echo "<br>";
    echo $nome2;
    echo "<br>";
    
    echo "<h2>Escopo Local</h2>";

    $x = 10;

    echo "$x global <br>";

    function teste() {
        $x = 5;
        echo "$x local <br>";

    }

    teste();
    echo "$x global <br>";
    teste();
    
    function testando() {
        $x = 12;
        echo "$x local <br>";
    }

    testando();
    teste();
    $x = 99;
    echo "$x global <br>";

    echo "<h2>Escopo Global</h2>";

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5 > 2){

        $teste = "dsa";
        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function funcao() {
        
        $teste = "xsxs";
        echo "$teste global 1 <br>";
    }

    funcao();

    function testandoGlobal(){

        global $teste;
        $teste = 2;
        echo "$teste global função <br>";

    }

    testandoGlobal();

    echo "$teste global 3 <br>";

    echo "<h2>Variavel Static</h2>";

    function testeStatic() {

        $a = 0;
        $a++;
        echo "$a <br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();
    
    function testeStatic2() {

        static $a = 0;
        $a++;
        echo "$a <br>";

    }
    
    testeStatic2();
    testeStatic2();
    testeStatic2();

    echo "<h2>Parâmetros de função</h2>";
    
    function soma($a, $b){

        echo $a + $b;
        echo "<br>";

    }

    soma(2, 4);
    soma(6, 8);
    soma(10, 10);

    
    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";







    
