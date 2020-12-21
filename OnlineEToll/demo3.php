<?php

include('payment.php');
define('DB_NAME','forms2');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST,DB_USER, DB_PASSWORD);

if (!$link) {
  die('could not connect: ' . mysql_error());
  
}
 $db_selected = mysql_select_db(DB_NAME, $link);
 
 if(!$db_selected) {
 die('can\'t use ' . DB_NAME . ': '. mysql_error());

 }
 $tra = $_POST['TRANSACTION_NO'];
 $date = $_POST['DATE'];
 $vhi = $_POST['VEHICLE_TYPE'];
 $type = $_POST['TYPE_OF_JOURNEY'];
 $vehicle = $_POST['VEHICLE_NO'];
 $amount = $_POST['AMOUNT'];
	$card_no=$_POST['card_no'];
 

$sql = "INSERT INTO demo3 (TRANSACTION_NO,DATE,VEHICLE_TYPE,TYPE_OF_JOURNEY,VEHICLE_NO,AMOUNT) VALUES ('$tra','$date','$vhi','$type','$vehicle','$amount')";  

$query1="select * from demo4 where balance>$amount and card_number=$card_no";            
 
 if(!mysql_query($sql)){
	 die('Error:' . mysql_error());
	 
 }

$result=mysql_query($query1);
if($row=mysql_fetch_array($result))
		{
	$query2="update demo4 set balance=balance-$amount where card_number=$card_no";
	 mysql_query($query2);	
		}
else
	{
	echo "Insufficient Balance in Your Account please Enter Another Card Number..........!";
	}		
	
	
	
 
mysql_close();
?>