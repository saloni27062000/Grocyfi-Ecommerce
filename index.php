<?php 
include("./includes/connect.php");
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
          <a class="nav-link  text-light" aria-current="page" href="display_allproducts.php">Products</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  text-light" aria-current="page" href="#">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">MyBasket</a>
        </li>
        
       
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" name="search_data" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" name="search_data_product" type="submit" value="search">Search</button>
      </form>

    <!-- <div class="container">
      <img class="img-fluid" src="./images/login.png" style>
    </div> -->
    </div>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/grocerybanner3.jpg" class="d-block w-100 " alt="..." height="auto">
      <!-- <div class="carousel-caption d-none d-md-block d-flex justify-content-center">
        <h1 class="d-flex justify-content-center text-success">First slide label</h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="./images/grocerybanner5.jpg" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="./images/grocerybanner4.jpg" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div> -->
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container-fluid">

    <h1 class="text-success text-center mt-5">Grocyfi – Where Quality Meets Convenience.</h1>

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

<!-- include footer  -->
<?php
include("./includes/footer.php");
?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>