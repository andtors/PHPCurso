<?php

    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");
    require_once("globals.php");
    require_once("db.php");

    $message = new Message($BASE_URL);

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

            
            
        
        } else {

            // Enviar uma msg de erro
            $message->setMessages("Por favor preencha todos os campos.", "error", "back");

        }


    } else if($type === "login") {

        
    }
    


