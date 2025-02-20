<?php
include("../connect.php");
if(isset($_POST['insert_product'])){

    $product_title=$_POST["product_title"];
    $product_description = $_POST["product_description"];
    $product_keywords=$_POST["product_keywords"];
    $product_category =$_POST["product_category"];
    $product_brands =$_POST["product_brands"];
    $product_price=$_POST["product_price"];
    $product_status='true';


    //accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    //accessing images temporary names
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    if($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_brands == '' or  $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == ''){
        echo "<script>alert('Please fill all the available fields.')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        $insert_product = "insert into `products` (product_title , product_description , product_keywords ,category_id ,brand_id ,product_image1 , product_image2, product_image3 , product_price , date , status)
        values ('$product_title', '$product_description' ,'$product_keywords' ,'$product_category', '$product_brands' ,'$product_price','$product_image1' , '$product_image2' , '$product_image3' ,  NOW() , '$product_status')";
        
        $result_query = mysqli_query($conn, $insert_product);

        if($result_query){
            echo "<script>alert('Successfully Inserted the Product')</script>";
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">

</head>
<body>
<form action="" method="post" enctype="multipart/form-data" class="container">
  <div class="mb-3 mt-5 m-auto w-50">
  <h4 class="text-success mb-3">Insert Product</h4>  
    <label for="product_title" class="form-label text-success">Product Title</label>
    <input type="text" class="form-control"  name="product_title"placeholder="Enter Product Title" autocomplete="off" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label for="product_description" class="form-label text-success">Product Description</label>
    <input type="text" class="form-control" name="product_description" placeholder="Enter Product Description" autocomplete="off" required>
    </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label for="product_keywords" class="form-label text-success">Product Keywords</label>
    <input type="text" class="form-control" name="product_keywords" id="product_keywords" placeholder="Enter Product Keywords" autocomplete="off" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
  <label for="product_category" class="form-label text-success">Select Product Category</label>
  <select class="form-select product_category" name="product_category">
  <?php
    $select_query = "select * from `categories`";
    $result_query = mysqli_query($conn, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $category_title = $row['category_title'];
        $category_id = $row['category_id'];
        echo "    <option value='$category_id'>$category_title</option>";
    }
    ?>
  </select>
</div>
<div class="mb-3 mt-2 m-auto w-50">
  <label for="product_brands" class="form-label text-success">Select Product Brand</label>
  <select class="form-select product_brands" name="product_brands">
  <?php
    $select_query = "select * from `brands`";  //retrieves all records from the categories table
    $result_query = mysqli_query($conn, $select_query); // runs the query on the database
    while ($row = mysqli_fetch_assoc($result_query)) {  //mysqli_fetch_assoc() is a function in PHP that fetches a single row from a MySQL result set as an associative array.
        $brand_title = $row['brand_title'];                       //fetches one row at a time from the result set
        $brand_id = $row['brand_id'];
        echo "    <option value='$brand_id'>$brand_title</option>";
    }
    ?>
  </select>
</div>
<div class="mb-3 mt-2 m-auto w-50">
<label for="product_image1" class="form-label text-success">Product Image 1</label>
  <input type="file" class="form-control" name="product_image1" class="product_image1" required>
</div>
<div class="mb-3 mt-2 m-auto w-50">
<label for="product_image2" class="form-label text-success">Product Image 2</label>
  <input type="file" class="form-control" name="product_image2" class="product_image2" required>
</div>
<div class="mb-3 mt-2 m-auto w-50">
<label for="product_image3" class="form-label text-success">Product Image 3</label>
  <input type="file" class="form-control" name="product_image3" class="product_image3" required>
</div>
<div class="mb-3 mt-2 m-auto w-50">
    <label for="product_price" class="form-label text-success">Product Price</label>
    <input type="text" class="form-control product_price" name="product_price" placeholder="Enter Product Price" autocomplete="off" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
  <button type="submit" class="btn btn-success mb-5" name="insert_product" value="Insert Products">Insert Product</button>
  </div>
</form>

</body>
</html>