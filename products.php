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
          <div class="product-container">
          <div class="left-product">
            <div class="product-image">
              <img src="<?php echo $product['img']; ?>" alt="">
            </div>
            <div class="product-description">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias voluptate debitis accusantium illum aut nesciunt</p>
            </div>
          </div>
          <div class="right-product">
            <div class="product-name">
              <h1><?php echo $product['prodname']; ?></h1>
            </div>
            <div class="product-price">
              <p>₱ <?php echo $product['tallprice']; ?></p>
            </div>
            <div class="product-size">
              <p>Sizes:</p>
              <div class="size-button">
                <button>Tall</button>
                <button>Grande</button>
                <button>Venti</button>
              </div>
            </div>
            <div class="product-quantity">
              <p>Quantity:</p>
              <div class="quantity-counter">
                <span class="decrease" onClick='decreaseCount(event, this)'>-</span>
                <input type="text" value="1" id="quantity">
                <span class="increase" onClick='increaseCount(event, this)'>+</span>
              </div>
            </div>
            <div class="cart-buy-button">
              <button>Add to Cart</button>
              <button>Buy Now</button>
            </div>
          </div>
          </div>
        

        </section>

      </body>

      <script>
        function increaseCount(a, b) {
          var input = b.previousElementSibling;
          var value = parseInt(input.value, 10);
          value = isNaN(value) ? 0 : value;
          value++;
          input.value = value;
        }

        function decreaseCount(a, b) {
          var input = b.nextElementSibling;
          var value = parseInt(input.value, 10);
          if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
          }
        }
      </script>
    </html>
   <?php } else { ?>

<?php  }
    mysqli_stmt_close($stmt);
  }
}
?>

