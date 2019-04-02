<?php
    $conn = mysqli_connect("localhost","root","","jirani_db");
  if (isset($_GET['del'])) { 
  	  $product_id=  $_GET['del'];
  	  $query = "delete from products where product_id ='".$product_id."'";
  	  $result = mysqli_query($conn, $query);
  if ($result==true) {
  	header("location: view_products.php");
  }else{
  	echo "something is wrong";
  }

  }

?>