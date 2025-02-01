<?php

    print_r($_POST);

    $marca  = $_POST['marca'];
    $preco = $_POST['preco'];
    $opcionais = $_POST["opcionais"];
    
    echo "<br><a href='http://localhost/curso_php/SC-14-PHP_Web/3-post/index.php'>Voltar</a> ";
?>

    <h1>A marca do carro é <?= $marca ?> tem o preço de $<?= $preco ?> e tem os seguintes 
    opcionais:</h1>

    <?php foreach($opcionais as $op): ?>
        <li><?= $op; ?></li>
    <?php endforeach; ?>   