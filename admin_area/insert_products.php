<?php
include("../includes/connect.php");

if(isset($_POST['insert_product'])) {

    //mysqli_real_escape_string() is a PHP function used to escape special characters in a string before inserting it into a MySQL database.
    $product_title = mysqli_real_escape_string($conn, $_POST["product_title"]);
    $product_description = mysqli_real_escape_string($conn, $_POST["product_description"]);
    $product_keywords = mysqli_real_escape_string($conn, $_POST["product_keywords"]);
    $product_category = mysqli_real_escape_string($conn, $_POST["product_category"]);
    $product_brands = mysqli_real_escape_string($conn, $_POST["product_brands"]);
    $product_price = mysqli_real_escape_string($conn, $_POST["product_price"]);
    $product_status = 'true';

    // Accessing images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // Temporary names
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Check if all fields are filled
    if(empty($product_title) || empty($product_description) || empty($product_keywords) || empty($product_category) || empty($product_brands) || empty($product_price) || empty($product_image1) || empty($product_image2) || empty($product_image3)) {
        echo "<script>alert('Please fill all the fields.');</script>";
        exit();
    }

    // Move uploaded images
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");

    // Insert query
    $insert_product = "INSERT INTO `products` (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status)
    VALUES ('$product_title', '$product_description', '$product_keywords', '$product_category', '$product_brands', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";

    $result_query = mysqli_query($conn, $insert_product);

    if($result_query) {
        echo "<script>alert('Product Inserted Successfully!'); window.location.href='index.php/?insert_products.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo.jpg">
    <title>Admin Dashboard</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data" class="container">
  <div class="mb-3 mt-5 m-auto w-50">
    <h4 class="text-success mb-3">Insert Product</h4>  
    <label class="form-label text-success">Product Title</label>
    <input type="text" class="form-control" name="product_title" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Description</label>
    <input type="text" class="form-control" name="product_description" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Keywords</label>
    <input type="text" class="form-control" name="product_keywords" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Select Product Category</label>
    <select class="form-select" name="product_category">
      <?php
        $select_query = "SELECT * FROM `categories`";
        $result_query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          echo "<option value='{$row['category_id']}'>{$row['category_title']}</option>";
        }
      ?>
    </select>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Select Product Brand</label>
    <select class="form-select" name="product_brands">
      <?php
        $select_query = "SELECT * FROM `brands`";
        $result_query = mysqli_query($conn, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
          echo "<option value='{$row['brand_id']}'>{$row['brand_title']}</option>";
        }
      ?>
    </select>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Image 1</label>
    <input type="file" class="form-control" name="product_image1" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Image 2</label>
    <input type="file" class="form-control" name="product_image2" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Image 3</label>
    <input type="file" class="form-control" name="product_image3" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <label class="form-label text-success">Product Price</label>
    <input type="text" class="form-control" name="product_price" required>
  </div>
  <div class="mb-3 mt-2 m-auto w-50">
    <button type="submit" class="btn btn-success mb-5" name="insert_product">Insert Product</button>
  </div>
</form>

</body>
</html>
