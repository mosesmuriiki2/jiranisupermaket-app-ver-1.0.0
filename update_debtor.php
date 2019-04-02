<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");
 if (isset($_POST['update'])) {
 	$deb_id = $_GET['ID'];
 	$deb_name = $_POST['deb_name'];
 	$prod_sup = $_POST['prod_sup'];
 	$amount = $_POST['amount'];
 	$email = $_POST['email'];
 	$tel_num = $_POST['tel_num'];
 	$pay_period = $_POST['pay_period'];




 	$query = "update debtors set deb_name='".$deb_name."',prod_sup='".$prod_sup."',amount='".$amount."',email='".$email."',tel_num='".$tel_num."',pay_period='".$pay_period."' where deb_id='".$deb_id."' ";
 	$result= mysqli_query($conn, $query);
    if ($result) {
    	header("location: view_debtors.php");
    }else{
    	echo "something is wrong"; 
    }


 }else{
 	header("location: view.php");
 }


?>