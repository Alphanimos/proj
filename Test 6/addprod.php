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

// Get form data
$partnum = $_POST['partnum'];
$proddesc = $_POST['proddesc'];
$stocks = $_POST['stocks'];
$price = $_POST['price'];

// Prepare and execute SQL statement to insert data
$sql = "INSERT INTO prodb (partnum, proddesc, stocks, price) VALUES ('$partnum', '$proddesc', '$stocks', '$price')";

if ($conn->query($sql) === TRUE) {
    // Close connection
    $conn->close();
    
    // Redirect user to invma.php with success message
    header("Location: invma.php?added=1");
    exit();
} else {
    // Redirect user to invma.php with error message
    header("Location: invma.php?error=1");
    exit();
}
?>