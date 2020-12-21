<?php  
 mysql_connect('localhost','root','');
 mysql_select_db('forms2');
 
$sql="SELECT * FROM demo3";
$records=mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  </head>
  <body>
  <div id="title"><h2><center>TOLL ON THE WAY</center></h2></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
   
	  <ul class="nav navbar-nav navbar-right">
	  <li  class="active"><a href="#">HISTORY</a></li>
      <li><a href="home.php" ><span class="glyphicon glyphicon-log-out"></span>Log out</a>
  </li>
  </ul>
  </div>
</nav>
<h1>ORDER HISTORY</h1><br>
<table width="600px" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>ORDER ID</th>
<th>DATE</th>
<th>VEHICLE NO</th>
<th>AMOUNT</th>

</tr>

<?php
while ($demo3=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$demo3['ORDER_ID']."</td>";
	echo "<td>".$demo3['DATE']."</td>";
	echo "<td>".$demo3['VEHICLE_NO']."</td>";
	echo "<td>".$demo3['AMOUNT']."</td>";
	echo "</tr>";
}
?>


</table>


</body>
</html>