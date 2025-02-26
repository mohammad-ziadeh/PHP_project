<?php
// include('./php/config.php');
// $noEmail = "";
// $noPassword = "";
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $email = $_POST['email'];
//     $password = $_POST['customer_password'];

//     $sql = "SELECT email, customer_password FROM customers WHERE email = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':email', $email , PDO::PARAM_STR);
//     $stmt->execute();


//     if ($stmt->rowCount() > 0) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row['customer_password'])) {
//             header("Location: ../index.php");
//             exit();
//         } else {
//             $noPassword = "Wrong Password" . $stmt->error;
//         }
//     } else {
//         $noEmail = "Wrong Email" . $stmt->error;
//     }
// }




include('./php/config.php');

$noEmail = "";
$noPassword = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['customer_password']);

    $sql = "SELECT email, customer_password FROM customers WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        if (password_verify($password, $row['customer_password'])) {
            header("Location: ../index.php");
            exit();
        } else {
            $noPassword = "Wrong Password";
        }
    } else {
        $noEmail = "Wrong Email";
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
    <link rel="stylesheet" href="./pages_css/login.css">


</head>

<body>

    <div class="wrapper" style="background-image: url('./pics/dark-gray-vertical-wooden-boards.jpg'); background-size:cover;">
        <div class="inner" style="height: 500px; width: 65%;">
            <div class="image-holder">
                <img src="./pics/pexels-fatih-guney-337108406-16159027.jpg" alt="" style="height: 460px;">
            </div>
            <form action="./login.php" method="POST">
                <h3 style="color: #c5a15b;">Sign in Form</h3>
                <div class="form-wrapper">
                    <input style=" padding: 10px; margin: 10px;" type="email" name="email" id="email" placeholder="Email Address"
                        class="form-control">
                    <i class="zmdi zmdi-email"></i>
                    <span id="emailError" style="color: red; <?php echo !empty($noEmail) ? 'display: block;' : 'display: none;'; ?>">
                        <?php echo $noEmail; ?>
                    </span>
                </div>
                <div class="form-wrapper">
                    <input style=" padding: 10px; margin: 10px;" type="password" id="password" name="customer_password" placeholder="Password"
                        class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                    <span id="passwordError" style="color: red; <?php echo !empty($noPassword) ? 'display: block;' : 'display: none;'; ?>">
                        <?php echo $noPassword; ?>
                    </span>
                </div>
                <button type="submit" style="background-color: #1e1e20; width: 100%;" id="loginButton">Login <i class="zmdi zmdi-arrow-right"></i></button>
                <br>
                <p>Don't <a href="./sign_up.php">have an account</a>?</p>
            </form>
        </div>
    </div>
    <script>
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const loginButton = document.getElementById("loginButton");

        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;

        function validateEmail() {
            const emailValue = email.value.trim();

            if (!emailPattern.test(emailValue)) {
                email.classList.add("border-danger");
                showError("emailError", "Invalid email format.");
                return false;
            } else {
                email.classList.remove("border-danger");
                email.classList.add("border-success");
                hideError("emailError");
                return true;
            }
        }

        function validatePassword() {
            const passwordValue = password.value.trim();

            if (!passwordPattern.test(passwordValue)) {
                password.classList.add("border-danger");
                showError("passwordError", "Wrong password");
                return false;
            } else {
                password.classList.remove("border-danger");
                password.classList.add("border-success");
                hideError("passwordError");
                return true;
            }
        }

        function validateSignup(event) {
            event.preventDefault();

            let isValid = true;

            if (!validateEmail()) isValid = false;
            if (!validatePassword()) isValid = false;

            if (isValid) {
                console.log("Form submitted successfully!");
                document.querySelector("form").submit();
            }
        }

        loginButton.addEventListener("click", validateSignup);

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