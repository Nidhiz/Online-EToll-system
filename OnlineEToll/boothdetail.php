<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:adminlogin.php");
	exit;
}
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
    <ul class="nav navbar-nav">
	   <li><a href="staffdetail.php">STAFF DETAILS</a></li>
     
        <li><a href="pay.php">PAYMENT</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="adminlogin.php"  ><span class="glyphicon glyphicon-log-out"></span>Log out</a>
  </li>
  </ul>
  </div>
</nav>
<center><h1><b>BOOTH DETAIL</b></h1></center><br/>
<form> 
<div class="row">
  <div class="col-md-2"> 
</div>
  <div class="col-md-5"> 
    <table width="450px">
	<tr>
     <td>
	 <label for="ID">ID</label>
	 </td>
	 <td>
	  <b><input type="text" name="name" value="007" readonly><br/> <br/> 
	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="STATE">STATE</label>
	 </td>
	 <td>
	 <b> <input type="text" name="name" value="MAHARASHTRA" readonly><br/><br/>  
	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="PHONE NO.">PHONE NO.</label>
	 </td>
	 <td>
	 <b><input type="text" name="name" value="9876543210" readonly><br/> <br/> 
	 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="WEBSITE ">WEBSITE </label>
	 </td>
	 <td>
	 <b>  <input type="text" name="name" value="www.tollontheway.com" readonly><br/> <br/> 
	 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="MANAGER NAME ">MANAGER NAME </label>
	 </td>
	 <td>
	 <b> <input type="text" name="name" value="Mr. Vikas Gupta" readonly><br/> <br/> 
	 </td>
	 </tr>
	</table>	
</div>
<div class="col-md-5"> 
<table width="450px">
	 <tr>
     <td>
	 <label for="NAME ">NAME </label>
	 </td>
	 <td>
	 <b><input type="text" name="name" value="Nashirabad Toll Naka" readonly><br/> <br/>  
	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="CITY ">CITY </label>
	 </td>
	 <td>
        <b><input type="text" name="name" value="Jalgaon" readonly><br/> <br/> 
	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="EMAIL  ">EMAIL  </label>
	 </td>
	 <td>
      <b> <input type="text" name="name" value="tollontheway007@gmail.com" readonly><br/> <br/> 
	 </td>
	 </tr>

	 <tr>
     <td>
	 <label for="NO. OF STAFF  ">NO. OF STAFF  </label>
	 </td>
	 <td>
      <b> <input type="text" name="name" value="10" readonly><br/> <br/> 
	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="MANAGER CONTACT NO.  ">MANAGER CONTACT NO. </label>
	 </td>
	 <td>
     <b><input type="text" name="name" value="9586741320" readonly><br/> <br/> 
	 </td>
	 </tr>

</div>
</table>
</div>
</form>
</body>
</html>