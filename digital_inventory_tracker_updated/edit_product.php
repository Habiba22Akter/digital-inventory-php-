<?php 
include('config.php'); 
?>

<?php 
if (isset($_GET['id'])) 
{ 
    $id = $_GET['id']; 
    $result = $conn->query("SELECT * FROM products WHERE id = $id"); 
    $product = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$barcode = $_POST['barcode']; 
$name = $_POST['name']; 
$price = $_POST['price']; 
$quantity = $_POST['quantity'];
$conn->query("UPDATE products SET barcode='$barcode', name='$name', price='$price', quantity='$quantity' WHERE id=$id");
header("Location: products.php"); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Edit Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Product</h2>
        <form method="post">
<div class="mb-3">
    <label class="form-label">Barcode</label>
    <input type="text" name="barcode" class="form-control" value="<?php echo $product['barcode']; ?>" required>
</div>
<div class="mb-3">
    <label class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
</div>
<div class="mb-3">
    <label class="form-label">Price ($)</label>
    <input type="number" step="0.01" name="price" class="form-control" value="<?php echo $product['price']; ?>" required>
</div>
<div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" value="<?php echo $product['quantity']; ?>" required>
</div>
<button type="submit" class="btn btn-primary">Update Product</button>
</form>
     </div>
</body>
</html>