<?php

    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");
    require_once("globals.php");
    require_once("db.php");

    $message = new Message($BASE_URL);

    $userDAO = new UserDAO($conn, $BASE_URL);

    // Verifica o tipo de form
    $type = filter_input(INPUT_POST, "type");
    
    // Atualizar usuario
    if($type === "update"){

        // Resgata dados do usuario
        $userData = $userDAO->verifyToken();
       
       // Receber dados do post
       $name = filter_input(INPUT_POST, "name");
       $lastname = filter_input(INPUT_POST, "lastname");
       $email = filter_input(INPUT_POST, "email");
       $bio = filter_input(INPUT_POST, "bio");

       // cria o user
       $user = new User();

       // Preencher os dados do usuario
        $userData->name = $name;
        $userData->lastname = $lastname;
        $userData->email = $email;
        $userData->bio = $bio;

        //upload de imagem
        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){

            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];
            $jpgArray = ["image/jpeg", "image/jpg"];

            // Checagem de tipo de imagem
            if(in_array($image["type"], $imageTypes)){

                // Checar se é jpg
                if(in_array($image["type"], $jpgArray)){
                  
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                    
                // imagem é png
                } else {

                    $imageFile =  imagecreatefrompng($image["tmp_name"]);

                }

                $imageName = $user->imageGenerateName();

                imagejpeg($imageFile, "./img/users/" . $imageName, 100);

                $userData->image = $imageName;

            } else {
                $message->setMessage("Tipo de invalido de imagem, insira jpg ou png.", "error", "");
            }

        }
        
        $userDAO->update($userData);

        // Atualizar senha
    } else if($type === "changepassword"){

        // Receber dados do post
       $password = filter_input(INPUT_POST, "password");
       $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
       $id = filter_input(INPUT_POST, "id");

      if($password === $confirmpassword){
        // Resgata dados do usuario
        $userData = $userDAO->verifyToken();
        
        // cria o user
        $user = new User();

        $finalPassword = $user->generatePassword($password);
        $user->password = $finalPassword;
        $user->id = $userData->id;

        $userDAO->changePassword($user);

      } else {
        $message->setMessage("As senhas não são iguais.", "error", "editprofile.php");
      }

    } else {
        $message->setMessage("Informações inválidas.", "error", "index.php");
    }