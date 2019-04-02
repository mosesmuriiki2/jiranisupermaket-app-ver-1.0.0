<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");

  $product_id = $_GET['GetID'];
  $query= "select * from products where product_id='".$product_id."'";
  $result = mysqli_query($conn, $query);
  while ($row=mysqli_fetch_assoc($result)) {
      $product_id= $row['product_id'];
      $product_name = $row['product_name'];
      $quantity= $row['quantity'];
      $price = $row['price'];
      $category = $row['category'];
      $reg_date = $row['reg_date'];
     

      
      
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Product | jirani supermarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <h3 style="color: green;"><center> Logined as <!--<?php //echo $email ?></center>--></h3>
  <center><h3 style="color: green;"></h3></center>
    <div class="header">
        <h1>JIRANI SUPERMARKET LIMITED <p id="demo"></p></h1>
      </div>
      <!--beginning of form-->
      <div class="row">
    <div class="col-sm-12">
      <div class="main-content">
        <div class="header1">
          <h3 style="text-align: center;"><strong>Update Products</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="update_product.php?ID=<?php echo $product_id ?>" style="align-self: center;">
             <label>Enter Products Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Creditors Name" name="product_name" required="required" value="<?php echo $product_name ?>" ><br>
            </div>
             <label>Enter Quantity :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
             <textarea rows="4" cols="50" placeholder="Enter quantity" name="quantity" class="form-control"><?php echo $quantity ?>
            
            </textarea>            
             </div>
             <label>Enter price:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder=" Enter price " name="price" required="required" value="<?php echo $price ?>" ><br>
            </div>
            
            <label>Enter Category:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="tel" class="form-control" placeholder="Enter telphone no" name="category" required="required" value="<?php echo $category ?>" ><br>

            </div>
            <br><br>
                 <center><button id="signup" class="btn btn-success btn-lg" name="update">Update</button></center>
          
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
