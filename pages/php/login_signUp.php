<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
}
?>