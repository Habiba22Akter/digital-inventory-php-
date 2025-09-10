<?php 
include('config.php'); 
?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$barcode = $_POST['barcode']; 
$name = $_POST['name']; 
$price = $_POST['price']; 
$quantity = $_POST['quantity'];
$conn->query("INSERT INTO products (barcode, name, price, quantity) VALUES ('$barcode', '$name', '$price', '$quantity')");
header("Location: products.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <div class="container mt-5">
        <h2>Add New Product</h2>
        <form method="post">
<div class="mb-3">
    <label class="form-label">Barcode</label>
    <input type="text" name="barcode" class="form-control" required autofocus></div>
<div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" required></div>
<div class="mb-3">
    <label class="form-label">Price ($)</label>
    <input type="number" step="0.01" name="price" class="form-control" required></div>
<div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" required></div>
<button type="submit" class="btn btn-primary">Add Product</button>
</form>
</div>
</body>
</html>