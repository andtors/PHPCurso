<?php

   echo "<h2> PHP e a web </h2>";


   print_r($_SERVER);

   echo "<br>";

   echo $_SERVER["MYSQL_HOME"] . "<br>";

   if($_SERVER["SERVER_NAME"] == "localhost"){

      echo "Está acessando o local host <br>";

   }


   echo "<br><a href='http://localhost/curso_php/SC-14-PHP_Web'>Voltar</a> ";