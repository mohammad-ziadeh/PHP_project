<?php
include '../php/config.php';

$sql = 'SELECT * FROM product';

$stmt = $conn->prepare($sql);
$stmt->execute();

$product = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['description']);
    $quantity = trim($_POST['stock_quantity']);
    $cat = trim($_POST['category_id']);

    $sql = 'INSERT INTO product (name, price, description, stock_quantity,category_id) VALUES (:name, :price, :description, :stock_quantity,:category_id)';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':stock_quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':category_id', $cat, PDO::PARAM_INT);
    $stmt->execute();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="./dashStyle.css">

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
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
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
            <a href="#" class="nav-link">Categories</a>
            <!-- <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form> -->
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <!-- <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a>
            </div> -->

            <!-- <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>2834</h3>
                        <p>Visitors</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>$2543</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul> -->
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
                            placeholder="category_id"
                            onfocus="this.style.borderColor = '#4CAF50';"
                            onblur="this.style.borderColor = '#ddd';" type="text" id="text" name="category_id">
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Products</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
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
                                    <td>
                                        <img src="img/people.png">
                                        <p>
                                            <?php
                                            echo $item['name'];
                                            ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </p>
                                    </td>
                                    <td>
                                        <?php
                                        echo $item['price']
                                        ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>

                                    <td>
                                        <?php
                                        echo $item['description'];
                                        ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>

                                    <td>
                                        <?php
                                        echo $item['created_at']
                                        ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>
                                        <?php
                                        echo $item['stock_quantity']
                                        ?>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>
                                        image
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                    <td>
                                        <button>Update</button>
                                        <button>Delete</button>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus'></i>
						<i class='bx bx-filter'></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded'></i>
						</li>
					</ul>
				</div> -->
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="dash.js"></script>
</body>

</html>