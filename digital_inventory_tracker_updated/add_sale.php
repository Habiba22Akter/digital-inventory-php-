<?php 
include('config.php'); 
?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
$barcode = $_POST['barcode']; 
$quantity = $_POST['quantity'];
$result = $conn->query("SELECT price FROM products WHERE barcode = '$barcode'");
if ($result->num_rows > 0) 
{
     $product = $result->fetch_assoc();
     $total_price = $product['price'] * $quantity;
     $conn->query("INSERT INTO sales (product_barcode, quantity, total_price) VALUES ('$barcode', '$quantity', '$total_price')");
     $conn->query("UPDATE products SET quantity = quantity - $quantity WHERE barcode = '$barcode'");
header("Location: sales.php"); 
} 
else { 
    echo "Product not found.";
     } 
} 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Record Sale</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Record New Sale</h2>
        <form method="post">
<div class="mb-3">
    <label class="form-label">Product Barcode</label>
    <input type="text" name="barcode" class="form-control" required autofocus>
</div>
<div class="mb-3">
    <label class="form-label">Quantity</label>
    <input type="number" name="quantity" class="form-control" required>
</div>
<button type="submit" class="btn btn-success">Record Sale</button>
</form>
</div>
</body>
</html>