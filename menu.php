<?php
session_start();
include('dbconnection.php');

// Default category is "ALL" if not specified
$category = isset($_GET['category']) ? $_GET['category'] : "ALL";

if ($category === "ALL") {
    // Fetch all products
    $query = "SELECT * FROM products";
} else {
    // Fetch products for the selected category
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
    <!-- Your head content here -->
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
        <?php
        foreach ($result as $row) {
            echo '<div class="product-card">';
              echo '<img src="' . $row['img'] .  '" class="product-img">';
            echo '<h2>' . $row['prodname'] . '</h2>';
            echo '<p>Price: ' . $row['price'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</section>
</body>
</html>
