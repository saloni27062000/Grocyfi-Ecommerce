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
    <title>Grocyfi - Products</title>
    <link rel="icon" type="image/x-icon" href="images/logo1.png">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<?php
include("navbar.php");
?>


<div class="container-fluid">
    <h2 class="text-success text-center mt-5">Premium Quality, Affordable Prices.</h2>

    <div class="row mt-5">

        <div class="col-md-10 ">
          <!-- products -->
            <div class="row ">
            <!-- fetching products on home page -->
            <?php
            get_all_products();
            search_product();
            get_unique_categories();
            get_unique_brands()
            ?>
                
                </div>
                </div>
                
        <div class="col-lg-2  p-0 rounded-3 ">
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Delivary Brands</li>
          <?php 
          getbrands_products();
          ?>
    
        </ul>
        <ul class="list-group">
          <li class="list-group-item active bg-success" aria-current="true">Categories</li>
          <?php 
         getcategories_products();
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