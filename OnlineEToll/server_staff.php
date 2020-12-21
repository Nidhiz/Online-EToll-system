<?php
session_start();

// initializing variables
$usname = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'forms2');

// REGISTER USER
if (isset($_POST['save'])) {
  // receive all input values from the form

 $father = mysqli_real_escape_string($db,$_POST['FATHER_NAME']);
 $gender =mysqli_real_escape_string($db, $_POST['GENDER']);
 $email = mysqli_real_escape_string($db,$_POST['EMAIL']);
$address = mysqli_real_escape_string($db,$_POST['ADDRESS']);
  $city=mysqli_real_escape_string($db, $_POST['CITY']);
    $state= mysqli_real_escape_string($db,$_POST['STATE']);
$po_verify =mysqli_real_escape_string($db, $_POST['POLICE_VERIFICATION']);
  $usname = mysqli_real_escape_string($db,$_POST['USERNAME']);

 $full = mysqli_real_escape_string($db,$_POST['FULL_NAME']);
  $dob = mysqli_real_escape_string($db,$_POST['DATE_OF_BIRTH']);
  $phno =mysqli_real_escape_string($db, $_POST['PHONE_NO']);
  $graduation =mysqli_real_escape_string($db, $_POST['GRADUATION']);
    $pin =mysqli_real_escape_string($db, $_POST['PIN_CODE']);
	  $country =mysqli_real_escape_string($db, $_POST['COUNTRY']);
  $post =mysqli_real_escape_string($db, $_POST['POST']);
  $crime = mysqli_real_escape_string($db,$_POST['CRIME_RECORD']);
 $passw = mysqli_real_escape_string($db,$_POST['PASSWORD']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
    
	 if (empty($father)) { array_push($errors, "<span style='color:red'>Father Name is required</span>"); }
  if (empty($dob)) { array_push($errors, "<span style='color:red'>Date of birth is required</span>"); }
   if (empty($city)) { array_push($errors, "<span style='color:red'>City is required</span>"); }
    if (empty($po_verify)) { array_push($errors, "<span style='color:red'>Police verification is required</span>"); }
  if (empty($email)) { array_push($errors, "<span style='color:red'>Email is required</span>"); }
  if (empty($phno)) { array_push($errors, "<span style='color:red'>Phone Number is required</span>"); }
  if (empty($address)) { array_push($errors, "<span style='color:red'>Address is required</span>"); }
   if (empty($state)) { array_push($errors, "<span style='color:red'>State is required</span>"); }
   if (empty($full)) { array_push($errors, "<span style='color:red'>Full Name is required</span>"); }
    if (empty($graduation)) { array_push($errors, "<span style='color:red'>GRADUATION is required</span>"); }
	 if (empty($country)) { array_push($errors, "<span style='color:red'>COUNTRY is required</span>"); }
	  if (empty($pin)) { array_push($errors, "<span style='color:red'>Pin code is required</span>"); }
	   if (empty($post)) { array_push($errors, "<span style='color:red'>Post is required</span>"); }
  if (empty($usname)) { array_push($errors, "<span style='color:red'>Username is required</span>"); }
   if (empty($crime)) { array_push($errors, "<span style='color:red'>CRIME RECORD is required</span>"); }
  if (empty($passw)) { array_push($errors, "<span style='color:red'>Password is required</span>"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM demo2 WHERE USERNAME='$usname' OR EMAIL='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['USERNAME'] === $usname) {
      array_push($errors, "<span style='color:red'>Username already exists</span>");
    }

    if ($user['EMAIL'] === $email) {
      array_push($errors, "<span style='color:red'>email already exists</span>");
    }
  }

// Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO demo2(FULL_NAME,GENDER,EMAIL,ADDRESS,CITY,STATE,POLICE_VERIFICATION,USERNAME,FATHER_NAME,DATE_OF_BIRTH,PHONE_NO,GRADUATION,PIN_CODE,COUNTRY,POST,CRIME_RECORD,PASSWORD) VALUES ('$full','$gender','$email','$address','$city','$state','$po_verify','$usname','$father','$dob','$phno','$graduation','$pin','$country','$post','$crime','$passw')";
  	mysqli_query($db, $query);
  	$_SESSION['USERNAME'] = $usname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: staffdetail.php');
  }
}




// LOGIN USER
if (isset($_POST['logg'])) {
  $usname = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $passw = mysqli_real_escape_string($db, $_POST['PASSWORD']);

  if (empty($usname)) {
  	array_push($errors, "Username is required");
  }
  if (empty($passw)) {
  	array_push($errors, "Password is required");
  }

  
  
  
  if (count($errors) == 0) {
  
  	$query = "SELECT * FROM demo2 WHERE USERNAME='$usname' AND PASSWORD='$passw'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['USERNAME'] = $usname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: payed.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>