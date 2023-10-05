<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Oasis Cafe</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <?php include "header.php"; ?>

  <section class="login">
      <div class="login-container">
        <div class="title">
        <img src="imgs/logo-typo.png" alt="">
        <h2>LOGIN</h2>
        </div>
        <form method="POST" action="formprocess.php" id="customer-login">
          <div class="form-field">
            <i class="fa fa-solid fa-user"></i>
            <input type="text" id="customer-username" name="username" required>
            <label for="">Username</label>
          </div>
          <div class="form-field">
            <i class="fa fa-lock"></i>
            <input type="password" id="customer-password"  name="password" required>
            <label for="">Password</label>
          </div>
          <div class="forgot-password">
            <a href="">Forgot password?</a>
          </div>
          <div class="login-button">
            <input type="submit" class="login-btn" value="LOGIN" name="login">
          </div>
        </form>
        <div class="signup-link">
        <p>Don't have an account? <span><a href="signup.php">Sign up here.</a></span></p>
        </div>
      </div>
  </section>

  
</body>
</html>