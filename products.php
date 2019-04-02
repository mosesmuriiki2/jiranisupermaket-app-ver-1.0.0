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
  <title>Purchases | jiarni supermarket</title>
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
          <h3 style="text-align: center;"><strong>Add All Products</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="" style="align-self: center;">
             <label>Enter Product Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" required="required" ><br>
            </div>
            <label>Enter Quantity:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter Quantity" name="quantity" required="required" ><br>
            </div>
            <label>Enter Selling Price:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="price" name="price" required="required" ><br>
            </div>
            <label>Enter Category:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter category" name="category" required="required" ><br>

            </div>
            <br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="ok">Enter Products</button></center>
              <h4 style="color: rgba(2,190,34,1);"></h4>
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
$product_name = $_POST['product_name'];
$quantity= $_POST['quantity'];
$price = $_POST['price'];
$category = $_POST['category'];

//validate date if correct
if (empty($product_name)) {
  echo "<h6 style:'color:red;'>Product name is Empty</h6>";
  exit();
}
if (empty($quantity)) {
  echo "<h6 style:'color:red; align-self:center;'>Quantity is Empty</h6>";
  exit();
}

if (empty($price)) {
  echo "<h6 style:'color:red;'>Selling Price is Empty</h6>";
  exit();
}
if (empty($category)) {
  echo "<h6 style:'color:red;'>Category is Empty</h6>";
  exit();
}

   ini_set('display_errors',1);
error_reporting(E_ALL);

/*** THIS! ***/
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
/*** ^^^^^ ***/

//database connection
 $conn = mysqli_connect("localhost","root","","jirani_db");
   if (mysqli_connect_errno()) {
      echo "error occured" .mysqli_connect();
   }

//insert to t--able users
 $res = mysqli_query($conn, "INSERT INTO products(product_name,quantity,price,category) VALUES('$product_name','$quantity','$price','$category')");

if ($res==true) {
  
  echo "<h4>Successful Added</h4>";
}
else{
  echo "error";
}

?>