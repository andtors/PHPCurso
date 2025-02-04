<?php

    include_once("models/Car.php");

    class CarDAO implements CarDAOInterface {


        // 3 - Criação dos metodos da interface do objeto e inserção do dado na tabela atráves das querys com prepared recebendo o obj carro
        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll(){

            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");

            $data = $stmt->fetchAll();

            foreach($data as $item){

                $car = new Car();

                $car->setId($item["id"]);
                $car->setBrand($item["brand"]);
                $car->setKm($item["km"]);
                $car->setColor($item["color"]);

                $cars[] = $car;

            }

            return $cars;

        }

        public function findId($id){

            $stmt = $this->conn->prepare("SELECT * FROM cars WHERE id = :id");

            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $car = $stmt->fetch();

            return $car;
        }
        

        public function create(Car $car){
            
            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");
            
            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }

        public function updateCar(Car $car){

            $stmt = $this->conn->prepare("UPDATE cars SET brand = :brand, km = :km, color = :color WHERE id = :id");
            
            $stmt->bindParam(":id", $car->getId());
            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }

        public function deleteCar($id){

            $stmt = $this->conn->prepare("DELETE FROM cars WHERE id = :id");

            $stmt->bindParam(":id", $id);

            $stmt->execute();
        }
    }