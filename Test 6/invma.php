<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invstyle.css" />
    <title>Inventory</title>
    <style>
        .add-product-btn {
            border: none;
            background-color: green;
            color: #fff;
            font-size: 20px;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 30px; /* Adjust as needed */
            margin-left: 50px;
        }

        .add-product-btn:hover {
            background-color: #0a6e26; /* Darker green on hover */
        }

        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        /* Style for the modal content */
        .modal-content {
        background-color: #f3d9b2; /* Wooden color */
        margin: 10% auto;
        padding: 20px;
        border: 2px solid #8b4513; /* Dark brown border */
        border-radius: 10px;
        width: 80%;
        max-width: 400px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }

        .modal-content h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        }

        .modal-content label {
        display: block;
        margin-bottom: 5px;
        }

        .modal-content input[type="text"],
        .modal-content input[type="number"] {
        width: calc(100% - 20px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #8b4513; /* Dark brown border */
        border-radius: 5px;
        }

        .modal-content button[type="submit"] {
        font-size: 16px;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
        }

    
    </style>
</head>
<body>
    <?php include 'inv.php'; ?>

    <!-- Button to open the modal -->
    <button onclick="openModal()" class="add-product-btn">Add Product</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Add New Product</h2>
            <form action="addprod.php" method="post">
                <label for="partnum">Part Number:</label>
                <input type="text" id="partnum" name="partnum" required><br><br>
                <label for="proddesc">Product Description:</label>
                <input type="text" id="proddesc" name="proddesc" required><br><br>
                <label for="stocks">Stocks:</label>
                <input type="number" id="stocks" name="stocks" required><br><br>
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required><br><br>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>

    <?php
    // Check if an error parameter is present in the URL
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === '1') {
            echo '<div class="error-message">Error occurred while adding the product. Please try again.</div>';
        }
    }

    // Check if a success parameter is present in the URL
    if (isset($_GET['added'])) {
        echo '<div class="success-message">Product added successfully.</div>';
    }
    ?>

    <!-- Script for opening and closing the modal -->
    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById('myModal').style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }
    </script>
</body>
</html>
