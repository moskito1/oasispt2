<?php 
session_start();

include "get_user_info.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
</head>
<body>
  <?php include "header.php";?>
  <?php if (isset($_POST['edit'])):?>
    <form action="updateprofile.php" method="post" enctype="multipart/form-data">
    <div class="profile-info">
    <div class="picture">
      <img src="<?php echo $userProfilePicture;?>" alt="">
      <div class="round">
      <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
      <i class = "fa fa-camera" style = "color: #fff;"></i>
    </script>
      </div>
    </div>
    <div class="user">
      <div class="name-div">
        <div class="fname">
        <input type="text" placeholder="">
        </div>
        <div class="lname">
        <p class="name"><?php echo $userLastName; ?></p>
        </div>
      </div>
      <div class="others">
        <p><?php if (!empty($userContact)) {
          echo "<p>$userContact</p>";
        } else {
          echo "<p class='blank'>Contact number not set</p>";
        }?></p>
        <p><?php if (!empty($userEmail)) {
          echo "<p>$userEmail</p>";
        } else {
          echo "<p class='blank'>Email address not set</p>";
        } ?></p>
        <p><?php if (!empty($userAddress)) {
          echo "<p >$userAddress</p>";
        } else {
          echo "<p class='blank'>Address not set</p>";
        } ?></p>
      </div>
    </div>
  </div>
  
    <input type="submit" name="update" value="Update">
  
    </form>
    
  <?php else: ?>
  <div class="profile-info">
    <div class="picture">
      <img src="<?php echo $userProfilePicture;?>" alt="">
    </div>
    <div class="user">
      <div class="name-div">
        <div class="fname">
        <p class="name"><?php echo $userFirstName;?></p>
        </div>
        <div class="lname">
        <p class="name"><?php echo $userLastName; ?></p>
        </div>
      </div>
      <div class="others">
        <p><?php if (!empty($userContact)) {
          echo "<p>$userContact</p>";
        } else {
          echo "<p class='blank'>Contact number not set</p>";
        }?></p>
        <p><?php if (!empty($userEmail)) {
          echo "<p>$userEmail</p>";
        } else {
          echo "<p class='blank'>Email address not set</p>";
        } ?></p>
        <p><?php if (!empty($userAddress)) {
          echo "<p >$userAddress</p>";
        } else {
          echo "<p class='blank'>Address not set</p>";
        } ?></p>
      </div>
    </div>
  </div>
  <form action="" method="post">
    <input type="submit" name="edit" value="Edit">
  </form>
  <?php endif; ?>

  <?php include "footer.php";?>
</body>
</html>