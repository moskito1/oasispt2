<?php
session_start();
include('dbconnection.php');

$category = isset($_GET['category']) ? $_GET['category'] : "ALL";

if ($category === "ALL") {
    $query = "SELECT * FROM products";
} else {
    $query = "SELECT * FROM products WHERE category = :category";
}

$stmt = $connection->prepare($query);

if ($category !== "ALL") {
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
}

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
            <a href="?category=ALL" class="menu-category <?php if ($category === "ALL") echo "active"; ?>">ALL</a>
            <a href="?category=ESPRESSO" class="menu-category <?php if ($category === "ESPRESSO") echo "active"; ?>">ESPRESSO</a>
            <a href="?category=NON%20ESPRESSO" class="menu-category <?php if ($category === "NON ESPRESSO") echo "active"; ?>">NON ESPRESSO</a>
        </div>
    </div>
    <div class="menu-card">
      <div class="product-row">
      <?php
        
        foreach ($result as $row) {
            echo '<div class="product-card">';
              echo '<img src="' . $row['img'] .  '" class="product-img">';
            echo '<p class="product-name">' . $row['prodname'] . '</p>';
            echo '<p>Price: ' . $row['price'] . '</p>';
            echo '</div>';
        }
        ?>
      </div>
       
    </div>
</section>
</body>
</html>
