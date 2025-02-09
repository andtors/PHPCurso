<?php

    require_once("models/Movie.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");
    require_once("dao/MovieDAO.php");
    require_once("globals.php");
    require_once("db.php");

    $message = new Message($BASE_URL);
    $userDAO = new UserDAO($conn, $BASE_URL);

    $movieDAO = new movieDAO($conn, $BASE_URL);

    $userData = $userDAO->verifyToken(true);

    // Verifica o tipo de form
    $type = filter_input(INPUT_POST, "type");

    if($type === "create"){

        $title = filter_input(INPUT_POST, "title");
        $description = filter_input(INPUT_POST, "description");
        $category = filter_input(INPUT_POST, "category");
        $trailer = filter_input(INPUT_POST, "trailer");
        $length = filter_input(INPUT_POST, "length");

        $movie = new Movie();

        // Validação de dados
        if(!empty($title) && !empty($description) && !empty($category)){

            $movie->title = $title;
            $movie->description = $description;        
            $movie->category = $category;
            $movie->trailer = $trailer;
            $movie->length = $length;
            $movie->users_id = $userData->id;

            // Upload de imagem do filme
            if(isset($_FILES["image"])  && !empty($_FILES["image"]["tmp_name"])){

                $image = $_FILES["image"];
                $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
                $jpgArray = ["image/jpeg", "image/jpg"];

                // Checando tipo da imagem
                if(in_array($image["type"], $imageTypes)){
                    
                    //Checa se imagem é JPG
                    if(in_array($image["type"], $jpgArray)){
                        $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                    } else {
                        $imageFile = imagecreatefrompng($image["tmp_name"]);
                    }

                    $imageName = $movie->imageGenerateName();

                    imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
                    
                    $movie->image = $imageName;
                    
                } else {
                    $message->setMessage("Tipo de invalido de imagem, insira jpg ou png.", "error", "");
                }
            }
        

            $movieDAO->create($movie);

        } else {
            $message->setMessage("Você precisa adicionar pelo menos: titulo, descrição e categoria.", "error", "newmovie.php");
        }
        
        
    } else {
        $message->setMessage("Informações inválidas.", "error", "newmovie.php");
    }
