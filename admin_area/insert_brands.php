<?php
include("../connect.php");


if(isset($_POST["insert_brand"])){  //if the condition is set if submit button is click ie insert_cat perform this query

    $brand_title = $_POST["brand_title"];

    //select data from database
    $select_query="select * from `brands` where brand_title ='$brand_title'"; //if brand is already present in the database
    $result_select=mysqli_query($conn,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo"<script>alert('This Brand is present inside the database.')</script>";
    }else{
    
    $insert_query ="insert into `brands` (brand_title) values ('$brand_title')"; //if brand not prsent then insert new category 
    $result = mysqli_query($conn , $insert_query);
    if($result){
        echo"<script>alert('Brand has been inserted successfully!')</script>";
    }
    }
}
?>

<form action="" method="post" class="mb-2 container mt-5 w-50">
<h4 class="text-success mb-3">Insert Brand</h4>  
<div class="input-group flex-nowrap bg-success w-90 rounded-3">
  <span class="input-group-text" id="addon-wrapping">+</span>
  <input type="text" class="form-control" name ="brand_title" placeholder="Insert Brand" >
</div>
<div class="input-group flex-nowrap bg-success w-100 mt-2 rounded-3">
<input type="submit" class="form-control bg-success text-light" name ="insert_brand" placeholder="Insert Brand" value="Insert Brand">
</div>
</form>