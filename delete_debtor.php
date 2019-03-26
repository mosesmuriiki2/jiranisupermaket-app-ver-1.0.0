<?php 
session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
 // echo "<center><h3>LOGINED IN AS : $email<br>Welcome</h3></center>";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Debtors|jirani supermarket</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="text-center">
	 <h3 style="color: green;"><center> Logined as <?php echo $email ?></center></h3>
  <center><h3 style="color: green;"><?php echo "Time Logined" .  date('Y/m/d h:m:s'); ?></h3></center>
  <div class="container1">
	<h1 id="h1">Jirani Supermarket limited</h1>
</div>
<div class="row">
	<div class="col-sm-12">
		<h3 id="h3"><strong><b>WELCOME TO JIRANI SUPER MARKET MANAGEMENT SYSTEM</b></strong></h3>
	</div>
</div>
<form method="POST" class="form-control" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<input type="text" name="deb_name" placeholder="Enter debtors Name" ><br><br>
     <input type="submit" name="ok" class="btn btn-primary">
</form>

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
$deb_name = $_POST['deb_name'];
//establish a connection to apple_db
$conn = mysqli_connect ("localhost","root","","jirani_db");
//below query looks for a matching patient id
//$res = mysqli_query($conn,"SELECT * FROM patient WHERE fname LIKE '%$fname'");
//$res returns 1 or 0 records/row
//check if patient exist b4 deleting
$res = mysqli_query($conn,"SELECT * FROM debtors WHERE deb_name = '$deb_name' ");
if (mysqli_num_rows($res) == 0) {
	echo "No such Debtor name";
}
else{
	//there is a record/row
	//fetch the found record
	while($colms = mysqli_fetch_array($res)){
	//we are fetching a row we get an array of columns = $colms
	echo "Debtor name is $colms[0] <br><br>";
	echo "Product supplied IS $colms[1] <br><br>";
	echo "Amount is $colms[2] <br><br>";
	echo "Email is $colms[3] <br><br>";
	echo "tel_num was $colms[4] <br><br>";
	echo "payment period is $colms[5] <br><br>";
	echo "date is: $colms[6] <br>  <br>";
	$res1 = mysqli_query($conn,"DELETE FROM debtors WHERE deb_name='$deb_name' ");
	if ($res1==true) {
		echo "Above Debtor name $deb_name has been removed.";
	}
	else{
		echo "something went wrong";
	}
}//end while -while loops other rows if any
}//end
	

		
	
?>