<?php
 session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
  //echo "<center><h3>LOGINED IN AS : $email<br>Welcome</h3></center>";
}
 
 $conn = mysqli_connect('localhost','root','','jirani_db');
  if (mysqli_connect_errno()) {
  	echo " error occured:" . mysqli_connect_errno();
  }
 $query = 'SELECT * FROM debtors';
 
 $result = mysqli_query($conn, $query);

// $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //var_dump($fetch);


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
     <h3 style="color: green;"><center> Logined as <?php echo $email ?></center></h3>
  <center><h3 style="color: green;"><?php echo "Time Logined" .  date('Y/m/d h:m:s'); ?></h3></center>
     <div class="container">
      
      
         <h2>Search Debtors from the table</h2>
      <input type="text" name="" class="form-control" id="myInput" placeholder="Search..">

      <br>
     	<h1>All Creditors</h1>
     	<div class="table-responsive">
     	<table border="1" class="table" >
     		<thead>
     			<tr>
            <th>Debtors Id</th>
     				<th>Debtors Name</th>
     				<th>Product supplied</th>
     				<th>Amount to be paid</th>
     				<th>Email address</th>
     				<th>Telphone Number</th>
            <th>Agreed period of payment</th>
            <th>Date Created</th>
            <th>Update</th>
            <th>Action</th>
     			</tr>
     		</thead>
     		 <?php
                     while ($row=mysqli_fetch_assoc($result)) {
                      $deb_id= $row['deb_id'];
                      $deb_name= $row['deb_name'];
                      $prod_sup= $row['prod_sup'];
                      $amount = $row['amount'];
                      $email = $row['email'];
                      $tel_num = $row['tel_num'];
                      $pay_period = $row['pay_period'];
                      $date1 = $row['date1'];

                     

            ?>
     		<tbody id="myTable">
     			<tr>
            <td><?php echo $row['deb_id']; ?> </td>
     				<td><?php echo $row['deb_name']; ?> </td>
     				<td> <?php echo $row['prod_sup']; ?> </td>
     				<td> <?php echo $row['amount']; ?> </td>
     				<td> <?php echo $row['email']; ?>  </td>
     				<td> <?php echo $row['tel_num']; ?> </td>
            <td> <?php echo $row['pay_period']; ?> </td>
            <td> <?php echo $row['date1']; ?> </td>
            <td><a href="edit.debtor.php?GetID=<?php echo $deb_id  ?>" class="btn btn-lg">edit</a></td>
            <td><a href="delete_debtor.php?del=<?php echo $deb_id  ?>" class="btn btn-lg btn-warning" onclick="return confirm('Are you sure you want to delete this record?');">delete</a></td>

     			</tr>
     		</tbody>
     	<?php 
}
       ?>
     	</table>
     </div>
     </div>
     <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  </body>
  </html>

