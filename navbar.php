<!-- As a heading -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1 text-success">Welcome Saloni Sonawane!!</span>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
  <img class="img-fluid" src="./images/logo1.png" width="50px" height="50px">
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
        <li class="nav-item">
          <a class="nav-link  text-light " aria-current="page" href="#">Cart Subtotal : ₹ <?php total_cart_price();?></a>
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

