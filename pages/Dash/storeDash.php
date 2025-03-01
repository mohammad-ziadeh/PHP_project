<?php
include '../php/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);
    $quantity = trim($_POST['stock_quantity']);
    $image = trim($_POST['image_url']);
    $cat = trim($_POST['category_id']);

    $sql = 'INSERT INTO product (name, price, description, stock_quantity,image_url, category_id) VALUES (:name, :price, :description, :stock_quantity,:image_url, :category_id)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':stock_quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':image_url', $image, PDO::PARAM_INT);
    $stmt->bindParam(':category_id', $cat, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: storeDash.php?success=true");
        exit();
    }
}

$sql = 'SELECT * FROM product';
$stmt = $conn->prepare($sql);
$stmt->execute();
$product = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="dashStyle.css">

    <title>AdminHub</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="./dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="./storeDash.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">My Store</span>
                </a>
            </li>
            <li>
                <a href="./messageDash.php">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <!-- <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a> -->
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <form action="./storeDash.php" method="POST" style="display: flex; gap:20px;">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="Product name"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="name">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="Price"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="price">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="Description"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="description">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="quantity"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="number" id="text" name="stock_quantity">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="image url"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="image_url">
                        <input type="text"
                            id="username"
                            style="padding: 8px 12px; font-size: 14px; border: 1px solid #ddd; border-radius: 5px; width: 250px; transition: border-color 0.3s ease;"
                            placeholder="category_id"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="category_id">
                        <button class="btn-add" type="submit" style="display: inline-block; padding: 10px 20px; font-size: 16px; border-radius: 5px; border: 2px solid green; background-color: green; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; width:100px;">Add</button>
                    </form>

                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Products</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Added at</th>
                                <th>Stock quantity</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product as $item) : ?>
                                <tr>
                                    <td><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['price']; ?></td>
                                    <td><?php echo $item['description']; ?></td>
                                    <td><?php echo $item['created_at']; ?></td>
                                    <td><?php echo $item['stock_quantity']; ?></td>
                                    <td><?php echo $item['image_url']; ?></td>
                                    <td>
                                        <a href="edit_product.php?id=<?php echo htmlspecialchars($item['product_id']); ?>">
                                            <button type="button" style="display: inline-block; padding: 10px 20px; font-size: 16px; border-radius: 5px; border: 2px solid blue; background-color: blue; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; width:100px;" onclick="openEditForm(<?php echo $item['product_id']; ?>)">Update</button>
                                        </a>
                                        <button class="delete-btn" type="button" style="display: inline-block; padding: 10px 20px; font-size: 16px; border-radius: 5px; border: 2px solid #dc3545; background-color: #dc3545; color: white; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s ease; width:100px;" data-id="<?php echo $item['product_id']; ?>">Delete</button>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'delete_product.php?id=' + productId;
                    }
                });
            });
        });
    </script>

    <script src="dash.js"></script>
</body>

</html>