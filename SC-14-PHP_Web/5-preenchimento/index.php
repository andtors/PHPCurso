<?php

    $usuario = [

        'nome' => 'Matheus',
        'idade' => 29,
        'profissao' => 'Programador'

    ];

    if($usuario){

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="">

    <div>
        <input type="text" name="nome" placeholder="<?= $nome ?>">
    </div>
    <div>
        <input type="text" name="idade" placeholder="<?= $idade ?>">
    </div>
    <div>
        <input type="text" name="profissao" placeholder="<?= $profissao ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
<a href='http://localhost/curso_php/SC-14-PHP_Web'>Voltar</a>

</body>
</html>