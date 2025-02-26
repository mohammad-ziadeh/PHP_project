<?php
include('./php/config.php');

// $alreadyEmail = "";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $email = trim($_POST['email']);
//   $password = trim($_POST['customer_password']);
//   $confirm_password = trim($_POST['confirm_password']);

//   $sql = "SELECT email FROM customers WHERE email = ?";
//   $stmt = $conn->prepare($sql);
//   $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//   $stmt->execute();
//   $stmt->store_result();

//   if ($stmt->num_rows > 0) {
//     $alreadyEmail = "Email already exists";
//   } else {
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//     $stmt->close();
//     $sql = "INSERT INTO customers (email, customer_password) VALUES (?, ?)";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':email', ':customer_password', $email, $password, PDO::PARAM_STR);

//     if ($stmt->execute()) {
//       header("Location: login.php");
//       exit();
//     } else {
//       echo "Error: " . $stmt->error;
//     }
//   }

//   // $stmt->close();
//   // $conn->close();
// }



include('./php/config.php');

$alreadyEmail = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = trim($_POST['email']);
  $password = trim($_POST['customer_password']);
  $confirm_password = trim($_POST['confirm_password']);


  $sql = "SELECT email FROM customers WHERE email = :email";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $email, PDO::PARAM_STR);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $alreadyEmail = "Email already exists";
  } else {
    if ($password !== $confirm_password) {
      echo "Passwords do not match!";
      exit();
    }


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO customers (email, customer_password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);

    if ($stmt->execute()) {
      header("Location: login.php");
      exit();
    } else {
      echo "Error: Unable to register user.";
    }
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="./pages_css/signUp.css">

</head>

<body>
  <div class="wrapper" style="background-image: url('./pics/dark-gray-vertical-wooden-boards.jpg'); background-size:cover;">
    <div class="inner" style="height: 500px; width: 65%;">
      <div class="image-holder">
        <img src="./pics/pexels-fatih-guney-337108406-16159027.jpg" alt="" style="height: 460px;">
      </div>
      <form action="./sign_up.php" method="POST" >
        <h3 style="color: #c5a15b;">Registration Form</h3>
        <div class="form-group">
          <input type="text" id="firstName" placeholder="First Name" class="form-control">
          <input type="text" id="lastName" placeholder="Last Name" class="form-control">
        </div>
        <div class="form-wrapper">
          <input type="text" id="email" placeholder="Email Address" name="email" class="form-control">
          <i class="zmdi zmdi-email"></i>
          <span id="emailError" style="color: red; <?php echo !empty($alreadyEmail) ? 'display: block;' : 'display: none;'; ?>">
            <?php echo $alreadyEmail; ?>
          </span>
        </div>
        <div class="form-wrapper">
          <input type="password" id="password" name="customer_password" placeholder="Password" class="form-control">
          <span id="passwordError" style="display: none; color: red;">
          </span>
        </div>
        <div class="form-wrapper">
          <input type="Password" id="conPassword" placeholder="Confirm Password" name="confirm_password" class="form-control">
          <span id="conPasswordError" style="display: none; color: red;">
          </span>
        </div>
        <button type="submit" style="background-color: #1e1e20; width: 100%;" id="registerButton">Register <i class="zmdi zmdi-arrow-right"></i></button>
        <br>
        <p>Already <a href="./login.php">have an account</a>?</p>
      </form>
    </div>
  </div>
  <script>
    const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const conPassword = document.getElementById("conPassword");
    const registerButton = document.getElementById("registerButton");

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;

    function validateEmail() {
      if (!emailPattern.test(email.value.trim())) {
        email.classList.add("border-danger");
        showError("emailError", "Invalid email format");
        return false;
      } else {
        email.classList.remove("border-danger");
        email.classList.add("border-success");
        hideError("emailError");
        return true;
      }
    }

    function validatePassword() {
      if (!passwordPattern.test(password.value.trim())) {
        password.classList.add("border-danger");
        showError("passwordError", "Password must be at least 6 characters and contain a letter and a number.");
        return false;
      } else {
        password.classList.remove("border-danger");
        password.classList.add("border-success");
        hideError("passwordError");
      }

      if (conPassword.value.trim() !== password.value.trim()) {
        conPassword.classList.add("border-danger");
        showError("conPasswordError", "Passwords do not match.");
        return false;
      } else {
        conPassword.classList.remove("border-danger");
        conPassword.classList.add("border-success");
        hideError("conPasswordError");
      }
      return true;
    }

    function validateSignup(event) {
      event.preventDefault();

      let isValid = true;

      if (firstName.value.trim() === "") {
        firstName.classList.add("border-danger");
        isValid = false;
      }
      if (lastName.value.trim() === "") {
        lastName.classList.add("border-danger");
        isValid = false;
      }
      if (!validateEmail()) isValid = false;
      if (!validatePassword()) isValid = false;

      if (isValid) {
        document.querySelector("form").submit();
      }
    }

    registerButton.addEventListener("click", validateSignup);

    function showError(spanId, message) {
      document.getElementById(spanId).style.display = "block";
      document.getElementById(spanId).innerText = message;
    }

    function hideError(spanId) {
      document.getElementById(spanId).style.display = "none";
    }
  </script>
</body>

</html>