<?php  
 mysql_connect('localhost','root','');
 mysql_select_db('forms2');
 
$sql="SELECT * FROM demo2";
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
 <style>
.butoon {
    background-color: blue;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
.btn {
    background-color:#00ff;
   
    border: none;
    color: white;
    padding: 5px 10px;
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
	   <li class="active"><a href="#">STAFF DETAILS</a></li>
   
	        <li><a href="pay.php">PAYMENT</a></li>

      
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="adminlogin.php" ><span class="glyphicon glyphicon-log-out"></span>Log out</a>
  </li>
  </ul>
  </div>
</nav>
<center><h1>STAFF LIST</h1></center><br>
<h3>STAFF LIST</h3><br>
<button id="myButton" type="submit" class="butoon butoon" >ADD STAFF DETAILS</button><br>

<script type="text/javascript">
    document.getElementById("myButton").onclick = function () 
	{
        location.href = "addstaff.php";
    };
</script><br>
<table width="600px" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>ID</th>
<th>Staff Name</th>
<th>Phone No</th>
<th>Staff Post</th>
<th>Username</th>

</tr>

<?php
while ($demo2=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$demo2['ID']."</td>";
	echo "<td>".$demo2['FULL_NAME']."</td>";
	echo "<td>".$demo2['PHONE_NO']."</td>";
	echo "<td>".$demo2['POST']."</td>";
	echo "<td>".$demo2['USERNAME']."</td>";
	echo "</tr>";
}
?>


</table>


</body>
</html>