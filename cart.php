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
    <title>Grocyfi - Cart Details</title>
    <link rel="icon" type="image/x-icon" href="./images/logo.jpg">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>



<!-- // include("navbar.php"); -->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
  <img class="img-fluid" src="./images/logo1.png" width="80px" height="50px">
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
          <a class="nav-link text-light" href="cart.php"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
          </svg>  
          <sup><?php cart_item_number();?></sup>
          </a>
        </li>
       

    </div>
  </div>
</nav>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-success">Welcome Saloni Sonawane!!</span>
  </div>
</nav>


<h1 class="text-success text-center mt-5">Your Basket of Freshness Awaits – Let’s Go!</h1>



<div class="container mt-5 table-responsive">
<table class="table table-bordered table-hover ">


<!-- table haeding -->
  <thead>
    <tr>
      <th scope="col">Product Title</th>
      <th scope="col">Product Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Remove</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
<!-- table heading -->


<tbody>

  <!-- table row  -->
    <tr class="text-center" > 
     <td>Apple</td>
      <td><img src="./images/apple.jpg"  class="img-fluid" width="100px" height="100px"></td>
      <td><input type="text" name="" id=""></td>
      <td>900</td>
      <td><input type="checkbox" ></td>
      <td>
        <p>Update Cart</p>
        <p>Remove Item</p>
      </td>
    </tr>


    <tr class="text-center" > 
     <td>Apple</td>
      <td><img src="./images/apple.jpg"  class="img-fluid" width="100px" height="100px"></td>
      <td><input type="text" name="" id=""></td>
      <td>900</td>
      <td><input type="checkbox" ></td>
      <td>
        <p>Update Cart</p>
        <p>Remove Item</p>
      </td>
    </tr>


  </tbody>
</table>

<div class="container">
    <h4 class="text-success">Subtotal :<strong> 700 /-</strong></h4> <br>
    <a href=""><button class="btn btn-success">Continue Shopping</button></a>
    <a href=""><button class="btn btn-outline-success mx-2">Checkout</button></a>

</div>
</div>





<!-- include("main_slider.php"); -->




<!-- include footer  -->


<?php
include("./includes/footer.php");
?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>