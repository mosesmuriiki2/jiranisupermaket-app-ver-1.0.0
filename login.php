<!DOCTYPE html>
<html>
<head>
	<title>login | Jirani supermarket limited</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
        <h1>JIRANI SUPERMARKET LIMITED <p id="demo"></p></h1>
      </div>
       <div class="row">
   	  <div class="col-sm-12">
   	  	 <div class="well1">  
<div class="row">
	<div class="col-sm-12">
		<div class="main-content1">
			<div class="header1">
				<h3 style="text-align: center;"><strong>login</strong></h3>	
			</div>
			<div class="1-part">
				<form action="" method="post">
					<label>Enter Email:</label>
					<input type="email" name="email" placeholder="Enter Email" required="required" class="form-control input-md"><br>
					<label>Enter password:</label>
					<div class="overlap-text">
						<input type="password" name="pass" placeholder="Enter password" required="required" class="form-control input-md">
						<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Reset password" href="forgot_password.php">Forgot password</a>
						</a>
					</div>
			         <a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="signup" href="sign.php">Dont have an account?</a>
						<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
						
				</form>
			



<div class="footer" id="end">
   	<h6>Jirani supermarket limited | All rights reserved &copy 2019</h6>
   </div>
<script type="text/javascript">
	var d = new Date();
	document.getElementById("demo").innerHTML = d;
</script>
</body>
</html>
<?php
session_start();

if (empty($_POST)) {
	exit();
}
 $email = $_POST['email'];
 $newpass = $_POST['pass'];

 if (empty($email)) {
 	echo "Enter email";
 	exit();
 }
 if (empty($pass)) {
 	echo "Enter password";
 }
$salt =  '$2a$07$R.gjb2U2N.FmZ4hPp1y2CN$';
$newpass= crypt($pass, $salt);



$conn = mysqli_connect("localhost","root","","jirani_db");

$res = mysqli_query($conn, "SELECT FROM users WHERE(email = '$email' AND pass = '$newpass')");

if (mysqli_num_rows($res) > 1) {
    echo "<h5 class='text-danger'><i>No Match.Login Failed</i></h5>";
}
else{
	echo "success";
	session_start();
	$_SESSION['x'] =$email;

	header('location: home.php');	
}




?>