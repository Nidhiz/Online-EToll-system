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
  </head>
  <body>
  <div id="title"><h2><center>TOLL ON THE WAY</center></h2></div>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
	   <li class="active"><a href="staffdetail.html">STAFF DETAILS</a></li>
     
      
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="home.php"  ><span class="glyphicon glyphicon-log-out"></span>Log out</a>
  </li>
  </ul>
  </div>
</nav>
<form method="post" action="addstaff.php">
  	<?php include('errors.php'); ?>
<div class="row">
  <div class="col-md-6"> 
  <table width="450px">
  
 <br/>
	 <tr>
     <td>
	 <label for="FATHER'S NAME">FULL NAME</label>
	 </td>
	 <td>
<input type="text" name="FULL_NAME"><br/> <br/>
</td>
	 </tr>
	 <tr>
     <td>
	 <label for="GENDER">GENDER</label>
	 </td>
	 <td>
     <input type="radio" name="GENDER" value="male" checked>male <input type="radio" name="GENDER" value="female">female<br/> <br/>
  </td>
	 </tr>
	  <tr>
     <td>
	 <label for="EMAIL ">EMAIL </label>
	 </td>
	 <td>
 <input type="text" name="EMAIL"><br/> <br/>
 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="ADDRESS ">ADDRESS </label>
	 </td>
	 <td>
 <input type="text" name="ADDRESS"><br/> <br/>
 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="CITY  ">CITY  </label>
	 </td>
	 <td>
 <input type="text" name="CITY"><br/> <br/>
 	 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="STATE ">STATE </label>
	 </td>
	 <td>
 <input type="text" name="STATE"><br/> <br/>
 </td>
	 </tr>
	  <tr>
     <td>
	 <label for="POLICE VERIFICATION  ">POLICE VERIFICATION  </label>
	 </td>
	 <td>
	 <select id="POLICE VERIFICATION" name="POLICE_VERIFICATION">
      <option value="Yes">YES</option>
      <option value="No">NO</option>
<!--<input type="text" name="POLICE_VERIFICATION">-->
</select><br/> <br/> 
	 </td>
	 </tr>
	   <tr>
     <td>
	 <label for="USERNAME  ">USERNAME  </label>
	 </td>
	 <td>
<input type="text" name="USERNAME"><br/> <br/>
 </td>
	 </tr>
	</table>	  

</div>
<div class="col-md-6"> 
<table width="450px">
   <tr>
     <td>
	 <label for="FATHER NAME  ">FATHER NAME  </label>
	 </td>
	 <td>

<input type="text" name="FATHER_NAME"><br/> <br/>
</td>
	 </tr>
	 
	  <tr>
     <td>
	 <label for="DATE OF BIRTH   ">DATE OF BIRTH   </label>
	 </td>
	 <td>
<input type="date" name="DATE_OF_BIRTH"><br/> <br/>
</td>
	 </tr>
	 
	  <tr>
     <td>
	 <label for="PHONE NO.  ">PHONE NO. </label>
	 </td>
	 <td>
<input type="text" name="PHONE_NO"><br/> <br/>
</td>
	 </tr>
	 
	  <tr>
     <td>
	 <label for="GRADUATION ">GRADUATION </label>
	 </td>
	 <td>
	  <select id="GRADUATION" name="GRADUATION">
      <option value="Under-Graduate">Under-Graduate</option>
      <option value="Post-Graduate">Post-Graduate</option>
      
    </select> <br/> <br/> 
	 </td>
	 </tr>

	 <tr>
     <td>
	 <label for="PIN CODE  ">PIN CODE </label>
	 </td>
	 <td>
	 
	 <input type="text" name="PIN_CODE"><br/> <br/>
</td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="COUNTRY  ">COUNTRY </label>
	 </td>
	 <td>
	 <input type="text" name="COUNTRY"><br/> <br/>
</td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="POST   ">POST </label>
	 </td>
	 <td>
	 <input type="text" name="POST"><br/> <br/>

	 </td>
	 </tr>
	 
	 <tr>
     <td>
	 <label for="CRIME RECORD   ">CRIME RECORD  </label>
	 </td>
	 <td>
   <select id="CRIME RECORD" name="CRIME_RECORD">
      <option value="Yes">YES</option>
      <option value="No">NO</option>
       </select><br/> <br/> 
	 </td>
	 </tr>

	 <tr>
     <td>
	 <label for="PASSWORD">PASSWORD</label>
	 </td>
	 <td>
 <input type="password" name="PASSWORD"><br/> <br/>
 </td>
	 </tr>

  <br>
</div>
</table>
</div>



<!--<input type="submit" value="submit">-->
<center><div class="input-group">
  	  <button type="submit" class="butoon butoon"  name="save">Save</button>
  	</div>
</form>
</body>
</html>