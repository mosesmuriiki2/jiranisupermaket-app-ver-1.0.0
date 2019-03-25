<?php
  $conn = mysqli_connect("localhost","root","", "jirani_db");

  if (mysqli_connect_errno()) {
  	//failed
  	echo "Failed to connect". mysqli_connect_errno();
  }
$query = 'SELECT * FROM purchases';
//get result
$result = mysqli_query($conn, $query);
//fetch data
$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($fetch)
//free result

//close connection

?>
<!DOCTYPE html>
<html>
<head>
	<title>View purchases |jirani supermarket</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
<h1 style="text-align: center;">All purchases</h1>
   
      <div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Supplier's Name</th>
        <th>Quantity Purchased</th>
        <th>Amount Paid</th>
        <th>Selling Price</th>
        <th>Contact's</th>
        <th> Date of Purchase</th>
      </tr>
      <?php foreach($fetch as $fetch) :  ?>
    </thead>
    <tbody>
      <tr>
        <td> <?php echo $fetch['prod_name']; ?> </td>
        <td> <?php echo $fetch['sup_name']; ?></td>
        <td> <?php echo $fetch['quan_name']; ?> </td>
        <td> <?php echo $fetch['amount']; ?> </td>
        <td> <?php echo $fetch['sell_price']; ?> </td>
        <td> <?php echo $fetch['contact']; ?> </td>
        <td> <?php echo $fetch['date']; ?> </td>
      </tr>
  
    </tbody>
     <?php endforeach; ?>
  </table>


  
</body>
</html>
