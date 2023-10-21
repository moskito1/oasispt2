<?php
session_start();

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to login page
    header('Location: login.php');
    exit();
}

if (isset($_POST['cart'])) {
    
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_img = $_POST['product_img'];
    $product_price = $_POST['product_price'];
    $quantity = (int)$_POST['quantity'];

    // Create a cart item array
    $cart_item = array(
        'id' => $product_id,
        'name' => $product_name,
        'img' => $product_img,
        'price' => $product_price,
        'quantity' => $quantity
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product is already in the cart, if so, update the quantity
    $product_found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] === $product_id) {
            $item['quantity'] += $quantity;
            $product_found = true;
            break;
        }
    }

    // If the product is not already in the cart, add it as a new item
    if (!$product_found) {
        $_SESSION['cart'][] = $cart_item;
    }

    // Redirect to the product page 
    header('Location: products.php?id=' . $product_id);
    exit();
}
