<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu - Oasis</title>
 
</head>
<body>
  <section class="menu-header">
    <?php include "header.php"; ?>
  </section>
  <section class="menu-body">
    <div class="menu-title">
     <h1>MENU</h1>
    </div>
    <div class="category-list">
      <div class="category-button">
      <button class="menu-category active">ALL</button>
      <button class="menu-category">BEST SELLER</button>
      <button class="menu-category">ESPRESSO</button>
      <button class="menu-category">NON-COFFEE</button>
      </div>
     
    </div>
  </section>
  <script>
  var menuActive = document.querySelectorAll(".menu-category");

  var category = function (categoryClick) {
    // Remove the "active" class from all buttons
    menuActive.forEach((btn) => {
      btn.classList.remove('active');
    });
    // Add the "active" class to the clicked button
    menuActive[categoryClick].classList.add('active');
  };

  menuActive.forEach((categoryActive, index) => {
    categoryActive.addEventListener("click", () => {
      category(index);
    });
  });

  </script>
</body>
</html>