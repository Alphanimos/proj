<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "user"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product ID from the request
$productId = $_GET['id'];

// SQL to delete a record
$sql = "DELETE FROM prodb WHERE id=$productId";

if ($conn->query($sql) === TRUE) {
    echo "Product removed successfully";
} else {
    echo "Error removing product: " . $conn->error;
}

// Close connection
$conn->close();
?>
