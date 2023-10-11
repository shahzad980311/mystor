<?php
  include('../include/connect.php');
  if(Isset($_POST['insert_cat'])){
    $category_title=$_POST['cat_title'];
    /* select Data from Databace */
    $selec_query="select * from `categories` where category_title='$category_title'";
    $Result_select=mysqli_query($con,$selec_query);
    $number=mysqli_num_rows($Result_select);
    if($number>0){
       echo "<script>alert('category is alrady enterd')</script>";
    }else{
    $insert_query="insert into `categories`(category_title) values ('$category_title')";
    $Result=mysqli_query($con,$insert_query);
    if($Result){
      echo "<script>alert('category has been inserted succssfuly')</script>";
    }
  }
  }
?>
<div><h3 class="bg-light text-center">Insert Categories</h3>

</div>
<form action="" method="post" class="mb-2 my-5">
<div class="input-group mb-3 w-90">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3 m-auto w-10" >
  
    <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" values="insert categories">
    
</div>

</form>