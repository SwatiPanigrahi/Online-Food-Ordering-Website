<?php
include 'connect.php'; // contains $conn


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_name = $_POST['customer_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO orders (customer_name, address, contact, quantity) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // s = string, s = string, s = string, i = integer
    $stmt->bind_param("sssi", $customer_name, $address, $contact, $quantity);
    if ($stmt->execute()) {
        echo "<script>
                let newWindow = window.open('', '_blank', 'width=400,height=100');
                newWindow.document.write('<h2 style=\"font-family:sans-serif; color:green;\">✅ Order placed successfully!</h2>');
              </script>";
    } else {
        echo "<script>alert('❌ Error placing order: " . $stmt->error . "');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>




