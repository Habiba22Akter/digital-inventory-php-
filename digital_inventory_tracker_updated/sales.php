<?php 
include('config.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales - Digital Inventory and Sales Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Sales Records</h2>
    <a href="add_sale.php" class="btn btn-success mb-3">Record New Sale</a>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Sale ID</th>
                <th>Product Barcode</th>
                <th>Quantity Sold</th>
                <th>Total Price ($)</th>
                <th>Sale Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sales = $conn->query("SELECT * FROM sales ORDER BY sale_date DESC");
            while($row = $sales->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['product_barcode']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['total_price']}</td>
                        <td>{$row['sale_date']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>