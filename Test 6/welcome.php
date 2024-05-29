<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css" />
    <title>Welcome</title>
</head>
<body>
     <?php include 'sidebar.php'; ?>
     <div class="main-content">
    <?php
        echo "<p>Hello</p>\n";
        echo "<p>Date is: " . date('j-m-y, h:i:s') . "</p>";
    ?>
     </div>
</body>
</html>
