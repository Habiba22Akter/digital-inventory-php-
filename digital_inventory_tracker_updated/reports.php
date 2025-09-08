<?php 
include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reports</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Inventory Report</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
<th>Barcode</th>
<th>Name</th>
<th>Stock</th>
</tr>
</thead>

    <tbody>
<?php 
$products = $conn->query("SELECT * FROM products");
while($row = $products->fetch_assoc()) {
echo "<tr>
<td>{$row['barcode']}</td>
<td>{$row['name']}</td>
<td>{$row['quantity']}</td>
</tr>";
 } 
 ?>
     </tbody>
</table>

<h2 class="mt-5">Sales Report</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
<th>Date</th>
<th>Product Barcode</th>
<th>Quantity Sold</th>
<th>Total Amount ($)</th>
</tr>
</thead>

   <tbody>
<?php 
$sales = $conn->query("SELECT * FROM sales");
while($row = $sales->fetch_assoc()) {
echo "<tr>
<td>{$row['sale_date']}</td>
<td>{$row['product_barcode']}</td>
<td>{$row['quantity']}</td>
<td>{$row['total_price']}</td>
</tr>"; 
} 
?>
     </tbody>
</table>

</div>

</body>
</html>