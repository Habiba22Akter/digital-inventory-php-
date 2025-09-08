<?php 
include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <div class="container mt-5">
        <h2>Product List</h2>
<a href="add_product.php" class="btn btn-primary mb-3">Add New Product</a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
<th>Barcode</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Action</th>
      </tr>
   </thead>
<tbody>
<?php 
$result = $conn->query("SELECT * FROM products");
while($row = $result->fetch_assoc()) 
{
echo "<tr>
<td>{$row['barcode']}</td>
<td>{$row['name']}</td>
<td>{$row['price']}</td>
<td>{$row['quantity']}</td>
<td><a href='edit_product.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a> 
<a href='delete_product.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a></td>
</tr>"; 
} 
?>
</tbody>
</table>
</div>
</body>
</html>