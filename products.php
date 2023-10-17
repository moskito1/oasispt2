<?php 
session_start();
include('dbconnection.php');



if (isset($_GET['id'])) {
  $product_id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE prodid = ?";
  $stmt = mysqli_prepare($conn, $sql);

  if($stmt) {
    mysqli_stmt_bind_param($stmt, 'i', $product_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($product = mysqli_fetch_assoc($result)){ ?>
     <html>
      <body>
        <?php include "header.php";?>

        
      </body>
    </html>
   <?php } else { ?>

<?php  }
    mysqli_stmt_close($stmt);
  }
}
?>

