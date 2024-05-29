<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "user";

// Attempt to connect to MySQL database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>
