<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");
    include_once("config/url.php");

    $carDao = new CarDAO($conn);

    $cars = $carDao->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="POST">
    <div>
        <input type="hidden" name="type" value="create">
        <label for="brand">Marca do carro</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">Km do carro</label>
        <input type="text" name="km" placeholder="Insira a kilometragem do carro">
    </div>
    <div>
        <label for="color">Cor do carro</label>
        <input type="text" name="color" placeholder="Insira a cor">
    </div>
    <input type="submit" value="Salvar">
</form>
<ul>
    <?php foreach($cars as $car): ?>
        <li>
            <?= $car->getBrand() ?> <?= $car->getKm() ?> <?= $car->getColor() ?> 
            || 
            <a href="<?= $BASE_URL ?>edit.php?id=<?= $car->getId() ?>">Editar</a> 
            || 
            <form action="process.php" method="POST">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?= $car->getId() ?>">
                <button>Deletar</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>