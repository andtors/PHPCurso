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
        
    } else if($type === "delete"){

        // Receba os dados do form
        $id = filter_input(INPUT_POST, "id");

        $movie = $movieDAO->getMovieById($id);

        if($movie){
            // Verifica se o filme é do user
            if($movie->users_id === $userData->id){
                $movieDAO->destroy($id);
            } else {
                $message->setMessage("Informações inválidas.", "error", "index.php");
            }

        } else {
            $message->setMessage("Informações inválidas .", "error", "index.php");
        }

    } else if($type === "update"){

        $title = filter_input(INPUT_POST, "title");
        $description = filter_input(INPUT_POST, "description");
        $category = filter_input(INPUT_POST, "category");
        $trailer = filter_input(INPUT_POST, "trailer");
        $length = filter_input(INPUT_POST, "length");
        $id = filter_input(INPUT_POST, "id");

        $movie = new Movie();

        $movieData = $movieDAO->getMovieById($id);

        // Verifica se encontrou o filme
        if($movieData){

            // verifica se o filme é do usuario
            if($movieData->users_id === $userData->id){
            
                 // Validação de dados
                 if(!empty($title) && !empty($description) && !empty($category)){
                    // edição do filme
                    $movieData->title = $title;
                    $movieData->description = $description;
                    $movieData->trailer = $trailer;
                    $movieData->category = $category;
                    $movieData->length = $length;


                    $image = $_FILES["image"];
                    $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
                    $jpgArray = ["image/jpeg", "image/jpg"];

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
                        
                        $movieData->image = $imageName;
                        
                        } else {
                            $message->setMessage("Tipo de invalido de imagem, insira jpg ou png.", "error", "");
                        }
                    }

                    $movieDAO->update($movieData);
                    

                    } else {
                        $message->setMessage("Você precisa adicionar pelo menos: titulo, descrição e categoria.", "error", "newmovie.php");
                    }

                    } else {
                        $message->setMessage("Informações inválidas.", "error", "index.php");
                    }

        } else {
            $message->setMessage("Informações inválidas .", "error", "index.php");
        }

    } else {
        $message->setMessage("Informações inválidas.", "error", "index.php");
    }
