<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
  $product_id = intval($_POST['product_id']);

  $query = "SELECT * FROM product WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("i", $product_id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = [];
    }


    if (isset($_SESSION['cart'][$product_id])) {
      $_SESSION['cart'][$product_id]['quantity'] += 1;
    } else {
      $_SESSION['cart'][$product_id] = [
        'id' => $product['id'],
        'name' => $product['name'],
        'price' => $product['price'],
        'image_url' => $product['image_url'],
        'quantity' => 1
      ];
    }
  } else {
    echo "Product not found.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elite Suits</title>
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
</head>

<body>

  <div class="discount">Enjoy 10% discount on all suits</div>
  <nav class="navbar navbar-expand-lg text-uppercase fs-6 p-3 border-bottom align-items-center"
    style="background-color: #1e1e20;color: #c5a15b;">
    <div class="container-fluid">
      <div class="row justify-content-between align-items-center w-100">

        <div class="col-auto">
          <a class="navbar-brand" href="./index.php">
            <img src="./images/Black_and_Gold_Elegant_Hotel_Logo__1_-removebg-preview.png" alt="" style="width: 119px;">
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
                  <a class="nav-link active" href="././index.php" style="color: #c5a15b;">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./pages/About_us.php" style="color: #c5a15b;">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/contact.php" style="color: #c5a15b;">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Products.php" style="color: #c5a15b;">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./pages/sign_up.php" style="color: #c5a15b;">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-3 col-lg-auto">
          <ul class="list-unstyled d-flex m-0">
            <li class="d-none d-lg-block">
              <a href="./index.php" class="text-uppercase mx-3" style="color: #c5a15b;">Wishlist <span
                  class="wishlist-count">(0)</span>
              </a>
            </li>
            <li class="d-none d-lg-block">
              <a href="./index.php" class="text-uppercase mx-3" data-bs-toggle="offcanvas"
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
              <a href="#search" class="search-button" style="color: #c5a15b;">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#search"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </nav>

  <div class="main-containers-product">
    <!-- Sidebar Section -->
    <div class="sidebar-product">
      <h1 style="font-size:46px; margin-left:30px">Shop Suits</h1>

      <!-- Filter Section -->
      <div class="filter-container-button">
        <button class="filter-button">Trouser</button>
        <button class="filter-button">Tie</button>
        <button class="filter-button">Shirts</button>
      </div>

      <hr style="color:black;margin-left:25px;margin-right:25px">

      <!-- Sort By Section -->
      <div class="filte-sortby">
        <h6 style="margin-left:30px">Sort By</h6>
        <div class="dropdown">
          <button onclick="myFunction()" style="background-color:#c5a15b; color:black; border:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
          </button>
        </div>
      </div>

      <div class="dropdown-content" id="myDropdown">
        <input type="radio" style="margin-left:30px;" id="recommended" name="sort" value="recommended">
        <label for="recommended" style="color:black; font-size:15px" class="checkboxtext">Recommended</label><br>

        <input type="radio" style="margin-left:30px;" id="best-sellers" name="sort" value="best-sellers">
        <label for="best-sellers" style="color:black; font-size:15px" class="checkboxtext">Best Sellers</label><br>

        <input type="radio" style="margin-left:30px;" id="new-arrivals" name="sort" value="new-arrivals">
        <label for="new-arrivals" style="color:black; font-size:15px" class="checkboxtext">New Arrivals</label><br>

        <input type="radio" style="margin-left:30px;" id="price-high-to-low" name="sort" value="price-high-to-low">
        <label for="price-high-to-low" style="color:black; font-size:15px" class="checkboxtext">Price: High to Low</label><br>

        <input type="radio" style="margin-left:30px;" id="price-low-to-high" name="sort" value="price-low-to-high">
        <label for="price-low-to-high" style="color:black; font-size:15px" class="checkboxtext">Price: Low to High</label>

      </div>

      <hr style="color:black;margin-left:25px;margin-right:25px">

      <!-- Category Section -->
      <div class="filte-sortby">
        <h6 style="margin-left:30px">Category</h6>
        <div class="dropdown">
          <button onclick="btncategory()" style="background-color:#c5a15b; color:black; border:none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000" class="bi bi-plus-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
            </svg>
          </button>
        </div>
      </div>

      <div class="dropdown-content" id="dropdowns">
        <input type="checkbox" style="margin-left:30px;">
        <label for="trouser" style="color:black; font-size:15px" class="checkboxtext">Trouser</label><br>

        <input type="checkbox" style="margin-left:30px;">
        <label for="blazers" style="color:black; font-size:15px" class="checkboxtext">Blazers</label><br>

        <input type="checkbox" style="margin-left:30px;">
        <label for="shirts" style="color:black; font-size:15px" class="checkboxtext">Shirts</label><br>

        <input type="checkbox" style="margin-left:30px;">
        <label for="tie" style="color:black; font-size:15px" class="checkboxtext">Tie</label><br>
      </div>
    </div>

    <!-- Main Product Section -->
    <div class="container-product">
      <div class="filter-icon" onclick="toggleFilterMenu()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" viewBox="0 0 16 16">
          <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zM4 7.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zM2 4.5A.5.5 0 0 1 2.5 4h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>
      </div>

      <div class="main-container-product">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "php_project";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT * FROM product";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $product_name = $row['name'];
            $product_price = $row['price'];
            $product_image = $row['image_url'];
            $product_des = $row['description'];

        ?>

            <div class=" product-card">
              <div class="carda mb-4">
                <a href="#">
                  <div class="product-image-containers">
                    <img src="<?php echo $product_image; ?>" alt="<?php echo $product_name; ?>">
                    <span class="wishlist-icon">
                      <i class="fa fa-heart"></i>
                    </span>
                  </div>
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $product_name; ?></h5>

                  <p class="card-text">$<?php echo number_format($product_price, 2); ?></p>
                  <form method="post" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                  </form>
                </div>
              </div>
            </div>

        <?php
          }
        } else {
          echo "No products found.";
        }

        $conn->close();
        ?>
      </div>
    </div>
  </div>
  <footer id="footer" style="background-color: #1e1e20;">
    <div class="container">
      <div class="row d-flex flex-wrap justify-content-between py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
              <a href="./index.html">
                <img src="/images/Black_and_Gold_Elegant_Hotel_Logo__1_-removebg-preview.png" alt="" style="width: 199px;">
              </a>
            </div>
            <p style="color: #c5a15b;">Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum
              diam in. Nisi, purus
              vitae, ultrices nunc. Sit ac sit suscipit hendrerit.</p>
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#pinterest"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title text-uppercase mb-4" style="color: #c5a15b;">Quick Links</h5>
            <ul class="menu-list list-unstyled text-uppercase border-animation-left fs-6">
              <li class="menu-item">
                <a href="./index.html" class="item-anchor" style="color: #c5a15b;">Home</a>
              </li>
              <li class="menu-item">
                <a href="./pages/About_us.html" class="item-anchor" style="color: #c5a15b;">About us</a>
              </li>
              <li class="menu-item">
                <a href="./pages/contact.html" class="item-anchor" style="color: #c5a15b;">Contact</a>
              </li>
              <li class="menu-item">
                <a href="./pages/contact.html" class="item-anchor" style="color: #c5a15b;">Profile</a>
              </li>
              <li class="menu-item">
                <a href="./pages/contact.html" class="item-anchor" style="color: #c5a15b;">Login</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
            <h5 class="widget-title text-uppercase mb-4" style="color: #c5a15b;">Contact Us</h5>
            <p style="color: #c5a15b;">Do you have any questions or suggestions? <a
                href="mailto:contact@yourcompany.com" class="item-anchor"
                style="color:#686868">contact@yourcompany.com</a></p>
            <p style="color: #c5a15b;">Do you need support? Give us a call. <a href="tel:+43 720 11 52 78"
                class="item-anchor" style="color:#686868">+43 720 11 52
                78</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex flex-wrap">
            <div class="shipping">
              <span>We ship with:</span>
              <img src="images/arct-icon.png" alt="icon">
              <img src="images/dhl-logo.png" alt="icon">
            </div>
            <div class="payment-option">
              <span>Payment Option:</span>
              <img src="images/visa-card.png" alt="card">
              <img src="images/paypal-card.png" alt="card">
              <img src="images/master-card.png" alt="card">
            </div>
          </div>
          <div class="col-md-6 text-end">
            <p>© Copyright 2025 EliteSuits. All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.querySelectorAll('input[name="sort"]').forEach((input) => {
      input.addEventListener('change', (event) => {
        const sortOption = event.target.value;
        loadSortedProducts(sortOption);
      });
    });

    function loadSortedProducts(sortOption) {
      const xhr = new XMLHttpRequest();
      xhr.open('GET', `fetch_products.php?sort=${sortOption}`, true);
      xhr.onload = function() {
        if (xhr.status === 200) {
          document.querySelector('.main-container-product').innerHTML = xhr.responseText;
        }
      };
      xhr.send();
    }

    function toggleFilterMenu() {
      let menu = document.getElementById("filterMenu");
      menu.style.display = menu.style.display === "block" ? "none" : "block";
    }

    function myFunction() {
      var dropdown = document.getElementById("myDropdown");

      if (dropdown.classList.contains("show")) {
        dropdown.classList.remove("show");
        dropdown.classList.add("hide");
      } else {
        dropdown.classList.remove("hide");
        dropdown.classList.add("show");
      }
    }

    function btncategory() {
      var dropdown = document.getElementById("dropdowns");

      if (dropdown.classList.contains("show")) {
        dropdown.classList.remove("show");
        dropdown.classList.add("hide");
      } else {
        dropdown.classList.remove("hide");
        dropdown.classList.add("show");
      }
    }
    $(document).ready(function() {
      $(".add-to-cart").click(function() {
        var productId = $(this).data("product-id");

        $.ajax({
          url: "cart.php",
          type: "POST",
          data: {
            product_id: productId
          },
          success: function(response) {
            $(".cart-items").html(response);
          }
        });
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>