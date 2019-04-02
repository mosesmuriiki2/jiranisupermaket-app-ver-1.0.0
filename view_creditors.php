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
 $query = 'SELECT * FROM creditors';
 
 $result = mysqli_query($conn, $query);
//using foreach loop
 //$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //  var_dump($fetch);


  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>View creditors | Jirani supermarket</title>
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
     
      <h2>Search Creditors</h2>
  <p>Type something in the input field to search the table for first names, last names or phone number:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
     	<h1>All Creditors</h1>
     	<div class="table-responsive">
     	<table border="1" class="table" id="">
     		<thead>
     			<tr>
            <th>Creditors Id</th>
     				<th>Creditors Name</th>
     				<th>Product purchased</th>
     				<th>Total Amount</th>
     				<th>Contact</th>
     				<th>Date</th>
            
            <th>Dpadate</th>
            <th>Delete</th>

     			</tr>
     		</thead>
     		<!--<?php //foreach($fetch as $fetch): ?>-->
        <?php
                     while ($row=mysqli_fetch_assoc($result)) {
                      $cred_id= $row['cred_id'];
                      $cred_name= $row['cred_name'];
                      $prod_pur= $row['prod_pur'];
                      $total = $row['total'];
                      $contact = $row['contact'];
                      $date = $row['date1'];
                     

            ?>
     		<tbody id="myTable">
     			<tr>
            <td><?php echo $row['cred_id']; ?></td>
     				<td><?php echo $row['cred_name']; ?> </td>
     				<td> <?php echo $row['prod_pur']; ?> </td>
     				<td> <?php echo $row['total']; ?> </td>
     				<td> <?php echo $row['contact']; ?>  </td>
     				<td> <?php echo $row['date1']; ?> </td>
            <td><a href="edit_creditor.php?GetID=<?php echo $cred_id  ?>" class="btn btn-lg">edit</a></td><td><a href="delete_creditor.php?del=<?php echo $cred_id  ?>" class="btn btn-lg btn-warning" onclick="return confirm('Are you sure you want to delete this record?');">delete</a></td>

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

