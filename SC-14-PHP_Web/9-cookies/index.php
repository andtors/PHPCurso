<?php

    setcookie("nome", "Matheus", time() + 3600);

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];

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
    <h1>Olá mundo!</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem vindo <?= $nome ?> </p>
    <? endif; ?>   
    <a href='http://localhost/curso_php/SC-14-PHP_Web/9-cookies/pagina.php'>Pagina 2</a>
    <a href='http://localhost/curso_php/SC-14-PHP_Web'>Voltar</a>
</body>
</html>


