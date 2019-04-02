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
 $query = 'SELECT * FROM products';
 
 $result = mysqli_query($conn, $query);
//using foreach loop
 //$fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //  var_dump($fetch);


  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>View products | Jirani supermarket</title>
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
     
      <h2>Search Products</h2>
  <p>Type something in the input field to search the table for product names, quantity or price....:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
      <h1>All Products and Price lists</h1>
      <div class="table-responsive">
      <table border="1" class="table" id="">
        <thead>
          <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category</th>
            <th>Date registered</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>
        </thead>
        <!--<?php //foreach($fetch as $fetch): ?>-->
        <?php
                     while ($row=mysqli_fetch_assoc($result)) {
                      $product_id= $row['product_id'];
                      $product_name= $row['product_name'];
                      $quantity= $row['quantity'];
                      $price = $row['price'];
                      $category = $row['category'];
                      $reg_date = $row['reg_date'];
                     

            ?>
        <tbody id="myTable">
          <tr>
            <td><?php echo $row['product_id']; ?></td>
            <td><?php echo $row['product_name']; ?> </td>
            <td> <?php echo $row['quantity']; ?> </td>
            <td> <?php echo $row['price']; ?> </td>
            <td> <?php echo $row['category']; ?>  </td>
            <td> <?php echo $row['reg_date']; ?> </td>
            <td><a href="edit_product.php?GetID=<?php echo $product_id  ?>" class="btn btn-lg">Edit</a></td><td><a href="delete_product.php?del=<?php echo $product_id  ?>" class="btn btn-lg btn-warning" onclick="return confirm('Are you sure you want to delete this record?');">delete</a></td>

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

