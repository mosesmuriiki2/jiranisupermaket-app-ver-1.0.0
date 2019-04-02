<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");

  $deb_id = $_GET['GetID'];
  $query= "select * from debtors where deb_id='".$deb_id."'";
  $result = mysqli_query($conn, $query);
  while ($row=mysqli_fetch_assoc($result)) {
      $deb_id= $row['deb_id'];
      $deb_name = $row['deb_name'];
      $prod_sup= $row['prod_sup'];
      $amount = $row['amount'];
      $email = $row['email'];
      $tel_num = $row['tel_num'];
      $pay_period = $row['pay_period'];
      $date1 = $row['date1'];
     

      
      
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit debtors| jirani supermarket</title>
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
          <h3 style="text-align: center;"><strong>Update Debtors</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="update_debtor.php?ID=<?php echo $deb_id ?>" style="align-self: center;">
             <label>Enter Debtors Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Creditors Name" name="deb_name" required="required" value="<?php echo $deb_name ?>" ><br>
            </div>
             <label>Enter Product Supplied :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
             <textarea rows="4" cols="50" placeholder="Enter products purchased" name="prod_sup" class="form-control"><?php echo $prod_sup ?>
            
            </textarea>            
             </div>
             <label>Enter total Amount:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter total cost " name="amount" required="required" value="<?php echo $amount ?>" ><br>
            </div>
            
            <label>Enter Email:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="tel" class="form-control" placeholder="Enter telphone no" name="email" required="required" value="<?php echo $email ?>" ><br>

            </div>
               <label>Enter Telphone No.:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Telphone" name="tel_num" required="required" value="<?php echo $tel_num ?>" ><br>
            </div>
            <label>Enter Payment period:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="text" class="form-control" placeholder="Enter Payment period" name="pay_period" required="required"  value="<?php echo $pay_period ?>"><br>

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
