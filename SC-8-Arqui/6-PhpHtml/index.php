<?php

    include_once "backend.php";

?>

<h1> Seja bem-vindo ao nosso site</h1>
<p><?= $nome; ?> Veja as nossas ofertas</p>

<h2>Confira nossos principais produtos: </h2>

<ul>
    <?php foreach($produtos as $produto): ?>
        <li><?= $produto; ?></li>
    <?php endforeach; ?>
</ul>

<br><a href='http://localhost/curso_php/SC-8-Arqui'>Voltar</a>