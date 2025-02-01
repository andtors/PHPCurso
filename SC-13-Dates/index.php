<?php

   echo "<h1> Datas em PHP </h1>";

   echo "<h2> Função date </h2>";

    $d = date('d/m/y');
    echo $d . "<br>";

    $d2 = date("d, M - Y");
    echo $d2 . "<br>";

    $d3 = date("d/m/Y");
    echo $d3 . "<br>";

    $d4 = date("l, F - Y");
    echo $d4 . "<br>";

    echo "<h2> Função strtotime </h2>";

    $cincoDias = strtotime("5 days");
    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");
    echo $dezDias . "<br>";

    $dataAtualMais5 = date("d/m/y", $cincoDias);
    echo $dataAtualMais5 . "<br>";

    $dataAtualMais10 = date("d/m/y", $dezDias);
    echo $dataAtualMais10 . "<br>";
    
    $doisMeses = strtotime("2 months");
    echo $doisMeses . "<br>";

    $dataAtualMais2Meses = date("d/m/Y", $doisMeses);
    echo $dataAtualMais2Meses . "<br>";

    echo $dozeAnos = strtotime("12 years");
    echo date("d/m/y, $dozeAnos") . "<br>";

    $dataAtualMais12Anos = date("d/m/Y", $dozeAnos);
    echo $dataAtualMais12Anos . "<br>";

    echo "<h2> Função mktime </h2>";

    $dataNascimento = mktime(02, 12, 33, 02, 05, 1991);
    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date("d/m/y", $dataNascimento);
    echo $dataNascimentoFormatada . "<br>";

    $dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
    echo $dataEspecifica . "<br>";

    $dataFuturaFormatada = date("d/m/y", $dataEspecifica);
    echo $dataFuturaFormatada . "<br>";

    echo "<h2> Objeto DateTime </h2>";

    $dataTime = new DateTime();

    print_r($dataTime);
    echo "<br>";

    echo "<h2> Metodos format e modify </h2>";

    // data atual
    $dataFor = new DateTime();

    echo $dataFor->format("d/m/y") . "<br>";

    echo $dataFor->format("D - M - Y") . "<br>";
    
    echo $dataFor->format("l . F . Y") . "<br>";

    // data + 5 dias
    $dataFor->modify("+5 days");
    echo $dataFor->format("d/m/y") . "<br>";

    $dataFor->modify("+2 months");
    echo $dataFor->format("d/m/y") . "<br>";

    $dataFor->modify("-3 years");
    echo $dataFor->format("d/m/y") . "<br>";

    echo "<h2> Metodos setDate e setTime </h2>";

    $dataSet = new DateTime();

    print_r($dataSet);
    echo "<br>";

    $dataSet->setDate(1999, 12, 01);

    print_r($dataSet);
    echo "<br>";

    $dataSet->setTime(05, 12, 10);

    print_r($dataSet);
    echo "<br>";

    echo $dataSet->format("d/m/y") . "<br>";

    echo "<h2> Diferença entre datas </h2>";

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10, 15);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    $diferenca = $dataA->diff($dataB);
    print_r($diferenca);
    echo "<br>";

    echo $diferenca->format("%a days");
    echo "<br>";

    echo "<h2> Comparando datas </h2>";

    $data1 = new DateTime();
    $data2 = new DateTime();
    $data3 = new DateTime();

    $data2->setDate(2022, 10, 10);
    $data3->setDate(2022, 10, 10);

    $data2->setTime(01, 10, 10);
    $data3->setTime(01, 10, 10);
    
    if($data2 > $data1){

        echo "A data 2 é maior que a 1<br>";

    } else {

        echo "A data 1 é maior que a 2<br>";

    }

    if($data2 == $data3){

        echo "A data 2 e 3 são iguais<br>";

    }

    echo "<h2> Alterando o fuso horário </h2>";

    date_default_timezone_set("America/Sao_Paulo");

    $dataF = new DateTime();
    
    print_r($dataF);
    echo "<br>";



   echo "<br><a href='http://localhost/curso_php/'>Voltar</a> ";