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

    echo "<h2> Alterando o case</h2>";

    $strCase1 = "esta string esta em caixa baixa<br>";

    echo strtoupper($strCase1);

    $strCase2 = "ESTA AQUI EM CAIXA ALTA <br>";

    echo strtolower($strCase1);

    $frase1 = "testando o case de uma palavra<br>";
    $frase2 = "Testando o case de uma palavra<br>";
    $frase3 = "Testando o case de uma palavra<br>";
    
    // Primeira letra em maiusculo
    echo ucfirst($frase1);
    echo ucfirst($frase2);

    // Todas as palavras com inicial maiuscula
    echo ucwords($frase3);
    echo ucfirst($frase2);

    echo "<h2> Exercicio 3 </h2>";

    $fraseEx = "este item está em promoção<br>";
    
    $arrExp = explode(" ", $fraseEx);

    foreach($arrExp as $palavra){

        if($palavra = "promoção"){
            $newPalavra = strtoupper($palavra);
            array_pop($arrExp);
            array_push($arrExp, $newPalavra);
        }
        
    }
        
    $fraseExRes =  implode(" ", $arrExp);
    echo ucfirst($fraseExRes); 
    echo "<br>";

    $fraseEx2 = "este item está em ";
    $promo = "promoção";

    echo ucfirst($fraseEx2) . strtoupper($promo);
    echo "<br>";

    echo "<h2> Removendo tags em HTML </h2>";

    $textoHtml = "<p>Testando paragrafo.</p><div>Uma div.</div><p>Outro paragrafo.</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco;

    echo "<br>";

    echo "<h2> Resgatando uma parte da string </h2>";

    $strRes = "Esta é a minha string";

    $minha = substr($strRes, 10, 5);

    echo $strRes . "<br>";
    echo $minha . "<br>";

    $strRes2 = "Testando esta string abc";
    $novaString = substr($strRes2, 8);

    echo $novaString . "<br>";

    $novaString2 = substr($strRes2, 8, -3);

    echo $novaString2 . "<br>";

    echo "<h2> Exercicio 4 </h2>";

    $fraseQueijo = "Cadê o meu queijo?";

    $palavraQueijo = substr($fraseQueijo, 11, -1);

    echo $palavraQueijo . "<br>";

    echo "<h2> Invertendo string </h2>";

    $stringPalavra = "Testando";
    
    $palavraInvertida = strrev($stringPalavra);

    echo "$stringPalavra<br>$palavraInvertida<br>";

    $marrocos = "Socorro subi num onibus para marrocos";

    $marrocosInv = strrev($marrocos);

    echo $marrocosInv . "<br>" . $marrocos . "<br>";

    echo "<h2> Repetição de string </h2>";

    $strRep = "Teste";

    $strRepetida = str_repeat($strRep, 5);

    echo $strRepetida . "<br>";

    $fraseRep = "Testando repetição por frase";
    
    echo str_repeat($fraseRep, 3);

    echo "<br>";

    echo "<h2> String para array </h2>";

    $fraseExp = "Testando o explode";

    $fraseArray = explode(" ", $fraseExp);

    print_r($fraseArray);
    echo "<br>";
    
    $fraseArray2 = explode(",", $fraseExp);
   
    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";
    $fraseArrayB = explode(",", $fraseB);

    print_r($fraseArrayB);
    echo "<br>";

    foreach($fraseArrayB as $palavra) {

        echo $palavra . "<br>";

    }

    echo "<h2> Exercicio 5 </h2>";

    $fraseEx5 = "Carro - Navio - Helicoptéro - Barco - Jangada";

    $arrEx5 = explode(" - ", $fraseEx5);
    print_r($arrEx5);

    foreach($arrEx5 as $item){

        echo $item . "<br>";

    }

    echo "<h2> Array para string </h2>";

    $arrFruts = ["Maçã", "Pera", "Mamão", "Batata"];

    $strImplode = implode(", ", $arrFruts);

    echo $strImplode . "<br>";

    $arrMisc = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    $strImplode2 = implode("<->", $arrMisc);

    echo $strImplode2 . "<br>";

    echo "<h2> Exercicio 6 </h2>";

    $arrEx6 = ["O", "PHP", "é", "muito", "legal"];

    echo implode(" ", $arrEx6);

    echo "<br>";
    
    echo "<h2> Encontrando a primeira ocorrência </h2>";

    $strOcur = "Estamos testando o método strpos, com strpos podemos encontrar strings";

    $testeEncontrar = strpos($strOcur, "strpos");

    echo "$testeEncontrar <br>";

    $testeEncontrar2 = strpos($strOcur, "Java");

    echo "$testeEncontrar2 <br>";

    if($testeEncontrar2 == false){

        echo "Palavra não encotrada<br>";

    }

    $palavraVar = "com";

    $testeEncontrar3 = strpos($strOcur, $palavraVar);

    echo "$testeEncontrar3 <br>";

    $palavraVar2 = "to";

    $testeEncontrar4 = strpos($strOcur, $palavraVar2);

    echo "$testeEncontrar4 <br>";

    echo "<h2> Encontrando a última ocorrência </h2>";

    $strEnc = "Testando encontrado palavra teste, em uma string que tem teste";

    $palavraEnc = strrpos($strEnc, "teste");

    echo $palavraEnc . "<br>";

    $palavraEnc2 = strpos($strEnc, "teste");

    echo $palavraEnc2 . "<br>";

    if(strrpos($strEnc, "Java") == false ){

        echo "A palavra Java não foi encontrada <br>";

    }

    $pEnc = substr($strEnc, strpos($strEnc, "teste"), 5);

    echo $pEnc . "<br>";

    echo "<h2> Retornando o resto da string </h2>";

    $strTes = "Testando o resto da string, pra ver se dá certo";

    $resto = strstr($strTes, "resto");

    echo "$resto <br>";

    $s = "string";

    $resto2 = strstr($strTes, $s);

    echo "$resto2 <br>";

    if(strstr($strTes, ".NET") == false){

        echo "Não encontramos a string<br>";

    }

    echo "<h2> Decompor uma URL </h2>";

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br>";

    echo $arrayUrl["host"];
    echo "<br>";

    $url2 = "https://www.horadecodar.com.br/?busca=php";
    $arrayUrl2 = parse_url($url2);
    echo "<br>";
    print_r($arrayUrl2);
    echo "<br>";
    $url3 = "https://www.horadecodar.com.br/usuarios/matheusbattisti?id=12&nome=Matheus";
    $arrayUrl3 = parse_url($url3);
    echo "<br>";
    print_r($arrayUrl3);
    echo "<br>";
    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";