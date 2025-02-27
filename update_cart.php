<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_quantity']) && isset($_POST['quantity'])) {
        $product_id = intval($_POST['update_quantity']);
        $new_quantity = intval($_POST['quantity']);

        if ($new_quantity > 0) {
            $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
        } else {
            unset($_SESSION['cart'][$product_id]);
        }
    }

    if (isset($_POST['remove_product'])) {
        $product_id = intval($_POST['remove_product']);
        unset($_SESSION['cart'][$product_id]);
    }
}

header("Location: cart.php");
exit();
?>
