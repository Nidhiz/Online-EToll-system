<?php include('server.php'); ?>
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
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
  
 <!-- <link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<body>
  <div id="title"><h2><center>TOLL ON THE WAY</center></h2></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
	   <li><a href="staffdetail.php">STAFF</a></li>
      <li><a href="user.php">USER</a></li>
      
      </ul>
	  
  </div>
</nav>
<form method="post" action="register.php">
  	<?php include('errors.php'); ?>
<div class="row">

  <div class="col-md-6"> 
  <img src="Images/Toll_booths_in_the_UK.jpg" width="650 px" height="450px">
 </div>
<div class="col-md-6"> 
 <table width="400px">
   
	 <tr> 
     <td>
	 <label for="NAME">NAME</label>
	 </td>
	 <td>
 <input type="text" name="NAME"> <br/> <br/> 
 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="DATE OF BIRTH">DATE OF BIRTH </label>
	 </td>
	 <td>
	 <input type="date" name="DATE_OF_BIRTH" ><br/> <br/> 
	 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="GENDER">GENDER</label>
	 </td>
	 <td>
	 <input type="radio" name="GENDER" value="male" checked>male <input type="radio" name="GENDER" value="female">female <br/> <br/> 
	 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="EMAIL ">EMAIL </label>
	 </td>
	 <td>
 <input type="text" name="EMAIL"> <br/> <br/> 
 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="PHONE_NO.">PHONE NO.</label>
	 </td>
	 <td>
 <input type="text" name="PHONE_NO"> <br/> <br/> 
 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="ADDRESS ">ADDRESS </label>
	 </td>
	 <td>
 <input type="text" name="ADDRESS"> <br/> <br/> 
 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="DRIVING LICENCE NO. ">DRIVING LICENCE NO. </label>
	 </td>
	 <td>
 <input type="text" name="DRIVING_LICENSE_NO"> <br/> <br/> 
  </td>
	 </tr>
	 <tr>
     <td>
	 <label for="USERNAME">USERNAME  </label>
	 </td>
	 <td>
 <input type="text" name="USERNAME"> <br/> <br/> 
 </td>
	 </tr>
	 <tr>
     <td>
	 <label for="PASSWORD">PASSWORD  </label>
	 </td>
	 <td>
<input type="password" name="PASSWORD"> <br/> <br/> 
</td>
</tr>
</table>	  


<div class="input-group">
  	  <button type="submit" class="butoon butoon"  name="reg_user">Register</button>
  	</div></div>
</form>
</div>
</body>
</html>