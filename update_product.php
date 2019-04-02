<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");
 
 if (isset($_POST['update'])) {
 	$product_id = $_GET['ID'];
 	$product_name = $_POST['product_name'];
 	$quantity = $_POST['quantity'];
 	$price = $_POST['price'];
 	$category = $_POST['category'];
 




 	$query = "update products set product_name='".$product_name."',quantity='".$quantity."',price='".$price."',category='".$category."' where product_id='".$product_id."' ";
 	$result= mysqli_query($conn, $query);
    if ($result) {
    	header("location: view_products.php");
    }else{
    	echo "something is wrong"; 
    }


 }else{
 	header("location: view_product.php");
 }


?>