<?php
 session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
  //echo "<h3>LOGINED IN AS : $email<br>Welcome</h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Creditors | jirani supermarket</title>
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
          <h3 style="text-align: center;"><strong>Update Creditor</strong></h3>
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
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Update creditor</button></center>
          
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
   $query = "UPDATE creditors SET prod_pur='$prod_pur', total='$total',contact='$contact', date='$date' WHERE cred_name={$cred_name} ";
    $result= mysqli_query($conn, $query);
if ($result==true) {
  echo "<h4 style:'color:green;'> Successfully updated</h4>";
  //header('location: home.php');
}
else{
  echo "error";
}
  
?>