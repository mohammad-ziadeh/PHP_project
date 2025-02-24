<?php
include('./php/login_signUp.php');
$alreadyEmail = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);




    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login Success";
        } else {
            echo "Wrong Password";
        }
    } else {
        echo "Email not Found";
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
                <h3>Sign in Form</h3>
                <div class="form-wrapper">
                    <input style=" padding: 10px; margin: 10px;" type="email" id="email" placeholder="Email Address"
                        class="form-control">
                    <i class="zmdi zmdi-email"></i>
                    <span id="emailError" style="display: none; color: red;  padding: 10px; margin: 10px;"><?php
                                                                                                            if (empty($email)) {
                                                                                                                echo "Invalid Email Address";
                                                                                                            }
                                                                                                            ?>
                    </span>
                </div>
                <div class="form-wrapper">
                    <input style=" padding: 10px; margin: 10px;" type="password" id="password" placeholder="Password"
                        class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                    <span id="passwordError" style="display: none; color: red;  padding: 10px; margin: 10px;"><?php
                                                                                                                if (empty($password)) {
                                                                                                                    echo "Invalid Password";
                                                                                                                }
                                                                                                                ?></span>
                </div>
                <button type="button" style="width: 100%;" id="registerButton">Register <i
                        class="zmdi zmdi-arrow-right"></i></button>
                <br>
                <p>Don't <a href="./sign_up.php">have an account</a>?</p>
            </form>
        </div>
    </div>
    <script>
        const email = document.getElementById("email");
        const password = document.getElementById("password");
        const registerButton = document.getElementById("registerButton");

        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const passwordPattern = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        function rgx() {
            if (!emailPattern.test(email.value.trim())) {
                email.classList.add("border-danger");
                showError("emailError");
            } else {
                email.classList.remove("border-danger");
                email.classList.add("border-success");
                hideError("emailError");
            }
        }

        function validatePassword() {
            if (!passwordPattern.test(password.value.trim())) {
                password.classList.add("border-danger");
                showError("passwordError");
            } else {
                password.classList.remove("border-danger");
                password.classList.add("border-success");
                hideError("passwordError");
            }

        }

        function validateSignup() {
            if (email.value.trim() === "") {
                email.classList.add("border", "border-danger", "border-2");
            }
            if (password.value.trim() === "") {
                password.classList.add("border", "border-danger", "border-2");
            }
        }

        registerButton.addEventListener("click", () => {
            rgx();
            validateSignup();
            validatePassword();
        });

        function showError(spanId) {
            document.getElementById(spanId).style.display = "block";
        }

        function hideError(spanId) {
            document.getElementById(spanId).style.display = "none";
        }
    </script>
</body>

</html>