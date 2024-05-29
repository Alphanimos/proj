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
                            </tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["partnum"] . "</td>
                                <td>" . $row["proddesc"] . "</td>
                                <td class='qty-column'>" . $row["stocks"] . "</td>
                                <td>" . $row["price"] . "</td>
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
            </script>
            
        </div>
    </div>
</body>
</html>
