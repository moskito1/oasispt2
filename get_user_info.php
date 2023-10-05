  <?php

  if (isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
  } ?>