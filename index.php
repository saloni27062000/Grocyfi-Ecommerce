<?php 
include("./connect.php");
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
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container-fluid">
    <h2 class="text-success text-center mt-5">Choose Fresh Groceries for a Healthier, Happier Life.</h2>

    <div class="row mt-5">

        <div class="col-md-10 ">
          <!-- products -->
            <div class="row ">
            <!-- fetching products  -->
            <?php
            $select_query = "select * from `products` order by rand()";
            $result_query = mysqli_query($conn, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {

              $product_id = $row["product_id"];
              $product_title = $row["product_title"];
              $product_description = $row["product_description"];
              $product_image1 = $row["product_image1"];
              $product_price = $row["product_price"];
              $category_id = $row["category_id"];
              $brand_id = $row["brand_id"];
              echo "
              <div class='col-md-4 d-flex justify-content-center p-2'>
                <div class='card' style='width: 18rem;'>
                 <img src='.../admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
                    <div class='card-body'>
                       <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                         <a href='' class='btn btn-success'>Add to cart</a> <span class='float-end'><a href='' class='btn btn-outline-success'>View More</a></span>
                         
                     </div>
                    </div>
                </div>
              ";

            }

            ?>
                
                </div>
                </div>
                
        <div class="col-lg-2  p-0 rounded-3">
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Delivary Brands</li>
          <?php 
          $select_brands="select * from `brands`";
          $result_brands=mysqli_query($conn, $select_brands);
          while($row_data=mysqli_fetch_assoc($result_brands)) {

            $brand_title=$row_data['brand_title'];
            $brand_id=$row_data['brand_id'];
            echo "<li class='list-group-item nav-item'><a href='index.php?brand=$brand_id' class ='nav-link text-success'>$brand_title</a></li>";

          }
          ?>
    
        </ul>
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Categories</li>
          <?php 
          $select_category="select * from `categories`";
          $result_category=mysqli_query($conn, $select_category);
          while($row_data=mysqli_fetch_assoc($result_category)) {

            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "<li class='list-group-item nav-item'><a href='index.php?category=$category_id' class ='nav-link text-success'>$category_title</a></li>";

          }
          ?>
        </ul>
        </div>
    </div>
</div>

<footer>
  <div class="conatiner-fluid bg-success mt-5 p-4 text-center text-light">
    All rights reserved by 
  </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>