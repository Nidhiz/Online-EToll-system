<?php  
 mysql_connect('localhost','root','');
 mysql_select_db('forms2');
 
$sql="SELECT * FROM demo2";
$records=mysql_query($sql);



?>



<html>
<head>
<title>fetch DB</title>
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

<table width="600px" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>ID</th>
<th>Staff Name</th>
<th>Phone No</th>
<th>Staff Post</th>
<th>Username</th>
<th>View</th>
</tr>

<?php
while ($demo2=mysql_fetch_assoc($records)){
	echo "<tr>";
	echo "<td>".$demo2['ID']."</td>";
	echo "<td>".$demo2['FULL_NAME']."</td>";
	echo "<td>".$demo2['PHONE_NO']."</td>";
	echo "<td>".$demo2['POST']."</td>";
	echo "<td>".$demo2['USERNAME']."</td>";
	echo "<td><input name='Submit' type='submit' value='View' class='buton btn'></td>";
	echo "</tr>";
}
?>


</table>
</body>
</html>