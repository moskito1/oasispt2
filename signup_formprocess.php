<?php
    session_start();
    include('dbconnection.php');
    if (isset($_POST['signup'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $contactno = $_POST['contact_number'];
        $query = $connection->prepare("SELECT * FROM userInfo WHERE email=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO userInfo(username,password, firstname, lastname, email, address, contactno) 
                                        VALUES (:username,:password_hash,:firstname,:lastname,:email,:address,:contactno)");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("firstname", $firstname, PDO::PARAM_STR);
            $query->bindParam("lastname", $lastname, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("address", $address, PDO::PARAM_STR);
            $query->bindParam("contactno", $contactno, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                header("location: login.php");
            } else {
                echo '<p class="error">Something went wrong!</p>';
            }
        }
    }
?>