<?php
  include("include/connect.php");
  include("./function/common_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sasty shop</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- fountawsam -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
          <div class="container-fluid">
            <img src="image/th.png" alt="" class="logo">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                      <a class="nav-link" href="#">Product</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="#">Register</a>
                     </li>
                      <li class="nav-item">
                       <a class="nav-link" href="#">contect</a>
                      </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus"></i><super>1</super></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Total price</a>
                    </li>
       
                </ul>
                     <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                     </form>
                  </div>
                 </div>
     </nav>
             <!-- second child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
              <ul class="navbar-nav me-auto">
  
               <li class="nav-item ">
               <a class="nav-link text-light" href="#">Welcom Guest</a>
               </li>
        
               <li class="nav-item">
               <a class="nav-link text-light" href="#">Login</a>
               </li>
               </ul>
         </nav>
            <!-- therd child -->
      <div class="bg-light">
          <h3 class="text-center">Shahzain Stor</h3>
         <p class="text-center">this is our own stor avalebal all thinks</p>
      </div>
                 <!-- fourth child -->
                  <div class="row" >
                    <!-- product -->
                  <div class="col-10">
                  <div class="row">
                           <?php 
                           getproduct();
      
                           ?>
                       </div>
                     </div>
                       <!-- brand manue -->
                     <div class="col-2 bg-secondary p-0">
                     <ul class="navbar-nav me-auto text-center ">
                       <li class="nav-item bg-info">
                         <a class="nav-link text-light" href="#">Delevery Brands</a>
                       </li>
                       <?php
                       getbrands();
                       /*   $select_brands="select * from `brands`";
                         $Result_brands=mysqli_query($con,$select_brands);
                         while($row_data=mysqli_fetch_assoc($Result_brands)){
                          $brand_title=$row_data['brand_title'];
                          $brand_id=$row_data['brand_id'];
                          echo "<li class='nav-item'>
                          <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                        </li>";
                         } */
                       ?>
                    </ul>
                      <!-- catagres -->
                     <ul class="navbar-nav me-auto text-center ">
                       <li class="nav-item bg-info">
                         <a class="nav-link text-light" href="#">Catagres</a>
                       </li>
                       <?php
                       getcategories();
                        
                       ?>
                    </ul>
                     </div>
                  </div>
                <!-- last child -->
           <div class="bg-info p-3 text-center">
                <p>all rights reserved Admin</p>
           </div>

</div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>