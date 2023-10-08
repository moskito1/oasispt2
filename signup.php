

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - Oasis Cafe</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <?php include "header.php"; ?>

  <section class="signup">
      <div class="signup-container">
      <div class="title">
        <img src="imgs/logo-typo.png" alt="">
      <h2>SIGN UP</h2>
      </div>
        <form action="signup_formprocess.php" method="POST">
        <div class="form-field">
            <input type="text" name="firstname" required>
            <label for="firstname">First Name</label>
        </div>
        <div class="form-field">
            <input type="text" name="lastname" required>
            <label for="lastname">Last Name</label>
        </div>
        <div class="form-field">
            <input type="text" name="username" required>
            <label for="username">Username</label>
        </div>
        <div class="form-field">
            <input type="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="form-field">
            <input type="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <div class="form-field">
            <input type="password" name="passwordRepeat" required>
            <label for="password">Re-enter Password</label>
        </div>
        <div class="signup-button">
            <input type="submit" class="signup-btn" name="signup" value="SIGN UP">
        </div> 
        
            </form>
      </div>
  </section>

  
</body>

</html>