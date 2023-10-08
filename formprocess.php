<?php

    include "dbconnection.php";
    include "functions.php";

        if (isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];


            if(emptyInputLogin($username, $password) !== false){
                header("location: login.php?error=emptyinput");
                exit();
            }

            loginUser($conn, $username, $password);
        }
        else {
            header("location: index.php");
            exit();
        }