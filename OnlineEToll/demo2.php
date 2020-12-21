<?php
include ('staffdetail.php');
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
 $father = $_POST['FATHER_NAME'];
 $gender = $_POST['GENDER'];
 $email = $_POST['EMAIL'];
$address = $_POST['ADDRESS'];
  $city= $_POST['CITY'];
    $state= $_POST['STATE'];
$po_verify = $_POST['POLICE_VERIFICATION'];
  $uname = $_POST['USERNAME'];

 $full = $_POST['FULL_NAME'];
  $dob = $_POST['DATE_OF_BIRTH'];
  $phno = $_POST['PHONE_NO'];
  $graduation = $_POST['GRADUATION'];
    $pin = $_POST['PIN_CODE'];
	  $country = $_POST['COUNTRY'];
  $post = $_POST['POST'];
  $crime = $_POST['CRIME_RECORD'];
  $pass = $_POST['PASSWORD'];

$sql = "INSERT INTO demo2 (FULL_NAME,GENDER,EMAIL,ADDRESS,CITY,STATE,POLICE_VERIFICATION,USERNAME,FATHER_NAME,DATE_OF_BIRTH,PHONE_NO,GRADUATION,PIN_CODE,COUNTRY,POST,CRIME_RECORD,PASSWORD) VALUES ('$full','$gender','$email','$address','$city','$state','$po_verify','$uname','$father','$dob','$phno','$graduation','$pin','$country','$post','$crime','$pass')";
 
 if(!mysql_query($sql)){
	 die('Error:' . mysql_error());
	 
 }
 
mysql_close();
?>