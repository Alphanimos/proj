<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <title>Sidebar</title>
</head>

<body>
<div class="side-menu">
        <div class="company-name">
            <h1><img src="./icons/logo.png" alt="">&nbsp; </h1>
        </div>
        <ul>
            <li id="dashboard"><img src="./icons/dashboard.png" alt="">&nbsp; <span>Dashboard</span></li>
            <li class="list-item">
                <img src="./icons/products.png" alt="">&nbsp; <span>Inventory</span>
                <ul class="more">
                        <li id="view"><img src="./icons/view.png" alt="">&nbsp;View</li>
                        <li id="manage"><img src="./icons/manage.png" alt="">&nbsp;Add</li>
                        <li id="remove"><img src="./icons/remove.png" alt="">&nbsp;Remove</li>
                </ul>
            </li>
            <li id="about"><img src="./icons/about.png" alt="">&nbsp; <span>About</span></li>
            <!--<li><img src="./icons/contact.png" alt="">&nbsp; <span>Contact</span></li>-->
            <li><a href="logout.php" style="color: white;"><img src="./icons/logout.png" alt="">&nbsp; <span>Logout</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
            <div class="title">
                    <h2>DaBest Inventory System</h2>
                </div>
                <div class="user-greeting">
                    <?php
                    session_start();
                    include("loginconnect.php");

                    if(isset($_SESSION['username'])){
                        $username=$_SESSION['username'];
                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.username='$username'");
                        while($row=mysqli_fetch_array($query)){
                            echo "<p>Hello, ".$row['username']."</p>";
                        }
                    }
                    ?>
                    <div class="img-case">
                        <img src="./icons/user.png" alt="">
                    </div>
                </div>
                <div class="date-time">
                    <p id="date-time"></p>
                </div>
            </div>
        </div>
    <!--Logout-->
    <script>
        document.getElementById("about").addEventListener("click", function() {
            window.location.href = "about.php";
        })

        document.getElementById("view").addEventListener("click", function() {
            window.location.href = "inv.php";
        })

        document.getElementById("manage").addEventListener("click", function() {
            window.location.href = "invma.php";
        })

        document.getElementById("remove").addEventListener("click", function() {
            window.location.href = "invrem.php";
        })

        document.getElementById("dashboard").addEventListener("click", function() {
            window.location.href = "dashboard.php";
        })

        // Function to update date and time
    function updateDateTime() {
        var dateTimeElement = document.getElementById("date-time");
        var dateTime = new Date().toLocaleString();
        dateTimeElement.innerHTML = dateTime;
    }

    // Update date and time every second
    setInterval(updateDateTime, 1000);
    </script>
</body>
</html>