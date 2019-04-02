<?php
    $conn = mysqli_connect("localhost","root","","jirani_db");
  if (isset($_GET['del'])) { 
  	  $cred_id=  $_GET['del'];
  	  $query = "delete from creditors where cred_id ='".$cred_id."'";
  	  $result = mysqli_query($conn, $query);
  if ($result==true) {
  	header("location: view_creditors.php");
  }else{
  	echo "something is wrong";
  }

  }

?>