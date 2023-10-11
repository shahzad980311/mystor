<?php
/* connection */
include("./include/connect.php");
/* get product function */
function getproduct(){
    global $con;
    $select_query="select * from `insert_product` order by rand() LIMIT 0,9";
    $Result_query=mysqli_query($con,$select_query);
    //$row=mysqli_fetch_assoc($Result_query);
    // echo $row['product_title'];
     while($row=mysqli_fetch_assoc($Result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
      echo "<div class='col-4 mb-1'>
      <div class='card' style='width: 18rem;'>
         <img src='./image/$product_image1' class='card-img-top' alt='...'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='#' class='btn btn-info'>Add Prodect</a>
           <a href='#' class='btn btn-secondary'>View Prodect</a>
         </div>
      </div>
   </div>";
    
     }
}
   /* Get Categories */
function getcategories(){
    global $con;
    $select_categories="select * from `categories`";
    $Result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($Result_categories)){
    $category_title=$row_data['category_title'];
    $category_id=$row_data['category_id'];
        echo "<li class='nav-item'>
    <a href='index.php?brand=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
  } 
}
    /* Get Brands */
    function getbrands(){
        global $con;
        $select_brands="select * from `brands`";
        $Result_brands=mysqli_query($con,$select_brands);
        while($row_data=mysqli_fetch_assoc($Result_brands)){
         $brand_title=$row_data['brand_title'];
         $brand_id=$row_data['brand_id'];
         echo "<li class='nav-item'>
         <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
       </li>";
        }
    }

?>