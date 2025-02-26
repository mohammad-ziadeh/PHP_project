<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'php_project';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

try{
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $error){
    echo 'Connection failed: '. $error->getMessage();
}
