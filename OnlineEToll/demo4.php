<?php


// initializing variables

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'forms2');

if (isset($_POST['btn'])) {
  // receive all input values from the form

 $cn = mysqli_real_escape_string($db,$_POST['CARD_NUMBER']);
 $exp = mysqli_real_escape_string($db,$_POST['EXPIRE_DATE']);
$ccv = mysqli_real_escape_string($db,$_POST['CCV']);
  $nc = mysqli_real_escape_string($db,$_POST['NAME_ON_CARD']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
    if (empty($cn)) { array_push($errors, "Card Number is required"); }
  if (empty($exp)) { array_push($errors, "Expire date is required"); }
   if (empty($ccv)) { array_push($errors, "ccv is required"); }
  if (empty($nc)) { array_push($errors, "Name on card is required"); }
 
if (count($errors) == 0) {
  

  	$query = "INSERT INTO demo4 (CARD_NUMBER,EXPIRE_DATE,CCV,NAME_ON_CARD) VALUES ('$nc','$exp','$ccv','$nc')";
  	mysqli_query($db, $query);
  	
  }
}
?>