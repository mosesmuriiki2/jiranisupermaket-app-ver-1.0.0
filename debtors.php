<!DOCTYPE html>
<html>
<head>
  <title>Debtors | jirani supermarket</title>
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
          <h3 style="text-align: center;"><strong>Add Debtor</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="" style="align-self: center;">
             <label>Enter Debtor Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Debtor Name" name="deb_name" required="required" ><br>
            </div>
             <label>Enter Product Supplied :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Product Supplied" name="prod_sup" required="required" ><br>
            </div>
             <label>Enter Amount Owed:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter Amount owed" name="amount" required="required" ><br>
            </div>
             <label>Enter Email Address</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Email" name="email" required="required" ><br>
            </div>
             <label>Enter Telphone No.:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Telphone" name="tel_num" required="required" ><br>
            </div>
            <label>Enter Payment period:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Payment period" name="pay_period" required="required" ><br>

            </div>
            <br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Add Debtor</button></center>
          
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
$deb_name = $_POST['deb_name'];
$prod_sup = $_POST['prod_sup'];
$amount= $_POST['amount'];
$email = $_POST['email'];
$tel_num = $_POST['tel_num'];
$pay_period = $_POST['pay_period'];

$date = date('Y/m/d h:m:s');

//validate date if correct
if (empty($deb_name)) {
  echo "<h6 style:'color:red;'>Debtor's name is Empty</h6>";
  exit();
}
if (empty($prod_sup)) {
  echo "<h6 style:'color:red;'>Product Supplied is Empty</h6>";
  exit();
}
if (empty($amount)) {
  echo "<h6 style:'color:red; align-self:center;'>Amount owed is Empty</h6>";
  exit();
}
if (empty($email)) {
  echo "<h6 style:'color:red; align-self:center;'>Email is Empty</h6>";
  exit();
}

if (empty($tel_num)) {
  echo "<h6 style:'color:red;' >Telphone number is Empty</h6>";
  exit();
}
if (empty($pay_period)) {
  echo "<h6 style:'color:red;'>Payment period is Empty</h6>";
  exit();
}

 
//database connection
 $conn = mysqli_connect("localhost","root","","jirani_db");

//insert to t--able users
 $res = mysqli_query($conn, "INSERT INTO debtors VALUES('$deb_name','$prod_sup','$amount','$email','$tel_num','$pay_period','$date')");

if ($res==true) {
  echo "<h4 style:'color:green;'> Successfully registred</h4>";
  header('location: login.php');
}
else{
  echo "error";
}

?>