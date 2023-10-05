<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
    <div class="left-nav-bar">
      OASIS CAFE
    </div>
    <div class="middle-nav-bar">
      <a href="index.php">HOME</a>
      <a href="menu.php">MENU</a>
      <a href="aboutus.php">ABOUT US</a>
    </div> 
    <div class="right-nav-bar">
      <a href=""><i class="fa fa-shopping-cart"></i></a>
      <?php if (isset($_SESSION["username"])) { ?>
        <a href="index.php?logout=1"><i class="fa fa-sign-out"></i></a>
      <?php } else { ?>
            <a href="login.php"><i id="user-icon" class="fa fa-solid fa-user"></i></a>
        <?php } ?>
      <div id="user-info">
        <?php
            if (isset($_SESSION["username"])) {
                include "get_user_info.php";
            }
            ?>
      </div>

    </div>
</section>