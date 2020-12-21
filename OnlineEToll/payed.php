<?php 
  session_start(); 

  if (!isset($_SESSION['USERNAME'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: staff.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['USERNAME']);
  	header("location: staff.php");
  }
?>

<?php  
 mysql_connect('localhost','root','');
 mysql_select_db('forms2');
 
 if(isset($_REQUEST["delid"]))
 {
	 $delid=$_REQUEST["delid"];
	 mysql_query("delete from demo3 where ORDER_ID='$delid'");
 }
 
$query=mysql_query("SELECT * FROM demo3");
$rowcount=mysql_num_rows($query);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<style>
.btn {
    background-color:#00ff;
   
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10pxpx;
    margin: 2px 1px;
    cursor: pointer;

}
</style>
</head>

<body>
  <div id="title"><h2><center>TOLL ON THE WAY</center></h2></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
		   <li><a href="home.php">HOME</a></li>

	   <li  class="active"><a href="#">STAFF</a></li>
      <li><a href="#">USER</a></li>
      
      <li><a href="#">ADMIN</a></li>
      
    </ul>
  </div>
</nav>
<CENTER><table width="900px" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>ORDER ID</th>
<th>VEHICLE TYPE</th>
<th>VEHICLE NO</th>
<th>TYPE OF JOURNEY</th>
<th>DATE</th>
<th>PAYED</th>
</tr>

<?php

for($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);
?>
<tr>
<td><?php echo $row['ORDER_ID'] ?></td>
<td><?php echo $row['VEHICLE_TYPE'] ?></td>
<td><?php echo $row['VEHICLE_NO'] ?></td>
<td><?php echo $row['TYPE_OF_JOURNEY'] ?></td>
<td><?php echo $row['DATE'] ?></td>
 <td><a href="payed.php?delid=<?php echo $row["ORDER_ID"]?>" type="submit" class="butoon btn">Paid</a></td>
	</tr>
<?php
	}
?>
</table>
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['USERNAME'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['USERNAME']; ?></strong></p>
    	<p> <a href="payed.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</body>
</html>