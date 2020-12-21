<?php 
include('server_staff.php');
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
.btn {
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

	   <li  class="active"><a href="#">STAFF</a></li>
      <li><a href="#">USER</a></li>
      
      <li><a href="#">ADMIN</a></li>
      
    </ul>
  </div>
</nav>
  <div class="container-fluid">
<form method="POST" action="staff.php">
<?php include('errors.php'); ?>
  <div class="form-group">
    <label>User Name</label>
    <input type="Text" class="form-control" name="USERNAME" ><br>
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control" name="PASSWORD" ><br>
  </div>
 

 <div class="form-group">
  	<button type="submit" class="butoon btn" name="logg">Login</button>
  	</div><br>
  	</div>

 </form>
 </body>
 </html>