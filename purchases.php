<!DOCTYPE html>
<html>
<head>
  <title>Purchases | jiarni supermarket</title>
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
      <!--beginning of form-->
      <div class="row">
    <div class="col-sm-12">
      <div class="main-content">
        <div class="header1">
          <h3 style="text-align: center;"><strong>Add Purchases</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="" style="align-self: center;">
             <label>Enter Product Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Product Name" name="prod_name" required="required" ><br>
            </div>
             <label>Enter Supplier's Name :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Supplier name" name="sup_name" required="required" ><br>
            </div>
             <label>Enter Quantity:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter Quantity" name="quan_name" required="required" ><br>
            </div>
             <label>Enter Amount (ksh)</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Amount" name="amount" required="required" ><br>
            </div>
             <label>Enter Selling Price:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter selling price" name="sell_price" required="required" ><br>
            </div>
            <label>Enter Contact:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter contact" name="contact" required="required" ><br>

            </div>
            <br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Add Purchases</button></center>
          
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
if (empty($_POST)) {
  exit();
}
//create variables
$prod_name = $_POST['prod_name'];
$sup_name = $_POST['sup_name'];
$quan_name= $_POST['quan_name'];
$amount = $_POST['amount'];
$sell_price = $_POST['sell_price'];
$contact = $_POST['contact'];

$date = date('Y/m/d h:m:s');

//validate date if correct
if (empty($prod_name)) {
  echo "<h6 style:'color:red;'>Product name is Empty</h6>";
  exit();
}
if (empty($sup_name)) {
  echo "<h6 style:'color:red;'>Supplier name is Empty</h6>";
  exit();
}
if (empty($quan_name)) {
  echo "<h6 style:'color:red; align-self:center;'>Quantity is Empty</h6>";
  exit();
}
if (empty($amount)) {
  echo "<h6 style:'color:red; align-self:center;'>Quantity is Empty</h6>";
  exit();
}

if (empty($sell_price)) {
  echo "<h6 style:'color:red;'>Selling Price is Empty</h6>";
  exit();
}
if (empty($contact)) {
  echo "<h6 style:'color:red;'>Contact is Empty</h6>";
  exit();
}

 
//database connection
 $conn = mysqli_connect("localhost","root","","jirani_db");

//insert to t--able users
 $res = mysqli_query($conn, "INSERT INTO purchases VALUES('$prod_name','$sup_name','$quan_name','$amount','$sell_price','$contact','$date')");

if ($res==true) {
  echo "<h4 style:'color:green;'> Successfully registred</h4>";
  header('location: home.php');
}
else{
  echo "error";
}

?>