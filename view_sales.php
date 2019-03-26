<?php 
session_start();
if (!isset($_SESSION['x'])) {
  echo "ACCESS DENIED PLEASE LOGIN ....";
echo "<a href=login.php>Login</a>";
  exit();
}
else{
  $email = $_SESSION['x'];
 // echo "<center><h3>LOGINED IN AS : $email<br>Welcome</h3></center>";
}
$conn = mysqli_connect('localhost','root','','jirani_db');
 if (mysqli_connect_errno()) {
 	echo "Error occured". mysqli_connect_errno();
 }

 $query = 'SELECT * FROM sales';
  
  $result= mysqli_query($conn, $query);
   $fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
  // var_dump($fetch);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>View Sales | Jirani Supermarket</title>
 	<meta charset="utf-8">
 	<meta  name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 </head>
 <body>
   <h3 style="color: green;"><center> Logined as <?php echo $email ?></center></h3>
  <center><h3 style="color: green;"><?php echo "Time Logined" .  date('Y/m/d h:m:s'); ?></h3></center>
   <div class="container">
    <h2>Search sales</h2>
    <p>Enter keyword like money or dates</p>\
    <input type="text" name="" class="form-control" id="myInput" placeholder="Search...">
   	<h1 style="text-align: center;">All Sales</h1>
   	<div class="table-responsive">
   		<table class="table" border="1" cellspacing="1" style="border-radius: unset;">
   			<thead>
   				<tr>
   					<th>Total money collected in Notes</th>
   					<th>Total money collected in Coins</th>
   					<th>Created Date</th>
   				</tr>
   			</thead>
   			<?php foreach($fetch as $fetch): ?>
   			<tbody id="myTable">
   				<tr>
   					<td><?php echo $fetch['notes']; ?></td>
   					<td> <?php echo $fetch['coins']; ?> </td>
   					<td> <?php echo $fetch['date']; ?> </td>
   				</tr>
   			</tbody>
   		<?php endforeach; ?>
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