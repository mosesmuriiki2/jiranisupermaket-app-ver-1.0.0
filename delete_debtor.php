<?php
    $conn = mysqli_connect("localhost","root","","jirani_db");
  if (isset($_GET['del'])) { 
  	  $deb_id=  $_GET['del'];
  	  $query = "delete from debtors where deb_id ='".$deb_id."'";
  	  $result = mysqli_query($conn, $query);
  if ($result==true) {
  	header("location: view_debtors.php");
  }else{
  	echo "something is wrong";
  }

  }

?>