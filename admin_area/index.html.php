<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- fount awsom link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
 <style>
    .admin_image{
    height: 100px;
    object-fit: contain;

}
.footer{
    position:absolute;
    bottom:0;
}
 </style>

</head>
<body>
<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
       <div class="container">
        <img src="../image/th.png" alt="" class="logo">
        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcom Gust</a>
                </li>

            </ul>
        </nav>
       </div>
    </nav>
    <!-- second child -->
    <div class="bglight">
        <h3 class="text-center p-2">Manage Detail</h3>
    </div>
    <!-- therd child -->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
            <div class="p-3">
            <a href="#"><img src="../image/apple1.png" alt="" class="admin_image"></a>
            <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info p-1">Insert Product</a></button>
                <button><a href="" class="nav-link text-light bg-info p-1">View Product</a></button>
                <button><a href="index.php?insert_categories" class="nav-link text-light bg-info p-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info p-1">View Categories</a></button>
                <button><a href="index.php?insert_brands" class="nav link text-light bg-info p-1">Insert Brand</a></button>
                <button><a href="" class="nav link text-light bg-info p-1">view Brand</a></button>
                <button><a href="" class="n av link text-light bg-info p-1">All Orders</a></button>
                <button><a href="" class="nav link text-light bg-info p-1">All Payments</a></button>
                <button><a href="" class="nav link text-light bg-info p-1">List Users</a></button>
                <button><a href="" class="nav link text-light bg-info p-1">Logout</a></button>

            </div>
        </div>
    </div>
    <!-- fourth child -->
    <div class="container">
        <?php 
        if(Isset($_GET['insert_categories'])){
            include('insert_categories.php');
        }
        
        if(Isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        ?>

    </div>
    <!-- foter -->
    <div class="bg-info p-3 text-center footer">
                <p>all rights reserved Admin</p>
           </div>
</div>

<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>