<?php
$host = "localhost";
$user = "root";
$password = "Swati@2312"; // default in XAMPP/WAMP
$db = "food_order";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>