<?php
$servername = "php24-php:latest";
$username = "root";
$password = "password";
$dbname = "app1";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>