<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
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