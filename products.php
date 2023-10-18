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

        <section class="product-page">
          <div class="product-div">
            <div class="product-picture">
              <img src="<?php echo $product['img']; ?>" alt="">
            </div>
            <div class="product-info">
              <div class="product-name">
                <h1><?php echo $product['prodname']; ?></h1>
              </div>
              <div class="product-size">
                <p>Sizes:</p>
                <div class="sizes-button">
                  <button>Tall</button>
                  <button>Grande</button>
                  <button>Venti</button>
                </div>
              </div>
              <div class="product-button">
                  <button>Add to Cart</button>
                  <button>Buy Now</button>
              </div>
            </div>
          </div>
        </section>
        
      </body>
    </html>
   <?php } else { ?>

<?php  }
    mysqli_stmt_close($stmt);
  }
}
?>

