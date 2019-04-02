<?php
  $conn = mysqli_connect("localhost","root","","jirani_db");

  $cred_id = $_GET['GetID'];
  $query= "select * from creditors where cred_id='".$cred_id."'";
  $result = mysqli_query($conn, $query);
  while ($row=mysqli_fetch_assoc($result)) {
      $cred_id= $row['cred_id'];
      $cred_name = $row['cred_name'];
      $prod_pur= $row['prod_pur'];
      $total = $row['total'];
      $contact = $row['contact'];
      $date = $row['date'];
     

      
      
  }
?>

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
          <h3 style="text-align: center;"><strong>Update Creditors</strong></h3>
        </div><!--end of title-->
        <div class="1-part">
          <form method="post" action="update_creditor.php?ID=<?php echo $cred_id ?>" style="align-self: center;">
             <label>Enter Creditors Name:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input type="text" class="form-control" placeholder="Enter Creditors Name" name="cred_name" required="required" value="<?php echo $cred_name ?>" ><br>
            </div>
             <label>Enter Product purchased :</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
             <textarea rows="4" cols="50" placeholder="Enter products purchased" name="prod_pur" class="form-control"><?php echo $prod_pur ?>
            
            </textarea>            
             </div>
             <label>Enter total cost:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id="email" type="text" class="form-control" placeholder="Enter total cost " name="total" required="required" value="<?php echo $total ?>" ><br>
            </div>
            
            <label>Enter Contact:</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil "></i></span>
              <input id='password' type="tel" class="form-control" placeholder="Enter telphone no" name="contact" required="required" value="<?php echo $contact ?>" ><br>

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
