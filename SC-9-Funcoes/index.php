<?php

    echo "<h1> Funções </h1>";

    echo "<h2> Estrutura de uma função </h2>";

    function teste(/* Parametros */){

        // código

    }

    echo "<h2> Chamando funções </h2>";

    function soma(){

        $a = 5;
        $b = 4;

        echo $a + $b . "<br>";

    }

    soma();
    soma();

    echo strtoupper("testando função");

    echo "<h2> Exercicio 1 </h2>";

    $arrStr = ["Carro", "Casa", "Lancha", "Prédio", "Teto"];

    $arrImp = implode(", ", $arrStr);
    
    echo $arrImp;

    echo "<h2> Exercicio 2a </h2>";

    function exer2a(){

        $a = 5; 
        $b = 10;
        $c = 15;

        echo $a * $b * $c . "<br>";

    }

    exer2a();

    echo "<h2> Exercicio 2b </h2>";
    
    function exer2b(){

        $nome = "André";
        $sobrenome = "Torres";

        echo $nome . " " . $sobrenome . "<br>";

    }

    exer2b();

    echo "<h2> Função com parâmetro </h2>";

    function velocidadeMaxima($vel){

        if(is_int($vel)){

            echo "O carro atinge a velocidade maxima de $vel km/h<br>";

        } else {

            echo "Por favor, passe um número inteiro<br>";
    
        }
    } 

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    $velocidadeMax = 125;
    velocidadeMaxima($velocidadeMax);

    // PHP ignora o parametro desnecessario
    velocidadeMaxima(250, "Teste");

    velocidadeMaxima("Teste");

    function descrevereAnimal($nomePet, $raca){

        echo "O $nomePet é da raça $raca<br>";

    }

    descrevereAnimal("Bob", "Vira lata");
    descrevereAnimal("Shark", "Pastor Alemão");
    descrevereAnimal("Poodle", "Tita");

    echo "<h2> Exercicio 3 </h2>";

    function apresentacao($nome, $idade){

        echo "Olá eu sou o $nome, e tenho $idade anos<br>";

    }

    apresentacao("André", 24);

    echo "<h2> Exercicio 4 </h2>";

    function verificarNum($num){

        if($num % 2 != 0){

            echo "O número $num é impar<br>";

        } else {

             echo "O número $num é par<br>";

        }
    }

    verificarNum(12);
    verificarNum(13);
    verificarNum(22);
    verificarNum(1235242313);

    echo "<h2> Retorno de funções </h2>";

    function somaRet($n1, $n2){

        return $n1 + $n2;

    }

    echo somaRet(4, 4);
    echo "<br>";

    $xRet = somaRet(2, 4);

    echo $xRet . "<br>";

    $yRet = somaRet($xRet, 19);

    echo $yRet . "<br>";

    function testeReturn(){

        return "Testando";

    }

    $zRet = testeReturn();

    echo $zRet . "<br>";
    
    echo "<h2> Exercicio 5 </h2>";

    function valorQuad($num){

        $resultado = $num ** 2;

        return $resultado;

    }

    echo valorQuad(2) . "<br>";

    $numQuad = valorQuad(4);

    echo $numQuad . "<br>";

    echo "<h2> Relembrando escopo </h2>";

    $aEsc = 10;
    $bEsc = 15;

    function testeEscopo(){

        $aEsc = 5;

        global $bEsc;

        $aEsc++;

        $bEsc++;

        static $cEsc;

        $cEsc++;

        echo "Escopo local de A: $aEsc <br>";

        echo "Escopo global na função de B: $bEsc <br>";

        echo "Escopo static de C: $cEsc <br>";

    }

    echo "Escopo global de A: $aEsc <br>";

    echo "Escopo global de B: $bEsc <br>";
    
    testeEscopo();

    echo "Escopo global de B: $bEsc <br>";

    testeEscopo();

    echo "<h2> Exercicio 6 </h2>";

    function receberArr($arr){

        $newArray = [];

        foreach($arr as $num){

            if($num > 7){

                array_push($newArray, $num);
            
            }

        }

        return $newArray;

    }
    
    $novoArray = receberArr([1,2,3,4,5,6,7,8,9,10]);

    print_r($novoArray);

    echo "<h2> Exercicio 7 </h2>";

    function sumEvenNumbers($num) {

        $sum = 0;

        for($i = 1; $i <= $num; $i++){

            if($i % 2 != 1){
                
                $sum = $sum + $i;
                $i++;
                continue;

            }
            
        }

        return $sum;
        
    }

    echo sumEvenNumbers(10);

    echo "<h2> Parâmetro default </h2>";

    function testeDefault1($a = "teste"){

        echo "O valor de A é: $a<br>";

    }

    testeDefault1();
    testeDefault1("ASD");

    function testeDefault2($b, $a = "x"){

        echo "O valor de A é: $a e de b é: $b <br>";

    }

    testeDefault2("1");
    testeDefault2("1", "2");

    echo "<h2> Exercicio 8 </h2>";

    function defineCorCarro($cor = "Vermelha"){

        return "A cor do carro é $cor<br>";

    }

    echo defineCorCarro();
    echo defineCorCarro("Azul");

    echo "<h2> Descobrindo argumentos </h2>";

    function somaDA($a, $b){

        print_r(func_get_args());
        echo "<br>";
        echo func_num_args();

        return $a + $b;

    }

    somaDA(2, 4);

    echo "<h2> Exercicio 9 </h2>";

    function countVowels($palavra){

        $arr = str_split($palavra);
        $sum = 0;

        foreach($arr as $letra){

            if($letra != "a" && $letra != "e" && $letra != "i" && $letra != "o" && $letra != "u"){
    
                $sum++;
                continue;
            }
           }
       
       return $sum;
    }

    echo countVowels("teste");
    echo "<br>";
    echo countVowels("ovo");
    echo "<br>";
    echo countVowels("paralelepipedo");

    echo "<h2> Exercicio 10 </h2>";

    $listaCompras = ["Ovo", "Leite", "Bolacha", "Margarina", "Queijo"];

    function listaMercado($lista){

        foreach($lista as $produto){

            echo $produto . ", ";

        }

    }

    listaMercado($listaCompras);

    echo "<h2> Retornando múltiplos valores de uma função </h2>";

    function alterarDados($nome, $idade){

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alterarDados("Matheus", 29);

    print_r($dados);

    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1] anos<br>";

    echo "<h2> Depuração de valores </h2>";

    $arrDV = [
        "Teste",
        123,
        123.345,
        true,
        [1, 2, 3]
    ];

    print_r($arrDV);

    echo "<br>";

    var_dump($arrDV);

    echo "<h2> Exercicio 11 </h2>";

    function isPrime($num){

        $raizNum = $num ** 2;

        if($num == 1){
            
            return false;

        }

        for($i = 2; $i <= $raizNum/2; $i++){

            if($num % $i == 0){
                
                return false;

            }

            return true;
        }
            
    }

    echo isPrime(23);

    echo "<h2> Exercicio 12 </h2>";

    function sumDigits($num){

        $arr = str_split($num);

        return array_sum($arr);

    }

    echo sumDigits(123);

    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";

    