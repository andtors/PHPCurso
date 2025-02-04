<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");
    include_once("config/url.php");

    $carDao = new CarDAO($conn);

    $id = $_GET["id"];

    $car = $carDao->findId($id);
    
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <input type="hidden" name="id" value="<?=  $car["id"]  ?>">
        <input type="hidden" name="type" value="edit">
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" value="<?= $car["brand"] ?>">
    </div>
    <div>
        <label for="km">Km do carro</label>
        <input type="text" name="km" value="<?= $car["km"] ?>">
    </div>
    <div>
        <label for="color">Cor do carro</label>
        <input type="text" name="color" value="<?= $car["color"] ?>">
    </div>
    <input type="submit" value="Atualizar">
</form>
<a href="<?= $BASE_URL ?>index.php">Voltar</a>