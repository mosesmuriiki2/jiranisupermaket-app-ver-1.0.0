<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");
  if ($conn==0) {
  	 echo "Database error" .mysqli_connect_errno($conn);
  }

 if (isset($_POST['update'])) {
 	$cred_id = $_GET['ID'];
 	$cred_name = $_POST['cred_name'];
 	$prod_pur = $_POST['prod_pur'];
 	$total = $_POST['total'];
 	$contact = $_POST['contact'];
 	$date =  date('Y-m-d h-m-s');




 	$query = "update creditors set cred_name='".$cred_name."',prod_pur='".$prod_pur."',total='".$total."',contact='".$contact."',date='".$date."' where cred_id='".$cred_id."' ";
 	$result= mysqli_query($conn, $query);
    if ($result) {
    	header("location: view_creditors.php");
    }else{
    	echo "something is wrong"; 
    }


 }else{
 	header("location: view.php");
 }


?>