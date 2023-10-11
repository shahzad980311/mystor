<?php 
     include('../include/connect.php');
     if(isset($_POST['insert_product'])){
     $product_title=$_POST['product_title'];
     $product_description=$_POST['product_description'];
     $product_keyword=$_POST['product_keyword'];
     $prodect_categories=$_POST['prodect_categories'];
     $prodect_brands=$_POST['prodect_brands'];
     $product_price=$_POST['product_price'];
     $product_status='true';

     /* select image */
     $product_image1=$_FILES['product_image1']['name'];
     $product_image2=$_FILES['product_image2']['name'];
     $product_image3=$_FILES['product_image3']['name'];

     /* temp image */
     $temp_image1=$_FILES['product_image1']['tmp_name'];
     $temp_image2=$_FILES['product_image2']['tmp_name'];
     $temp_image3=$_FILES['product_image3']['tmp_name'];

     /* check empty feled */
     if($product_title== '' or $product_description== '' or $product_keyword== '' or $prodect_categories== '' or $prodect_brands== '' or $product_price== '' or $product_image1== '' or $product_image2== '' or $product_image3== '' ){
       echo "<script>alert('ples file all felds')</script>";
       exit;
     }else{
        move_uploaded_file($temp_image1,"../image/$product_image1");
        move_uploaded_file($temp_image2,"../image/$product_image2");
        move_uploaded_file($temp_image3,"../image/$product_image3");

        /* insert product */
        $insert_product="insert into `insert_product` (product_title,
        product_description,product_keyword,category_id,brand_id,
        product_image1,product_image2,product_image3,product_price,
        date,status) values ('$product_title','$product_description',
        '$product_keyword','$prodect_categories','$prodect_brands','$product_image1',
        '$product_image2','$product_image3','$product_price',now(),$product_status)";
        $Result_query=mysqli_query($con,$insert_product);
        if($Result_query){
            echo "<script>alert('products inserted succssfull')</script>";
        }
     }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!-- fount awsom link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
 
    <title>Insert Products</title>
</head>
<body class="bg-light">
    <div class="container mr-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_title"class="form-label">
                    Product Title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                 placeholder="Prodect Title" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_description"class="form-label">
                    Product Description
                </label>
                <input type="text" name="product_description" id="product_description" class="form-control" 
                placeholder="Prodect Description" required="required">
            </div> 
             <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_keyword"class="form-label">
                    Product Keyword
                </label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                 placeholder="Prodect Keyword" required="required">
            </div>
            <!-- ctegory -->
            </div>  <div class="form-outline mb-4 w-50 m-auto">
                <select name="prodect_categories" id="" class="form-select" autocomplete="off">
                    <option value="">Select a Category</option>
                    <?php
                       $select_query="select * from `categories`";
                       $Result_query=mysqli_query($con,$select_query);
                       while($row=mysqli_fetch_assoc($Result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_title'];
                        echo "<option value='$category_id'>$category_title</option>";
                       }
                     ?>
                   
                </select>
            </div>
            </div>  <div class="form-outline mb-4 w-50 m-auto">
                <select name="prodect_brands" id="" class="form-select" autocomplete="off">
                    <option value="">Select a Brand</option>
                    <?php
                       $select_query="select * from `brands`";
                       $Result_query=mysqli_query($con,$select_query);
                       while($row=mysqli_fetch_assoc($Result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_title'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                       }
                     ?>
                </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_image1"class="form-label">
                    Product Image_1
                </label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"
                  required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_image2"class="form-label">
                    Product Image_2
                </label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"
                  required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_image3"class="form-label">
                    Product Image_3
                </label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"
                  required="required">
            </div>
          
            <div class="form-outline mb-4 w-50 m-auto">
                <label  form="product_price"class="form-label">
                    Product Price
                </label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                 placeholder="Prodect Price" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            
                <input type="submit" name="insert_product" id="insert_product" class="btn btn-info" value="insert products">
                 
            </div>
        </form>

    </div>
    
<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>