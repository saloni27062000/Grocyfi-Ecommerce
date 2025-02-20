<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">

</head>
<body>

<nav class="navbar navbar-light bg-success">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-light fw-bolder">GROCYFI - Admin Dashboard</span>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
  <div class="container-fluid">
    <a class="navbar-brand text-success fw-bolder" href="#">Manage Details</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item text-success">
          <a class="nav-link active " aria-current="page" href="index.php?insert_products">Insert Product</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link " href="#">View Product</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" aria-current="page" href="index.php?insert_category">Insert Category</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" href="#">View Category</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" aria-current="page" href="index.php?insert_brand">Insert Brand</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" href="#">View Brand</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" aria-current="page" href="#">All Orders</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" href="#">All Payments</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" aria-current="page" href="#">List Users</a>
        </li>
        <li class="nav-item text-success">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="conatiner">
<?php
   if(isset($_GET['insert_products'])){
    include('insert_products.php');
  }
  ?>
  <?php
  if(isset($_GET['insert_category'])){
    include('insert_categories.php');
  }
  ?>
  <?php
   if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
  }
  ?>
  
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>