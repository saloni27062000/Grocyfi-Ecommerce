<?php

include(__DIR__ . '/../includes/connect.php');


function getproducts(){

            global $conn;
            if(!isset($_GET['category'])){
              if(!isset($_GET['brand'])){

            $select_query = "select * from `products` order by rand() LIMIT 0,9";
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
                <div class='card' style='width:18rem;'>
                 <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title' style='width:auto; height:250px; background-image : contain'>
                    <div class='card-body'>
                       <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <h5 class='card-text text-success'>Price : $product_price/-</h5><br>
                         <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
                         <span class='float-end'><a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View More</a></span>
                         
                     </div>
                    </div>
                </div>
              ";

            

            }
        }
      }
    }


    //getting all products

    function get_all_products(){
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
                         <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
                         <span class='float-end'><a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View More</a></span>
                   
               </div>
              </div>
          </div>
        ";

      }
  }
}
    }


    //get all products new functions  for products page
    function getbrands_products(){

      global $conn;
      $select_brands="select * from `brands`";
      $result_brands=mysqli_query($conn, $select_brands);
      while($row_data=mysqli_fetch_assoc($result_brands)) {

        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li class='list-group-item nav-item'><a href='display_allproducts.php?brand=$brand_id' class ='nav-link text-success'>$brand_title</a></li>";

      }

}   


    //get all products new functions  for products page

function getcategories_products()
{

global $conn;
$select_category="select * from `categories`";
$result_category=mysqli_query($conn, $select_category);
while($row_data=mysqli_fetch_assoc($result_category)) {

  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='list-group-item nav-item'><a href='display_allproducts.php?category=$category_id' class ='nav-link text-success'>$category_title</a></li>";

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
                         <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
                         <span class='float-end'><a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View More</a></span>
                       
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
              <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
              <span class='float-end'><a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View More</a></span>
               
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
}

//searching product search button

function search_product(){
  global $conn;

  if(isset($_GET['search_data_product'])){

  $search_data_value = $_GET['search_data'];
  $search_query = "select * from `products` where product_keywords like '%$search_data_value%'"; //  % is for searching the data which is at any position in the database 
  $result_query = mysqli_query($conn, $search_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows== 0){
    echo "<h1 class= 'p-5 text-center text-danger'>No results match is for this category!!!</h1>'";  //if no data is present display no stock or else while() will be displayed
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
              <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
              <span class='float-end'><a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View More</a></span>
               
           </div>
          </div>
      </div>
    ";

}
}
}


// view product details function
function view_details(){

  global $conn;
  if(isset($_GET['product_id'])){    //if the product id is set display all products of that id when category and brands are not set
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){


  $product_id = $_GET['product_id']; //created variable for  storing product id
  $select_query = "select * from `products` where product_id = $product_id";
  $result_query = mysqli_query($conn, $select_query);
  while ($row = mysqli_fetch_assoc($result_query)) {

    $product_id = $row["product_id"];
    $product_title = $row["product_title"];
    $product_description = $row["product_description"];
    $product_image1 = $row["product_image1"];
    $product_image2 = $row["product_image2"];
    $product_image3 = $row["product_image3"];
    $product_price = $row["product_price"];
    $category_id = $row["category_id"];
    $brand_id = $row["brand_id"];
 
    echo "
    <div class='col-md-4 d-flex justify-content-center p-2'>
      <div class='card' style='width:18rem;'>
       <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title' style='width:auto; height:250px;'>
          <div class='card-body'>
             <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_description</p>
              <h5 class='card-text text-success'>Price : $product_price/-</h5><br>
              <a href='index.php?add_to_cart=$product_id' class='btn btn-success'>Add to cart</a> 
               <span class='float-end'><a href='index.php' class='btn btn-outline-success'>Go Home</a></span>
               
           </div>
          </div>
      </div>

      <div class='col-md-8'>
                 <!-- related cards -->
                  <div class='row'>
                    <div class='col-md-12'>
                          <h2 class='text-success text-center'>Related Products</h2>
                    </div>
                    <div class='col-md-6 d-flex justify-content-center mt-5'>
                    <img src='./admin_area/product_images/$product_image2' class='card-img-top border' alt='$product_title' style='width:auto; height:250px;'>
                    </div>
                    <div class='col-md-6 d-flex justify-content-center mt-5'>
                    <img src='./admin_area/product_images/$product_image3' class='card-img-top border' alt='$product_title' style='width:auto; height:250px;'>
                    </div>

                  </div>
            </div>
    ";

  

  }
}
}
}
}


function getIPAddress(){

  //whether ip is from share internet
  if(!empty($_SERVER['HTTP_CLIENT_IP'])){

    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from the proxy
  elseif(!empty($_SERVER['HTTP_X_FORWARDED'])){

    $ip = $_SERVER['HTTP_X_FORWARDED'];

  }
    //whether ip is from the remote address
  else{

    $ip = $_SERVER['REMOTE_ADDR'];
  }
    return $ip;
}
  // $ip=getIPAddress();
  // echo'User Real IP Address' .$ip;


  // add to cart function

  function cart(){

    if(isset($_GET['add_to_cart'])){

    global $conn;
    $get_ip_add = getIPAddress();  //the ip adress we got from getIPAddress function will be stored in $fet_ip_add variable
    $get_product_id = $_GET['add_to_cart'];
    $select_query = "SELECT * FROM `cart_details` WHERE product_id = $get_product_id AND ip_address = '$get_ip_add'";
    $result_query = mysqli_query($conn,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows > 0){
    echo "<script>alert('This item is already present inside cart.');</script>";  //if no data is present display no stock or else while() will be displayed
    echo "<script>window.open('index.php','_self')</script>";
  }else{

    $insert_query = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ($get_product_id, '$get_ip_add', 1)";
    $result_query = mysqli_query($conn,$insert_query);
    echo "<script>alert('Item is been inserted successfully!!');</script>";  //if no data is present display no stock or else while() will be displayed
    echo "<script>window.open('index.php','_self')</script>";

  }
}
  }


  //fun for displaying number of items in cart
  function cart_item_number(){

    if(isset($_GET['add_to_cart'])){

    global $conn;
    $get_ip_add = getIPAddress();  //the ip adress we got from getIPAddress function will be stored in $fet_ip_add variable
    $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
    $result_query = mysqli_query($conn,$select_query);
    $count_cart_items=mysqli_num_rows($result_query);
      }
    else{

        global $conn;
        $get_ip_add = getIPAddress();  //the ip adress we got from getIPAddress function will be stored in $fet_ip_add variable
        $select_query = "SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'";
        $result_query = mysqli_query($conn,$select_query);
        $count_cart_items=mysqli_num_rows($result_query);

  }
  echo $count_cart_items;
}


//total cart price ie subtotal price of all items in the cart

function total_cart_price(){

  global $conn;
  $get_ip_add = getIPAddress();
  $total_price = 0;
  $select_query = "select * from `cart_details` where ip_address = '$get_ip_add'";
  $result_query = mysqli_query($conn,$select_query);
  while($row = mysqli_fetch_array($result_query)){

    $product_id=$row["product_id"];
    $select_products = "select * from `products` where product_id = '$product_id'";
    $result_products = mysqli_query($conn,$select_products);
    while($row_product_price = mysqli_fetch_array($result_products)){

      $product_price=$row_product_price["product_price"];
      $product_values = $row_product_price["product_price"];
      $total_price +=$product_price;
    }

}
echo $total_price;
}
?>