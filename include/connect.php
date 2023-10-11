<?php
  $con=mysqli_connect('localhost','epiz_34335628','5vsMYhQHQX','epiz_34335628_mystor');
  if($con){
   echo "";
  }else{
    die(mysqli_error($con));
  }
?>