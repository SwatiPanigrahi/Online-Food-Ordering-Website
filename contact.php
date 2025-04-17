<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO message (username, email, message) VALUES ('$username', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Message sent successfully!";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>