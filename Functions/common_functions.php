<?php

// include("./../connect.php");
include(__DIR__ . "/../connect.php");


function getproducts(){

            global $conn;
            $select_query = "select * from `products` order by rand() LIMIT 0,9";
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
                 <img src='./admin_area/product_images/$product_image2' class='card-img-top' alt='$product_title' style='width:300px; height:250px;'>
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
?>