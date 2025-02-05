<?php

    class Message {
        private $url;

        public function __construct($url){
            $this->url = $url;
        }

        public function setMessages($msg, $type, $redirect = "index.php"){

            $_SESSION['msg'] = $msg;
            $_SESSION['type'] = $msg;

            if($redirect != "back"){

                header("Location: $this->url" . $redirect);

            } else {

                header("Location: " . $_SERVER["HTTP_REFERER"]);

            }

        }

        public function getMessages(){

        }

        
        public function clearMessages(){


        }
    }