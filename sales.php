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
  <title>Daily Sales| jiarni supermarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <h3 style="color: green;"><center> Logined as <?php echo $email ?></center></h3>
  <center><h3 style="color: green;"><?php echo "Time Logined" .  date('Y/m/d h:m:s'); ?></h3></center>
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
             <label>Enter Total Cash in notes(ksh):</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="number" class="form-control" placeholder="Enter notes" name="notes" required="required" ><br>
            </div>
             <label>Enter Total cash in coins:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="number" class="form-control" placeholder="Enter coins" name="coins" required="required" ><br>
            </div>
            <p></p>
            
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Save daily sales</button></center>
          
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
$notes = $_POST['notes'];
$coins = $_POST['coins'];
//$total = $_POST['notes,coins;'];

$date1 = date('Y/m/d h:m:s');

//validate date if correct
if (empty($notes)) {
  echo "<h6 style:'color:red;'> Notes not entered</h6>";
  exit();
}
if (empty($coins)) {
  echo "<h6 style:'color:red;'>Coins not entered</h6>";
  exit();
}


$conn = mysqli_connect ("localhost","root","","jirani_db");
 if (mysqli_connect_errno()) {
  echo "Error occured". mysqli_connect_errno();
 }
//connect to database


$res = mysqli_query($conn, "INSERT INTO sales (notes,coins, date1) VALUES('$notes','$coins','$date1')");

if ($res==true) {
  echo "Thank you. notes entered $notes  coins entered $coins  added";
  
}

else {
  echo "Error Retry";
}

?>