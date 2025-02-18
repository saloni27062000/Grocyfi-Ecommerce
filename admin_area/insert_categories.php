<?php
include("../connect.php");


if(isset($_POST["insert_cat"])){  //if the condition is set if submit button is click ie insert_cat perform this query

    $category_title = $_POST["cat_title"];

    //select data from database
    $select_query="select * from `categories` where category_title ='$category_title'"; //if category is already present in the database
    $result_select=mysqli_query($conn,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo"<script>alert('This Category is present inside the database.')</script>";
    }else{
    
    $insert_query ="insert into `categories` (category_title) values ('$category_title')"; //if category not prsent then insert new category 
    $result = mysqli_query($conn , $insert_query);
    if($result){
        echo"<script>alert('Category has been inserted successfully!')</script>";
    }
    }
}
?>

<form action="" method="post" class="mb-2 container mt-5">
<div class="input-group flex-nowrap bg-success w-90 rounded-3">
  <span class="input-group-text" id="addon-wrapping">+</span>
  <input type="text" class="form-control" name ="cat_title" placeholder="Insert Category" >
</div>
<div class="input-group flex-nowrap bg-success w-100 mt-2 rounded-3">
<input type="submit" class="form-control bg-success text-light" name ="insert_cat" placeholder="insert category" value="Insert Category">
</div>
</form>