<?php
 session_start();
 $conn = mysqli_connect('localhost','root','','jirani_db');
  if (mysqli_connect_errno()) {
  	echo " error occured:" . mysqli_connect_errno();
  }
 $query = 'SELECT * FROM debtors';
 
 $result = mysqli_query($conn, $query);

 $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
  var_dump($fetch);


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>View Debtors | Jirani supermarket</title>
  	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
     <div class="container">
     	<h1>All Creditors</h1>
     	<div class="table-responsive">
     	<table border="1" class="table" >
     		<thead>
     			<tr>
     				<th>Debtors Name</th>
     				<th>Product supplied</th>
     				<th>Amount to be paid</th>
     				<th>Email address</th>
     				<th>Telphone Number</th>
            <th>Agreed period of payment</th>
            <th>Date Created</th>
     			</tr>
     		</thead>
     		<?php foreach($fetch as $fetch): ?>
     		<tbody>
     			<tr>
     				<td><?php echo $fetch['deb_name']; ?> </td>
     				<td> <?php echo $fetch['prod_sup']; ?> </td>
     				<td> <?php echo $fetch['amount']; ?> </td>
     				<td> <?php echo $fetch['email']; ?>  </td>
     				<td> <?php echo $fetch['tel_num']; ?> </td>
            <td> <?php echo $fetch['pay_period']; ?> </td>
            <td> <?php echo $fetch['date']; ?> </td>
     			</tr>
     		</tbody>
     	<?php endforeach; ?>
     	</table>
     </div>
     </div>
  </body>
  </html>

