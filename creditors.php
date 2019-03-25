<!DOCTYPE html>
<html>
<head>
  <title>Creditors | jirani supermarket</title>
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
             <label>Enter Creditors Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Creditors Name" name="cred_name" required="required" ><br>
            </div>
             <label>Enter Product purchased :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
             <textarea rows="4" cols="50" placeholder="Enter products purchased" name="prod_pur" class="form-control">
            
            </textarea>            
             </div>
             <label>Enter total cost:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter total cost " name="total" required="required" ><br>
            </div>
            
            <label>Enter Contact:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="tel" class="form-control" placeholder="Enter telphone no" name="contact" required="required" ><br>

            </div>
            <br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Add Creditor</button></center>
          
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
$cred_name = $_POST['cred_name'];
$prod_pur = $_POST['prod_pur'];
$total= $_POST['total'];
$contact = $_POST['contact'];

$date = date('Y/m/d h:m:s');

//validate date if correct
if (empty($cred_name)) {
  echo "<h6 style:'color:red;'>Creditor's name is Empty</h6>";
  exit();
}
if (empty($prod_pur)) {
  echo "<h6 style:'color:red;'>Product supplied is Empty</h6>";
  exit();
}
if (empty($total)) {
  echo "<h6 style:'color:red; align-self:center;'>Total Cost is Empty</h6>";
  exit();
}
if (empty($contact)) {
  echo "<h6 style:'color:red;'>Contact is Empty</h6>";
  exit();
}

 
//database connection
 $conn = mysqli_connect("localhost","root","","jirani_db");

//insert to t--able users
 $res = mysqli_query($conn, "INSERT INTO creditors VALUES('$cred_name','$prod_pur','$total','$contact','$date')");

if ($res==true) {
  echo "<h4 style:'color:green;'> Successfully registred</h4>";
  header('location: home.php');
}
else{
  echo "error";
}
  
?>