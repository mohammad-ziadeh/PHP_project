<?php
include '../php/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM order_items WHERE product_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if (!$stmt->execute()) {
        echo "Error deleting order items!";
        exit();
    }

    $sql = "DELETE FROM product WHERE product_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: storeDash.php?deleted=true");
        exit();
    } else {
        echo "Error deleting product!";
    }
} else {
    echo "Product not found!";
}
