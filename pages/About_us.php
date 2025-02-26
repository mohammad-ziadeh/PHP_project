<!DOCTYPE php>
<html lang="en">

<head>
    <title>PHP project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,fashion,store">
    <meta name="description" content="Bootstrap 5 Fashion Store PHP CSS Template">
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

</head>

<body style="background-color: #1e1e20;">
    <!-- <div class="preloader text-white fs-6 text-uppercase overflow-hidden"></div> -->
    <!-- <div class="search-popup">
        <div class="search-popup-container">

            <form role="search" method="get" class="form-group" action="">
                <input type="search" id="search-form" class="form-control border-0 border-bottom"
                    placeholder="Type and press enter" value="" name="s" />
                <button type="submit" class="search-submit border-0 position-absolute bg-white"
                    style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                    </svg></button>
            </form>

            <h5 class="cat-list-title">Browse Categories</h5>
        </div>
    </div> -->
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart"
        aria-labelledby="My Cart">
        <div class="offcanvas-header justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary" style="color: #c5a15b;">Your cart</span>
                    <span class="badge bg-primary rounded-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Growers cider</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Fresh grapes</h6>
                            <small class="text-body-secondary">Brief description</small>
                        </div>
                        <span class="text-body-secondary">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Heinz tomato ketchup</h6>
                            <small class="text-body-secondary" style="color: #c5a15b;">Brief description</small>
                        </div>
                        <span class="text-body-secondary" style="color: #c5a15b;">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span style="color: #c5a15b;">Total (USD)</span>
                        <strong style="color: #c5a15b;">$20</strong>
                    </li>
                </ul>

                <button class="w-100 btn btn-primary btn-lg" type="submit" style="color: #c5a15b;">Continue to
                    Checkout</button>
            </div>
        </div>
    </div>

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
                                    <a class="nav-link active" href="../index.php" style="color: #c5a15b;">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="./About_us.php" style="color: #c5a15b;">About us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./contact.php" style="color: #c5a15b;">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./user_profile.php" style="color: #c5a15b;">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./sign_up.php" style="color: #c5a15b;">Login</a>
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

    <!--######################### start here #####################################-->
    <section class="py-3 py-md-5 py-xl-8" style="background-color: #1e1e20;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8">
                    <!-- <h3 class="fs-5 mb-2 text-secondary text-uppercase">About</h3> -->
                    <h2 class="display-5 mb-4" style="color: #c5a15b;">Our journey began with a dream of redefining how the world perceives
                        design.</h2>
                    <a href="#" class="btn btn-dark text-uppercase mt-3">Shop Collection</a>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container overflow-hidden">
            <div class="row gy-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <article>
                        <div class="card border-0">
                            <img class="card-img-top img-fluid m-0" style="width: 550px;" loading="lazy"
                                src="https://www.gazman.com.au/cdn/shop/articles/G24_WeddingDressCodesForMen_Blog_Spring_FeatureTile_800x.jpg?v=1726117506"
                                alt="Our Vision">
                            <div class="card-body p-4" style="background-color: #2f2f32;">
                                <div class="entry-header mb-3">
                                    <h2 class="card-title entry-title h4 mb-0">
                                        <a class="link-dark text-decoration-none" href="#!" style="color: #c5a15b;">Our Vision</a>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary  mb-3">From sleek modernism to timeless
                                    elegance, we infuse every creation with a touch of our artistic ingenuity. As a
                                    design agency, great design can shape perceptions, inspire action, and leave an
                                    indelible mark on the world.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-lg-6">
                    <article>
                        <div class="card border-0">
                            <img style="width: 650px; height: 383px;" class="card-img-top img-fluid m-0" loading="lazy"
                                src="https://cdn.shopify.com/s/files/1/0075/3929/4305/files/20210827_GAZMAN_SS21_SHOT_20_107_1024x1024.jpg"
                                alt="Our Approach">
                            <div class="card-body p-4" style="background-color: #2f2f32;">
                                <div class="entry-header mb-3">
                                    <h2 class="card-title entry-title h4 mb-0">
                                        <a class="link-dark text-decoration-none" href="#!" style="color: #c5a15b;">Our Approach</a>
                                    </h2>
                                </div>
                                <p class="card-text entry-summary mb-3">Welcome to our design agency,
                                    where creativity knows no bounds and innovation takes center stage. We are a team of
                                    dedicated designers, strategists, and visionaries with a passion for transforming
                                    ideas into captivating visuals.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--######################### end here #####################################-->
    <footer id="footer" class="mt-5" style="background-color: #1e1e20;">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between py-5">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu footer-menu-001">
                        <div class="footer-intro mb-4">
                            <a href="./index.php">

                                <img src="./images/Black_and_Gold_Elegant_Hotel_Logo__1_-removebg-preview.png" alt="" style="width: 199px;">
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
                                <a href="../index.php" class="item-anchor" style="color: #c5a15b;">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="./About_us.php" class="item-anchor" style="color: #c5a15b;">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="./contact.php" class="item-anchor" style="color: #c5a15b;">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="./contact.php" class="item-anchor" style="color: #c5a15b;">Profile</a>
                            </li>
                            <li class="menu-item">
                                <a href="./contact.php" class="item-anchor" style="color: #c5a15b;">Login</a>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/SmoothScroll.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.min.js"></script>
</body>

</html>