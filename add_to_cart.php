<?php
session_start();

$product = [
    'id' => 1,
    'name' => 'Product Name',
    'price' => 49.99,
    'image_url' => 'product-image.jpg',
    'quantity' => 1
];

if (isset($_SESSION['cart'])) {
    $_SESSION['cart'][] = $product;
} else {
    $_SESSION['cart'] = [$product];
}

header('Location: cart.php');
exit;
