
<?php
include ('user.php');
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
 $id = $_POST['ID'];
 $name = $_POST['NAME'];
 $dob = $_POST['DATE_OF_BIRTH'];
$gender = $_POST['GENDER'];
  $email = $_POST['EMAIL'];
  $phno = $_POST['PHONE_NO'];
  $address = $_POST['ADDRESS'];
  $driver = $_POST['DRIVING_LICENSE_NO'];
  $uname = $_POST['USERNAME'];
  $password = $_POST['PASSWORD'];
$sql = "INSERT INTO demo1 (ID,NAME,DATE_OF_BIRTH,GENDER,EMAIL,PHONE_NO,ADDRESS,DRIVING_LICENSE_NO,USERNAME,PASSWORD) VALUES ('$id','$name','$dob','$gender','$email','$phno','$address','$driver','$uname','$password')";
 
 if(!mysql_query($sql)){
	 die('Error:' . mysql_error());
	 
 }
 mysql_close();
?>

