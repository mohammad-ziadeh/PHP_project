<?php
include '../php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);
    $quantity = trim($_POST['stock_quantity']);
    $cat = trim($_POST['category_id']);

    $sql = "UPDATE product SET name = :name, price = :price, description = :description, stock_quantity = :stock_quantity, category_id = :category_id WHERE product_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':stock_quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':category_id', $cat, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // التوجيه إلى صفحة 'store.php' بعد التحديث بنجاح
        header("Location: storeDash.php?success=true");
        exit();
    } else {
        echo "Error updating product!";
    }
}
?>
