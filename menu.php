<?php
session_start();
include('dbconnection.php');

$category = isset($_GET['category']) ? $_GET['category'] : "ALL";

if ($category === "ALL") {
    $query = "SELECT p.prodid, p.prodname, p.img, ps.size_name, ps.price
              FROM products p
              INNER JOIN product_sizes ps ON p.prodid = ps.prodid
              WHERE ps.size_name = 'Tall'";
} else {
    $query = "SELECT p.prodid, p.prodname, p.img, ps.size_name, ps.price
              FROM products p
              INNER JOIN product_sizes ps ON p.prodid = ps.prodid
              WHERE p.category = ?
              AND ps.size_name = 'Tall'";
}

$stmt = mysqli_prepare($conn, $query);

if ($category !== "ALL") {
    mysqli_stmt_bind_param($stmt, 's', $category);
}

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
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
    <div class="menu-banner">
        <img src="imgs/menu-banner.png" alt="">
    </div>
    <div class="menu-title">
        <h1>MENU</h1>
    </div>
    <div class="category-list">
        <div class="category-button">
            <a href="?category=ALL" class="menu-category <?php if ($category === "ALL") echo "active"; ?>">ALL</a>
            <a href="?category=Espresso" class="menu-category <?php if ($category === "Espresso") echo "active"; ?>">ESPRESSO</a>
            <a href="?category=Non%20Espresso" class="menu-category <?php if ($category === "Non Espresso") echo "active"; ?>">NON ESPRESSO</a>
        </div>
    </div>
    <div class="menu-card">
        <div class="product-row">
            <?php
            foreach ($data as $row) {
                echo '<a href="products.php?id=' . $row['prodid'] . '" class="product-link">';
                echo '<div class="product-card">';
                echo '<img src="' . $row['img'] . '" class="menu-img">';
                echo '<p class="menu-name">' . $row['prodname'] . '</p>';
                echo '<p>From ₱' . $row['price'] . '</p>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
</body>
</html>
