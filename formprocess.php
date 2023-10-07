<?php
session_start();
include('dbconnection.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create a MySQLi connection
    $conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL statement
    $stmt = $conn->prepare("SELECT * FROM userInfo WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Set the error message
        echo 'Username password combination is wrong!';
        $stmt->close();
        $conn->close();
        header("location: login.php");
    } else {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $stmt->close();
            $conn->close();
            header("location: index.php");
            exit(); // Make sure to exit after redirecting
        } else {
            // Set the error message
            echo'Username password combination is wrong!';
            $stmt->close();
            $conn->close();
            header("location: login.php");
        }
    }
}
?>
