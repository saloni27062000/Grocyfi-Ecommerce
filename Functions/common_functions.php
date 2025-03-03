<?php

include(__DIR__ . "/../connect.php"); 


function getproducts(){

            global $conn;
            if(!isset($_GET['category'])){
              if(!isset($_GET['brand'])){

            $select_query = "select * from `products` order by rand()";
            $result_query = mysqli_query($conn, $select_query);
            while ($row = mysqli_fetch_assoc($result_query)) {

              $product_id = $row["product_id"];
              $product_title = $row["product_title"];
              $product_description = $row["product_description"];
              $product_image2 = $row["product_image2"];
              $product_price = $row["product_price"];
              $category_id = $row["category_id"];
              $brand_id = $row["brand_id"];
              echo "
              <div class='col-md-4 d-flex justify-content-center p-2'>
                <div class='card' style='width:18rem;'>
                 <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title' style='width:auto; height:250px;'>
                    <div class='card-body'>
                       <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <h5 class='card-text text-success'>Price : $product_price/-</h5><br>
                         <a href='' class='btn btn-success'>Add to cart</a> <span class='float-end'><a href='' class='btn btn-outline-success'>View More</a></span>
                         
                     </div>
                    </div>
                </div>
              ";

            }
        }
      }
    }


        //get unique categories


        function get_unique_categories(){

          if(isset($_GET['category'])){
          global $conn;
          $category_id = $_GET['category']; //using get method get the clicked catgeory products

          
          $select_query = "select * from `products` where category_id =$category_id";  //select products where category id is ...
          $result_query = mysqli_query($conn, $select_query);
          $num_of_rows=mysqli_num_rows($result_query);
          if($num_of_rows== 0){
            echo "<h1 class= 'p-5 text-center text-danger'>No Stock is Available for this category!</h1>";  //if no data is present display no stock or else while() will be displayed
          }
          while ($row = mysqli_fetch_assoc($result_query)) {

            $product_id = $row["product_id"];
            $product_title = $row["product_title"];
            $product_description = $row["product_description"];
            $product_image2 = $row["product_image2"];
            $product_price = $row["product_price"];
            $category_id = $row["category_id"];
            $brand_id = $row["brand_id"];
            echo "
            <div class='col-md-4 d-flex justify-content-center p-2'>
              <div class='card' style='width:18rem;'>
               <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title' style='width:auto; height:250px;'>
                  <div class='card-body'>
                     <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <h5 class='card-text text-success'>Price : $product_price/-</h5><br>
                       <a href='' class='btn btn-success'>Add to cart</a> <span class='float-end'><a href='' class='btn btn-outline-success'>View More</a></span>
                       
                   </div>
                  </div>
              </div>
            ";

          }
      }    
    }    




 //get unique brands


 function get_unique_brands(){

  if(isset($_GET['brand'])){
  global $conn;
  $brand_id = $_GET['brand']; //using get method get the clicked brand products
  
  $select_query = "select * from `products` where brand_id =$brand_id";  //select products where brand id is ...
  $result_query = mysqli_query($conn, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows== 0){
    echo "<h1 class= 'p-5 text-center text-danger'>No Stock is Available for this brand!</h1>'";  //if no data is present display no stock or else while() will be displayed
  }
  while ($row = mysqli_fetch_assoc($result_query)) {

    $product_id = $row["product_id"];
    $product_title = $row["product_title"];
    $product_description = $row["product_description"];
    $product_image2 = $row["product_image2"];
    $product_price = $row["product_price"];
    $category_id = $row["category_id"];
    $brand_id = $row["brand_id"];
    echo "
    <div class='col-md-4 d-flex justify-content-center p-2'>
      <div class='card' style='width:18rem;'>
       <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title' style='width:auto; height:250px;'>
          <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <h5 class='card-text text-success'>Price : $product_price/-</h5><br>
               <a href='' class='btn btn-success'>Add to cart</a> <span class='float-end'><a href='' class='btn btn-outline-success'>View More</a></span>
               
           </div>
          </div>
      </div>
    ";

  }
}    
}        

function getbrands(){

          global $conn;
          $select_brands="select * from `brands`";
          $result_brands=mysqli_query($conn, $select_brands);
          while($row_data=mysqli_fetch_assoc($result_brands)) {

            $brand_title=$row_data['brand_title'];
            $brand_id=$row_data['brand_id'];
            echo "<li class='list-group-item nav-item'><a href='index.php?brand=$brand_id' class ='nav-link text-success'>$brand_title</a></li>";

          }
    
}   

function getcategories()
{

    global $conn;
    $select_category="select * from `categories`";
    $result_category=mysqli_query($conn, $select_category);
    while($row_data=mysqli_fetch_assoc($result_category)) {

      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li class='list-group-item nav-item'><a href='index.php?category=$category_id' class ='nav-link text-success'>$category_title</a></li>";

    }
}?>