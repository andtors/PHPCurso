<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");

    // 2 - Criacao do objeto Car e suas atribuições vindo do metodo POST

    $carDao = new CarDAO($conn);

    $id = $_POST['id'];
    $action = $_POST['type'];
   

    if($action === "create"){

        $brand = $_POST['brand'];
        $km = $_POST['km'];
        $color = $_POST['color'];

        $newCar = new Car();

        $newCar->setBrand($brand);
        $newCar->setKm($km);
        $newCar->setColor($color);
    
        $carDao->create($newCar);

    } else if($action === "edit"){

        $brand = $_POST['brand'];
        $km = $_POST['km'];
        $color = $_POST['color'];

        $updatedCar = new Car();

        $updatedCar->setId($id);
        $updatedCar->setBrand($brand);
        $updatedCar->setKm($km);
        $updatedCar->setColor($color);

        $carDao->updateCar($updatedCar);
        
    } else if($action === "delete"){

       $carDao->deleteCar($id);
        
    }

    header("Location: index.php");