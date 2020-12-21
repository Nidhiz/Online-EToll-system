<?php
session_start();

// initializing variables
$uname = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'forms2');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form

 $name = mysqli_real_escape_string($db,$_POST['NAME']);
 $dob = mysqli_real_escape_string($db,$_POST['DATE_OF_BIRTH']);
$gender = mysqli_real_escape_string($db,$_POST['GENDER']);
  $email = mysqli_real_escape_string($db,$_POST['EMAIL']);
  $phno = mysqli_real_escape_string($db,$_POST['PHONE_NO']);
  $address =mysqli_real_escape_string($db, $_POST['ADDRESS']);
  $driver = mysqli_real_escape_string($db,$_POST['DRIVING_LICENSE_NO']);
  $uname = mysqli_real_escape_string($db,$_POST['USERNAME']);
  $pass = mysqli_real_escape_string($db,$_POST['PASSWORD']);
  
  
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
    if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($dob)) { array_push($errors, "Date of birth is required"); }
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phno)) { array_push($errors, "Phone Number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($driver)) { array_push($errors, "Driving License Number is required"); }
  if (empty($uname)) { array_push($errors, "Username is required"); }
  if (empty($pass)) { array_push($errors, "Password is required"); }
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM demo1 WHERE USERNAME='$uname' OR EMAIL='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['USERNAME'] === $uname) {
      array_push($errors, "Username already exists");
    }

    if ($user['EMAIL'] === $email) {
      array_push($errors, "email already exists");
    }
  }

// Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  

  	$query = "INSERT INTO demo1 (NAME,DATE_OF_BIRTH,GENDER,EMAIL,PHONE_NO,ADDRESS,DRIVING_LICENSE_NO,USERNAME,PASSWORD) VALUES ('$name','$dob','$gender','$email','$phno','$address','$driver','$uname','$pass')";
  	mysqli_query($db, $query);
  	$_SESSION['USERNAME'] = $uname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: user.php');
  }
}




// LOGIN USER
if (isset($_POST['login'])) {
  $uname = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $pass = mysqli_real_escape_string($db, $_POST['PASSWORD']);

  if (empty($uname)) {
  	array_push($errors, "<span style='color:red'>Username is required</span>");
  }
  if (empty($pass)) {
  	array_push($errors, "<span style='color:red'>Password is required</span>");
  }

  
  
  
  if (count($errors) == 0) {

  	$query = "SELECT * FROM demo1 WHERE USERNAME='$uname' AND PASSWORD='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['USERNAME'] = $uname;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: paytoll.php');
  	}else {
  		array_push($errors, "<span style='color:red'>Wrong username/password combination</span>");
  	}
  }
}

?>