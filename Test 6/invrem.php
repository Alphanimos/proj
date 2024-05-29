<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invstyle.css" />
    <style>
        /* CSS style to center content in the QTY/CTN column */
        .inventory-table td.qty-column {
            text-align: center; /* Center-align content */
        }

        /* Style for the remove button */
        .inventory-table button {
        background-color: #ff4d4d; /* Red background */
        color: white; /* White text */
        border: none; /* No border */
        padding: 8px 12px; /* Padding */
        cursor: pointer; /* Cursor style */
        border-radius: 4px; /* Rounded corners */
    }

        .inventory-table button:hover {
        background-color: #e60000; /* Darker red background on hover */
    }
    </style>
    <title>Inventory</title>
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="title">
                    <h2>Inventory</h2>
                </div>
            </div>
        </div>
        <div class="main-content">

            <!-- Wooden box-like container for inventory -->
            <div class="inventory-container">
                <div class="inventory-title">Inventory</div>
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

                // Query to select data from your table
                $sql = "SELECT * FROM prodb"; // Replace 'your_table' with the name of your table
                $result = $conn->query($sql);

                // Check if any rows were returned
                if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table class='inventory-table'>
                            <tr>
                                <th>ID</th>
                                <th>PART NUMBER</th>
                                <th>PRODUCT DESCRIPTION</th>
                                <th class='qty-column'>QTY/CTN</th>
                                <th>PRICE</th>
                                <th>REMOVE</th>
                            </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["partnum"] . "</td>
                                <td>" . $row["proddesc"] . "</td>
                                <td class='qty-column'>" . $row["stocks"] . "</td>
                                <td>" . $row["price"] . "</td>
                                <td><button onclick='removeProduct(" . $row["id"] . ")'>Remove</button></td> <!-- Remove button -->
                            </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }

                // Close connection
                $conn->close();
                ?>
            </div>
            <!-- "Return to Top" button -->
            <button onclick="returnToTop()" class="return-to-top">Return to Top</button>
            <script>
                // Function to scroll to the top of the page
                function returnToTop() {
                    window.scrollTo({ top: 0, behavior: 'smooth' }); // Smooth scrolling to top
                }

                function removeProduct(productId) {
                    if (confirm("Are you sure you want to remove this product?")) {
                        // Send an AJAX request to the PHP script to delete the product
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                // Reload the page after successful deletion
                                location.reload();
                            }
                        };
                        xhttp.open("GET", "remprod.php?id=" + productId, true);
                        xhttp.send();
                    }
                }
            </script>
            
        </div>
    </div>
</body>
</html>
