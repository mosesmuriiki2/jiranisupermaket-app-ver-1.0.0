<!DOCTYPE html>
<html>
<head>
  <title>Sign up | jiarni supermarket</title>
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
          <h3 style="text-align: center;"><strong>Create an account</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="" style="align-self: center;">
             <label>Enter First Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter first Name" name="fname" required="required" ><br>
            </div>
             <label>Enter Last Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter last Name" name="lname" required="required" ><br>
            </div>
             <label>Enter Email:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="email" class="form-control" placeholder="Enter email Address" name="email" required="required" ><br>
            </div>
             <label>Enter Password:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
              <input id='password' type="password" class="form-control" placeholder="Enter password" name="pass" required="required" ><br>
            </div>
             <label>Confirm Password:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock "></i></span>
              <input id='password' type="password" class="form-control" placeholder="Confirm password" name="confirm" required="required" ><br>
            </div>
            <label>Enter Gender:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down "></i></span>
              <select class="form-control input-md" name="gender" required="required">
                 <option disable="">Select gender</option>
                 <option>Male</option>
                 <option>Female</option>
                 <option>Other</option>
              </select><br>
            </div>
            <a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="signin" href="login.php">Already have an account?</a><br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Sign up</button></center>
          
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
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];
$gender = $_POST['gender'];

$date = date('Y/m/d h:m:s');

//validate date if correct
if (empty($f_name)) {
  echo "<h6 style:'color:red;'>Firstname is Empty</h6>";
  exit();
}
if (empty($l_name)) {
  echo "<h6 style:'color:red;'>Last name is Empty</h6>";
  exit();
}
if (empty($email)) {
  echo "<h6 style:'color:red; align-self:center;'>Email is Empty</h6>";
  exit();
}
if (empty($pass)) {
  echo "<h6 style:'color:red;'>Password is Empty</h6>";
  exit();
}
if (empty($gender)) {
  echo "<h6 style:'color:red;'>Gender is Empty</h6>";
  exit();
}
//password validation
if ($pass!=$confirm) {
  echo "password dont match"; 
  exit();
}
if (strlen($pass) < 8) {
  echo "<h5 class:danger> password is too short must be 8 characters";
  exit();
}
if (!preg_match("#[A-Z]+#", $pass)) {
    echo "<h6 style:'color:red;'>Password must contain a capital letter</h6>";
  exit();
}
//password hashing
$salt = '$2a$07$R.gjb2U2N.FmZ4hPp1y2CN$';
 $newpass = crypt($pass, $salt);
 
//database connection
 $conn = mysqli_connect("localhost","root","","jirani_db");

//insert to t--able users
 $res = mysqli_query($conn, "INSERT INTO users VALUES('$f_name','$l_name','$email','$newpass','$gender','$date')");

if ($res==true) {
  echo "<h4 style:'color:green;'> Successfully registred</h4>";
  header('location: login.php');
}
else{
  echo "error";
}

?>