<?php
session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
  echo "<center><h3>LOGINED IN AS : $email<br>Welcome</h3></center>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homepage | Jirani supermarket limited</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  margin-top: 30px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>
<div class="container1">
	<h1 id="h1">Jirani Supermarket limited</h1>
</div>
<div class="row">
	<div class="col-sm-12">
		<h3 id="h3"><strong><b>WELCOME TO JIRANI SUPER MARKET MANAGEMENT SYSTEM</b></strong></h3>
	</div>
</div>
<div class="container">
  <h2></h2>
  <p></p>  
  <span class="label label-default" id="home"><a href="home.php" style="font-size: 20px; color: white;">Homepage</a></span>
  <span class="label label-primary" id="Purchases"><a href="purchases.php" style="font-size: 20px; color: white;">Purchases</a></span>
  <span class="label label-success" id="Sales"><a href="sales.php" style="font-size: 20px; color: white;">Sales</a></span>
  <span class="label label-info" id="Debtors"><a href="debtors.php" style="font-size: 20px; color: white;">Debtors</a></span>
  <span class="label label-warning" id="Creditors"><a href="creditors.php" style="font-size: 20px; color: white;">Creditors</a></span>
  <span class="label label-success" id="Products"><a href="products.php" style="font-size: 20px; color: white;">Products</a></span>
  <span class="label label-danger" id="Products"><a href="logout.php" style="font-size: 20px; color: white;">logout</a></span>

<br><br>
<br><br>
<section class="row">
<div class="card col-md-3 " >
  <img src="images/supermarket2.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Sales</b></h4> 
    <p>View Sales <a href="view_sales.php">view</a></p> 
  </div>
</div>
<div class="card col-md-3">
  <img src="images/supermarket3.jpeg" alt="Avatar" style="width:100%; height: 40%;">
  <div class="container">
    <h4><b>Purchases</b></h4> 
    <p>View Purchases <a href="viewpurchases.php">view</a></p> 
  </div>
</div>
<div class="card col-md-3">
  <img src="images/supermarket4.jpeg" alt="Avatar" style="width:100%; height: 40%;">
  <div class="container">
    <h4><b>Creditors</b></h4> 
    <p>View creditors <a href="view_creditors.php">view</a></p> 
  </div>
</div>
<div class="card col-md-3">
  <img src="images/supermarket5.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Debtors</b></h4> 
    <p>View debtors <a href="view_debtors.php">view</a></p> 
  </div>
</div>
</section>
<section class="row">
<div class="card col-md-6">
  <img src="images/supermarket5.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Products</b></h4> 
    <p>View products <a href="view_products.php">view</a></p> 
  </div>
</div>
<div class="card col-md-6">
  <img src="images/supermarket5.jpeg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Coming soon</b></h4> 
    <p>View products <a href="view_products.php"></a></p> 
  </div>
</div>


</section>
  <div class="panel panel-default" style="margin-top: 30px; width: 82%;">
    <div class="panel-footer" style="text-align: center; color: rgb(3,130,29);">Jirani supermarket limited All Rights Reserved &copy 2019</div>
  </div>
</div>
</body>
</html>