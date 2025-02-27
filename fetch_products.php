<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sortOption = isset($_GET['sort']) ? $_GET['sort'] : 'recommended';

switch ($sortOption) {
    case 'best-sellers':
        $sql = "SELECT * FROM product ORDER BY stock_quantity DESC";
        break;
    case 'new-arrivals':
        $sql = "SELECT * FROM product ORDER BY created_at DESC";
        break;
    case 'price-high-to-low':
        $sql = "SELECT * FROM product ORDER BY price DESC";
        break;
    case 'price-low-to-high':
        $sql = "SELECT * FROM product ORDER BY price ASC";
        break;
    default:
        $sql = "SELECT * FROM product";
        break;
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $product_name = $row['name'];
        $product_price = $row['price'];
        $product_image = $row['image_url'];
        $product_des = $row['description'];

        echo "<div class='product-card'>
                <div class='carda mb-4'>
                    <a href='#'>
                        <div class='product-image-containers'>
                            <img src='$product_image' alt='$product_name'>
                            <span class='wishlist-icon'>
                                <i class='fa fa-heart'></i>
                            </span>
                        </div>
                    </a>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_name</h5>
                        <p class='card-text'>$" . number_format($product_price, 2) . "</p>
                        <button class='btn btn-primary add-to-cart''>Add to Cart</button>
                    </div>
                </div>
            </div>";
    }
} else {
    echo "No products found.";
}

$conn->close();
