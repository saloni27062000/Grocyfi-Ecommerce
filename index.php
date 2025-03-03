<?php 
include("./connect.php");
include("./Functions/common_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Grocyfi - Home</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success ">
  <div class="container-fluid">
    <a class="navbar-brand text-light fw-bolder" href="#">GROCYFI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">MyBasket</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

    <!-- <div class="container">
      <img class="img-fluid" src="./images/login.png" style>
    </div> -->
    </div>
  </div>
</nav>


<div class="container-fluid">
    <h2 class="text-success text-center mt-5">Choose Fresh Groceries for a Healthier, Happier Life.</h2>

    <div class="row mt-5">

        <div class="col-md-10 ">
          <!-- products -->
            <div class="row ">
            <!-- fetching products on home page -->
            <?php
           getproducts();
           

            ?>

            <?php
            get_unique_categories();
            get_unique_brands()
            ?>
                
                </div>
                </div>
                
        <div class="col-lg-2  p-0 rounded-3">
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Delivary Brands</li>
          <?php 
          getbrands();
          ?>
    
        </ul>
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Categories</li>
          <?php 
         getcategories();
          ?>
        </ul>
        </div>
    </div>
</div>

<footer>
  <div class="conatiner-fluid bg-success mt-5 p-4 text-center text-light">
  © Copyright Grocyfi All Rights Reserved Designed by Saloni Sonawane  </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>