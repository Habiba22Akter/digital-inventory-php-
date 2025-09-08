<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Digital Inventory and Sales Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inventory & Sales Tracker</a>
  </div>
</nav>
<div class="container mt-4">
    <div class="row g-4">
        <div class="col-md-4"><div class="card text-center"><div class="card-body">
            <h5 class="card-title">Products</h5>
            <a href="products.php" class="btn btn-primary">Manage Products</a>
        </div></div></div>
        <div class="col-md-4"><div class="card text-center"><div class="card-body">
            <h5 class="card-title">Sales</h5>
            <a href="sales.php" class="btn btn-success">Record Sales</a>
        </div></div></div>
        <div class="col-md-4"><div class="card text-center"><div class="card-body">
            <h5 class="card-title">Reports</h5>
            <a href="reports.php" class="btn btn-warning">View Reports</a>
        </div></div></div>
    </div>
</div>
</body>
</html>