<?php
include "dbconnection.php";
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
    <div class="left-nav-bar">
        <a href="index.php"><img src="imgs/logo.png" alt=""></a>
    </div>
    <div class="middle-nav-bar">
        <a href="index.php">HOME</a>
        <a href="menu.php">MENU</a>
        <a href="aboutus.php">ABOUT US</a>
    </div> 
    <div class="right-nav-bar">
        <a href=""><i class="fa fa-shopping-cart"></i></a>
        <?php if (isset($_SESSION["username"])) {
            $username = $_SESSION['username'];
            $sql = "SELECT userimg FROM userInfo WHERE username = ?";
            $stmt = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmt, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                if ($row = mysqli_fetch_assoc($result)) { 
                    $userProfilePicture = $row['userimg'];
                    echo '<img src="' . $userProfilePicture . '" alt="User Profile Picture" class="userprofile">';
                }
                
                mysqli_stmt_close($stmt);
            }
        } else { ?>
            <a href="login.php"><i id="user-icon" class="fa fa-solid fa-user"></i></a>
        <?php } ?>
    </div>
</section>
</body>
