<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <style>
    @font-face {
      font-family: "Poppins-Regular";
      src: url("../fonts/poppins/Poppins-Regular.ttf");
    }

    @font-face {
      font-family: "Poppins-SemiBold";
      src: url("../fonts/poppins/Poppins-SemiBold.ttf");
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins-Regular";
      color: #333;
      font-size: 13px;
      margin: 0;
    }

    input,
    textarea,
    select,
    button {
      font-family: "Poppins-Regular";
      color: #333;
      font-size: 13px;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul {
      margin: 0;
    }

    img {
      max-width: 100%;
    }

    ul {
      padding-left: 0;
      margin-bottom: 0;
    }

    a:hover {
      text-decoration: none;
    }

    :focus {
      outline: none;
    }

    .wrapper {
      min-height: 100vh;
      background-size: cover;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
    }

    .inner {
      padding: 20px;
      background: #fff;
      max-width: 850px;
      margin: auto;
      display: flex;
    }

    .inner .image-holder {
      width: 50%;
    }

    .inner form {
      width: 50%;
      padding-top: 36px;
      padding-left: 45px;
      padding-right: 45px;
    }

    .inner h3 {
      text-transform: uppercase;
      font-size: 25px;
      font-family: "Poppins-SemiBold";
      text-align: center;
      margin-bottom: 28px;
    }

    .form-group {
      display: flex;
    }

    .form-group input {
      width: 50%;
    }

    .form-group input:first-child {
      margin-right: 25px;
    }

    .form-wrapper {
      position: relative;
    }

    .form-wrapper i {
      position: absolute;
      bottom: 9px;
      right: 0;
    }

    .form-control {
      border: 1px solid #333;
      border-top: none;
      border-right: none;
      border-left: none;
      display: block;
      width: 100%;
      height: 30px;
      padding: 0;
      margin-bottom: 25px;
    }

    .form-control::-webkit-input-placeholder {
      font-size: 13px;
      color: #333;
      font-family: "Poppins-Regular";
    }

    .form-control::-moz-placeholder {
      font-size: 13px;
      color: #333;
      font-family: "Poppins-Regular";
    }

    .form-control:-ms-input-placeholder {
      font-size: 13px;
      color: #333;
      font-family: "Poppins-Regular";
    }

    .form-control:-moz-placeholder {
      font-size: 13px;
      color: #333;
      font-family: "Poppins-Regular";
    }

    select option[value=""][disabled] {
      display: none;
    }

    button {
      border: none;
      width: 164px;
      height: 51px;
      margin: auto;
      margin-top: 40px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0;
      background: #333;
      font-size: 15px;
      color: #fff;
      vertical-align: middle;
      -webkit-transform: perspective(1px) translateZ(0);
      transform: perspective(1px) translateZ(0);
      -webkit-transition-duration: 0.3s;
      transition-duration: 0.3s;
    }

    button i {
      margin-left: 10px;
      -webkit-transform: translateZ(0);
      transform: translateZ(0);
    }

    button:hover i,
    button:focus i,
    button:active i {
      -webkit-animation-name: hvr-icon-wobble-horizontal;
      animation-name: hvr-icon-wobble-horizontal;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-timing-function: ease-in-out;
      animation-timing-function: ease-in-out;
      -webkit-animation-iteration-count: 1;
      animation-iteration-count: 1;
    }

    @-webkit-keyframes hvr-icon-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px);
      }

      33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
      }

      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
      }

      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
      }

      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    @keyframes hvr-icon-wobble-horizontal {
      16.65% {
        -webkit-transform: translateX(6px);
        transform: translateX(6px);
      }

      33.3% {
        -webkit-transform: translateX(-5px);
        transform: translateX(-5px);
      }

      49.95% {
        -webkit-transform: translateX(4px);
        transform: translateX(4px);
      }

      66.6% {
        -webkit-transform: translateX(-2px);
        transform: translateX(-2px);
      }

      83.25% {
        -webkit-transform: translateX(1px);
        transform: translateX(1px);
      }

      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
      }
    }

    @media (max-width: 1199px) {
      .wrapper {
        background-position: right center;
      }
    }

    @media (max-width: 991px) {
      .inner form {
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
      }
    }

    @media (max-width: 767px) {
      .inner {
        display: block;
      }

      .inner .image-holder {
        width: 100%;
      }

      .inner form {
        width: 100%;
        padding: 40px 0 30px;
      }

      button {
        margin-top: 60px;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper" style="background-image: url('./pics/pexels-olly-3755706.jpg'); background-size:cover;">
    <div class="inner" style="height: 500px; width: 65%;">
      <div class="image-holder">
        <img src="./pics/pexels-fatih-guney-337108406-16159027.jpg" alt="" style="height: 460px;">
      </div>
      <form action="./php/login.php" method="POST">
        <h3>Registration Form</h3>
        <div class="form-group">
          <input type="text" id="firstName" placeholder="First Name" class="form-control">
          <input type="text" id="lastName" placeholder="Last Name" class="form-control">
        </div>
        <div class="form-wrapper">
          <input type="text" id="email" placeholder="Email Address" class="form-control">
          <i class="zmdi zmdi-email"></i>
          <span id="emailError" style="display: none; color: red;">
            <?php
            if (empty($email)) {
              echo "Invalid Email Address";
            }
            ?>
          </span>
        </div>
        <div class="form-wrapper">
          <input type="password" id="password" placeholder="Password" class="form-control">
          <span id="passwordError" style="display: none; color: red;">
            <?php
            if (empty($password)) {
              echo "Invalid Email Address";
            }
            ?>
          </span>
        </div>
        <div class="form-wrapper">
          <input type="confirmPassword" id="conPassword" placeholder="Confirm Password" class="form-control">
          <span id="conPasswordError" style="display: none; color: red;">
            <?php
            if (empty($confirmPassword) || $password!== $confirmPassword) {
              echo "Passwords do not match";
            }
            ?>
          </span>
        </div>
        <button type="button" style="width: 100%;" id="registerButton">Register <i class="zmdi zmdi-arrow-right"></i></button>
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

      if (conPassword.value.trim() !== password.value.trim()) {
        conPassword.classList.add("border-danger");
        showError("conPasswordError");
      } else {
        conPassword.classList.remove("border-danger");
        conPassword.classList.add("border-success");
        hideError("conPasswordError");
      }
    }

    function validateSignup() {
      if (firstName.value.trim() === "") {
        firstName.classList.add("border", "border-danger", "border-2");
      }
      if (lastName.value.trim() === "") {
        lastName.classList.add("border", "border-danger", "border-2");
      }
      if (email.value.trim() === "") {
        email.classList.add("border", "border-danger", "border-2");
      }
      if (password.value.trim() === "") {
        password.classList.add("border", "border-danger", "border-2");
      }
      if (conPassword.value.trim() === "") {
        conPassword.classList.add("border", "border-danger", "border-2");
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