<?php

    echo "<h1> Estruturas de controle </h1>";

    echo "<h2> Estrutura if </h2>";

    if(5 > 2){

        echo "Deu certo, entrou no if 1<br>";

    }

    if(2 >= 5){

        echo "Não vai entrar no if, por que deu false<br>";

    }

    if(10 === 10 && 9 > 3){

        echo "Deu certo, entrou no if 2<br>";

    }

    $a = 10;
    $b = 5;

    $c = "Deu certo, entrou no if 3<br>";

    if($a >= $b){

        echo $c;

    }

    echo "<h2> Exercicio 1 </h2>";

    if(5 > 2){

        echo "Cinco é maior que dois<br>";

    }

    if("Matheus" != "Pedro"){

        echo "Matheus é diferente de Pedro<br>";

    }

    if(12 <= 11){

        echo "12 é menor ou igual a 11<br>";

    }

    $aIF = 123;
    $bIF = 345;
    
    if($aIF >= $bIF){
        
        echo "Variavel aIF é maior que bIF<br>";

    } else {

        echo "Variavel aIF é menor que bIF<br>";

    }

    echo "<h2> Exercicio 2 </h2>";

    $aIdade1 = 18; 
    $bIdade1 = 5;
    $cIdade1 = 25;

    if($aIdade1 >= 18){

        echo "A pessoa 1 é maior de idade<br>";
        
    } 

    if($bIdade1 >= 18){

        echo "A pessoa 2 é maior de idade<br>";
        
    }

    if($cIdade1 >= 18){

        echo "A pessoa 3 é maior de idade<br>";
        
    }

    echo "<h2> Estrutura else </h2>";

    if(5 > 2){
        
        echo "Entrou no if 1<br>";

    } else {

        echo "Entrou no else 1<br>";

    }

    if("teste" === 5){
        
        echo "Entrou no if 2<br>";

    } else {

        echo "Entrou no else 2<br>";

    }

    $aElse = 10;
    $bElse = 20;

    if($aElse > $bElse ){
        

    } else {

        echo "Entrou no else 3<br>";

    }

    $msgElse = "Entrou no else 4";

    if($aElse > $bElse ){
    

    } else {

        echo $msgElse;

    }

    echo "<h2> Exercicio 3 </h2>";

    if($aIdade1 >= 18){

        echo "A pessoa 1 é maior de idade<br>";
        
    } else {

        echo "A pessoa 1 é menor de idade<br>";

    }

    if($bIdade1 >= 18){

        echo "A pessoa 2 é maior de idade<br>";
        
    }else {

        echo "A pessoa 2 é menor de idade<br>";

    }

    if($cIdade1 >= 18){

        echo "A pessoa 3 é maior de idade<br>";
        
    }else {

        echo "A pessoa 3 é menor de idade<br>";

    }

    echo "<h2> Exercicio 4a </h2>";

    $aInt = 10;
    $bString = "Teste";
    $cBool = true;

    if(is_int($aInt)){

        echo "A variavel é do tipo inteiro 1<br>";

    } else {

        echo "A variavel é de outro tipo 1<br>";

    }

    if(is_int($bString)){

        echo "A variavel é do tipo inteiro 2<br>";

    } else {

        echo "A variavel é de outro tipo 2<br>";

    }

    if(is_int($cBool)){

        echo "A variavel é do tipo inteiro 3<br>";

    } else {

        echo "A variavel é de outro tipo 3<br>";

    }

    echo "<h2> Exercicio 4b </h2>";

    $aPeso = 70;

    if($aPeso > 80){

        echo "Está roliço<br>";

    }  else {

        echo "Peso dentro do limite";

    }

    echo "<h2> If aninhado </h2>";

    if(10 > 2){

        echo "Entrou no primeiro if 1<br>";

        if("teste" === "teste"){

            echo "Entrou no segundo if 1<br>";

        }

    }

    if(10 < 2){

        echo "Entrou no primeiro if 2<br>";

        if("teste" === "teste"){

            echo "Entrou no segundo if 2<br>";

        } else {

            echo "Entrou no segundo else 2<br>";

        }

    } else {

        echo "Entrou no primeiro else 2<br>";

    }

    $escopo = 10;

    if(10 > 2){

        echo "Entrou no primeiro if 3<br>";

        $escopo2 = 20;


        if("teste" === "teste"){

            echo "Entrou no segundo if 3<br>";

            echo $escopo;
            echo " " .  $escopo2;

        } else {

            echo "Entrou no segundo else 3<br>";

        }

    } else {

        echo "Entrou no primeiro else 3<br>";

    }

    echo "<h2> Exercicio 5 </h2>";

    $aNum = 50.99;
    $cStr = "André";

    if(is_int($aNum) || is_float($aNum)){

        $bNum = $aNum * 2;
        echo $bNum . "<br>";

        if($bNum > 100){

            echo "Este número é maior que 100<br>";

        } else {

            echo "Este número é menor que 100<br>";

        }

    } else {

        echo "Esta variavel não é um número<br>";

    }

    if(is_int($cStr) || is_float($cStr)){

        $bNum = $aNum * 2;
        echo $bNum . "<br>";

        if($bNum > 100){

            echo "Este número é maior que 100<br>";

        } else {

            echo "Este número é menor que 100<br>";

        }

    } else {

        echo "Esta variavel não é um número<br>";

    }

    echo "<h2> Else if </h2>";

    if(10 > 5){

        echo "Entrou no if 1<br>";

    } else if(10 > 6){

        echo "Entrou no else if 1<br>";

    }

    if(10 < 5){

        echo "Entrou no if 2 2<br>";

    } else if(10 > 6){

        echo "Entrou no else if 2<br>";

    }

    if(10 < 5){

        echo "Entrou no if 3<br>";

    } else if(10 < 6){

        echo "Entrou no else if 3<br>";

    } else {

        echo "Entrou no else 3<br>";
    }

    
    if(10 < 5){

        echo "Entrou no if 4<br>";

    } else if(10 < 6){

        echo "Entrou no else if 4<br>";

    } else if(11 > 1){

        echo "Entrou no else if 2 4<br>";

    }else {

        echo "Entrou no else 4<br>";
    }

    echo "<h2> Exercicio 6 </h2>";

    $aVel = 40;

    if($aVel < 40){
        
        echo "Está na velocidade correta<br>";

    }   else if ($aVel === 40) {

        echo "Dentro da velocidade limite, dirija com cuidado<br>";

    }   else {

        echo "Acima da velocidade permitida, multado<br>";

    }

    echo "<h2> Switch </h2>";

    $x = 5;

    switch($x){

        case 0;
            echo "X é igual a 0";
            break;
        case 1:
            echo "X é igual a 1";   
            break;
        case 2:
            echo "X é igual a 2";   
            break;
        default:
            echo "X não é igual a nenhum um dos valores mencionados";

    }

    echo "<h2> Exercicio 7 </h2>";

    function compararNumeros($num1, $num2){

        if($num1 > $num2){
            
            echo "O número 1 é maior que o número 2<br>";

        } else if ($num1 === $num2) {

            echo "Os dois números são iguais<br>";

        } else {

            echo "O número 2 é maior que o número 1<br>";

        }
    }

    compararNumeros(10, 10);

    echo "<h2> Exercicio 8 </h2>";

    function verificarAcesso($exIdade, $acesso){

        if($exIdade >= 18 && $acesso === true){

            echo "Acesso autorizado<br>";

        } else if($exIdade < 18 && $acesso === true){

            echo "Acesso negado, idade minima requerida: 18 anos <br>";

        } else {

            echo "Acesso negado, autorização necessária.<br>";

        }
    }

    verificarAcesso(15, true);

    echo "<h2> Exercicio 9 </h2>";

    function calcularDesconto($valor, $categoria){        
        switch($categoria){
            case "eletrônicos":
                $valorFinal = $valor - ($valor * 0.1);
                echo "Preço com desconto " . $valorFinal . "<br>";
                break;
            case "vestuário":
                $valorFinal = $valor - ($valor * 0.2);
                echo "Preço com desconto " . $valorFinal . "<br>";
                break;
            case "alimentos":
                $valorFinal = $valor - ($valor * 0.05);
                echo "Preço com desconto " . $valorFinal . "<br>";
                break;
            default:
                echo "Preço sem desconto ". $valor . "<br>";
        }
    }

    calcularDesconto(250, "vestuário");

    echo "<h2> Exercicio 10 </h2>";

    function verificarCategoria($categoria2){
        switch($categoria2){
            case "eletrônicos":
                echo "Essa categoria é de produtos eletrônicos<br>";
                break;
            case "vestuário":
                echo "Essa categoria é de produtos vestuário<br>";
                break;
            case "alimentos":
                echo "Essa categoria é de produtos alimentos<br>";
                break;
            default:
                echo "Categoria desconhecida<br>";
        }
    }

    verificarCategoria("alimentos");

    echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";

    
    