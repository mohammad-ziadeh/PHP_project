<?php         session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="author" content="TemplatesJungle">
<meta name="keywords" content="ecommerce,fashion,store">
<meta name="description" content="Bootstrap 5 Fashion Store HTML CSS Template">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="../style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="shortcut icon" href="/images/Black_and_Gold_Elegant_Hotel_Logo__1_-removebg-preview.png" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: #c5a15b;
        }

        .cart-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #333;
            border-radius: 8px;
        }

        .cart-header {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #444;
            border-radius: 5px;
        }

        .cart-item img {
            max-width: 100px;
            border-radius: 5px;
        }

        .cart-item-info {
            flex-grow: 1;
            margin-left: 10px;
        }

        .cart-item-name {
            font-size: 18px;
            font-weight: bold;
        }

        .cart-item-price {
            color: #c5a15b;
        }

        .cart-footer {
            text-align: right;
            margin-top: 30px;
        }

        .btn-checkout {
            background-color: #c5a15b;
            color: black;
        }
    </style>
</head>
<body>
<div class="discount">Enjoy 10% discount on all suits</div>
    <nav class="navbar navbar-expand-lg text-uppercase fs-6 p-3 border-bottom align-items-center nav-lights-p"
    style="background-color: #1e1e20;color: #c5a15b;">
    <div class="container-fluid">
      <div class="row justify-content-between align-items-center w-100">

        <div class="col-auto">
          <a class="navbar-brand" href="./index.html">
<img src="images/Black_and_Gold_Elegant_Hotel_Logo__1_-removebg-preview.png" alt="" style="width: 119px;">
          </a>
        </div>

        <div class="col-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: #c5a15b;">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link active" href="././index.html" style="color: #c5a15b;">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./pages/About_us.html" style="color: #c5a15b;">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/contact.html" style="color: #c5a15b;">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/user_profile.html" style="color: #c5a15b;">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/sign_up.html" style="color: #c5a15b;">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-3 col-lg-auto">
          <ul class="list-unstyled d-flex m-0">
            <li class="d-none d-lg-block">
              <a href="./index.html" class="text-uppercase mx-3" style="color: #c5a15b;">Wishlist <span
                  class="wishlist-count">(0)</span>
              </a>
            </li>
            <li class="d-none d-lg-block">
              <a href="./index.html" class="text-uppercase mx-3" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasCart" aria-controls="offcanvasCart" style="color: #c5a15b;">Cart <span
                  class="cart-count">(0)</span>
              </a>
            </li>
            <li class="d-lg-none">
              <a href="#" class="mx-2">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
            </li>
            <li class="d-lg-none">
              <a href="#" class="mx-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#cart"></use>
                </svg>
              </a>
            </li>
            <li class="search-box" class="mx-2">
              <a href="#search" class="search-button" style="color:rgb(255, 255, 255);">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>


    </div>
  </nav>
  

    <div class="cart-container">
        <div class="cart-header">Your Shopping Cart</div>
        <?php

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['cart'] as $cartItem) { ?>
                <tr>
                    <td>
                        <img src="<?php echo htmlspecialchars($cartItem['image_url'] ?? 'placeholder.jpg'); ?>" width="50">
                    </td>
                    <td><?php echo htmlspecialchars($cartItem['name']); ?></td>
                    <td>$<?php echo number_format($cartItem['price'], 2); ?></td>
                    <td>
                        <form method="post" action="update_cart.php">
                            <input type="hidden" name="update_quantity" value="<?php echo $cartItem['id']; ?>">
                            <input type="number" name="quantity" value="<?php echo $cartItem['quantity']; ?>" min="1" style="width: 50px;">
                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                        </form>
                    </td>
                    <td>$<?php echo number_format($cartItem['price'] * $cartItem['quantity'], 2); ?></td>
                    <td>
                        <!-- Remove product form -->
                        <form method="post" action="update_cart.php">
                            <input type="hidden" name="remove_product" value="<?php echo $cartItem['id']; ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="text-end">
    </div>
    <?php
}
?>




        <div class="cart-footer">
            <a href="checkout.php" class="btn btn-checkout">Proceed to Checkout</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
