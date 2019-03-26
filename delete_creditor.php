<?php
session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
 // echo "<h3>LOGINED IN AS : $email<br>Welcome</h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Delete creditors|jirani supermarket</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="text-center">
	 <h3 style="color: green;"><center> Logined as <?php echo $email ?></center></h3>
  <center><h3 style="color: green;"><?php echo "Time Logined" .  date('Y/m/d h:m:s'); ?></h3></center>
  <div class="container">
	<h1 id="h1">Jirani Supermarket limited</h1>
</div>
<div class="row">
	<div class="col-sm-12">
		<h3 id="h3"><strong><b>WELCOME TO JIRANI SUPER MARKET MANAGEMENT SYSTEM</b></strong></h3>
	</div>



 <center> <form method="POST" class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  	<input type="text" name="cred_name" placeholder="Enter creditors name to Delete" class="text-warning" required="">
  	<br><br>
  	<input type="submit" name="ok" class="btn btn-outline-primary" onclick="return confirm('Are you sure you want to delete patient?');">

</center>
  </form>
</div>
</body>
</html>

<?php
if (empty($_POST)) {
	exit();
}
if (isset($_POST['submit'])) {
	# code...
}
//get patient id from form
$cred_name = $_POST['cred_name'];
//establish a connection to apple_db
$conn = mysqli_connect ("localhost","root","","jirani_db");
//below query looks for a matching patient id
//$res = mysqli_query($conn,"SELECT * FROM patient WHERE fname LIKE '%$fname'");
//$res returns 1 or 0 records/row
//check if patient exist b4 deleting
$res = mysqli_query($conn,"SELECT * FROM creditors WHERE cred_name = '$cred_name' ");
if (mysqli_num_rows($res) == 0) {
	echo "No such Creditor name";
}
else{
	//there is a record/row
	//fetch the found record
	while($colms = mysqli_fetch_array($res)){
	//we are fetching a row we get an array of columns = $colms
	echo "Creditor name is $colms[0] <br><br>";
	echo "product purchased supplied IS $colms[1] <br><br>";
	echo "Amount is $colms[2] <br><br>";
	echo "contact is $colms[3] <br><br>";

	echo "date is: $colms[6] <br><br>";
	$res1 = mysqli_query($conn,"DELETE FROM debtors WHERE cred_name='$cred_name' ");
	if ($res1==true) {
		echo "Above Creditor name $deb_name has been removed.";
	}
	else{
		echo "something went wrong";
	}
}//end while -while loops other rows if any
}//end
	

		
	
?>