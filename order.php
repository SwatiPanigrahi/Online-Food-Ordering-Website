<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO food (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "User registered successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>