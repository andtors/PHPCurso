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

    // Verificao do type do form
    if($type === "register"){

        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");
        
        // Verificao de dados minimos
        if($name && $lastname && $email && $password){

            // Verificar se as senhas batem
            if($password ===  $confirmpassword){

                // Verificar se o e-mail já esta cadastrado

                if($userDAO->findByEmail($email) === false) {

                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generatePassword($password);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    $auth = true;

                    $userDAO->create($user, $auth);
                    
                } else {

                    $message->setMessage("Usuario já cadastrado, tente outro e-mail.", "error", "auth.php");

                }

            } else {

                $message->setMessage("As senhas não são iguais.", "error", "auth.php");

            }
        
        } else {

            // Enviar uma msg de erro
            $message->setMessage("Por favor preencha todos os campos.", "error", "auth.php");

            
        }


    } else if($type === "login") {

        
    }
    


