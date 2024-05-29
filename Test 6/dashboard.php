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

// Query to get the count of users from the users table
$sqlUser = "SELECT COUNT(*) AS user_count FROM users";
$resultUser = $conn->query($sqlUser);

$userCount = 0;

// Check if the query was successful and fetch the count
if ($resultUser->num_rows > 0) {
    $row = $resultUser->fetch_assoc();
    $userCount = $row["user_count"];
}

// Query to get the count of products from the prodb table
$sqlProduct = "SELECT COUNT(*) AS product_count FROM prodb";
$resultProduct = $conn->query($sqlProduct);

$productCount = 0;

// Check if the query was successful and fetch the count
if ($resultProduct->num_rows > 0) {
    $row = $resultProduct->fetch_assoc();
    $productCount = $row["product_count"];
}

// Query to select latest five entries from prodb table
$sqlNewStocks = "SELECT proddesc, price FROM prodb ORDER BY id DESC LIMIT 5";
$resultNewStocks = $conn->query($sqlNewStocks);

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Homepage</title>
</head>

<body>
    <?php include 'sidebar.php'; ?>
<!--Cards-->
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo $userCount; ?></h1>
                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./icons/users.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $productCount; ?></h1>
                        <h3>Total Products</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./icons/box.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>13</h1>
                        <h3>Views</h3>
                    </div>
                    <div class="icon-case">
                        <img src="./icons/views.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content2">
                <!--table-->
                <div class="recent-sales">
                    <div class="title">
                        <h2>Recent Sales</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>Jose Izaguirre</td>
                            <td>Steel Nails Box</td>
                            <td>₱250</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Renie Mar M. Lopez</td>
                            <td>Wood Screws (Pack)</td>
                            <td>₱399</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Arnie de Guzman</td>
                            <td>Rubber Mallet</td>
                            <td>₱649.50</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Barney Hollinger</td>
                            <td>Adjustable Wrench (10-Inch)</td>
                            <td>₱749.50</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Patricia Quimpo</td>
                            <td>Steel Tape Measure</td>
                            <td>₱870.50</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>Daniel Elias</td>
                            <td>Claw Hammer</td>
                            <td>₱850.50</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-stocks">
            <div class="title">
                <h2>New Stocks</h2>
                <a href="inv.php" class="btn">View All</a>
            </div>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Option</th>
                </tr>
                <?php
                // Check if any rows were returned
                if ($resultNewStocks->num_rows > 0) {
                    // Output data of each row
                    while ($row = $resultNewStocks->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["proddesc"] . "</td>
                                <td>" . $row["price"] . "</td>
                                <td><a href='#' class='btn'>View</a></td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No new stocks available</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php
// Close connection
$conn->close();
?>