<?php 
  session_start(); 

  if (!isset($_SESSION['USERNAME'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: user.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['USERNAME']);
  	header("location: user.php");
  }
?>

<script type="text/javascript">
function get_options() {
var e = document.getElementById("TYPE OF JOURNEY");
var strUser = e.options[e.selectedIndex].value;
document.getElementById('amount').value=e.options[e.selectedIndex].value;	
} 

</script>

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
    	  <ul class="nav navbar-nav navbar-right">
      <li><a href="user.php" ><span class="glyphicon glyphicon-log-out"></span>User Log out</a>
  </li>
  </ul>
  </div>
</nav>
<center><h1>PAY TOLL</h1><br>
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['USERNAME'])) : ?>
    	<center><p>Welcome <strong><?php echo $_SESSION['USERNAME']; ?></strong></p>
    	
    <?php endif ?>

	
	<form action="demo3.php" method="post">

 <table width="420px">
 <tr>
 <td>
 	 <label for="BOOTH ID">BOOTH ID</label> </td>
     <td>
	 <b><input type="text" value="007" readonly ></b><br/> <br/></td>
	 </tr>
	 
	 
 <tr>
     <td>
	 	 <label for="TRANSACTION_NO">TRANSACTION NO</label>     </td>
<td>
 <input type="text" name="TRANSACTION_NO"  ><br/> <br/> </td>
	 </tr>

 <tr>
     <td>
	 <label for="DATE">DATE </label>	 </td>
	 <td>
<input type="date" name="DATE"><br/> <br/></td>
	 </tr>
	 

 <tr>
     <td>
    <label for="VEHICLE_TYPE ">VEHICLE TYPE</label></td>
	<td>
    <select id="VEHICLE_TYPE" name="VEHICLE_TYPE">
      <option value="LIGHT MOTOR VEHICLE">LIGHT MOTOR VEHICLE</option>
      <option value="LIGHT GOODS VEHICLE">LIGHT GOODS VEHICLE</option> 
	  <option value="BUS OR TRUCK(2 AXLES)">BUS OR TRUCK(2 AXLES)</option> 
	  <option value="3 AXLES COMMERCIAL VEHICLE">3 AXLES COMMERCIAL VEHICLE</option> 
	  <option value="FOUR TO SIX AXLES">FOUR TO SIX AXLES</option>
	  <option value="7 OR MORE AXLES">7 OR MORE AXLES</option> 
<option value="MONTHLY PASS FOR VEHICLES">MONTHLY PASS FOR VEHICLES</option></select> <BR/>	 <br/></td>
	 </tr>

 <tr>
     <td>	 
<label for="TYPE OF JOURNEY">TYPE OF JOURNEY</label></td><td>
    <select id="TYPE OF JOURNEY" name="TYPE_OF_JOURNEY" onclick="get_options();">
      <option value="100">SINGLE JOURNEY</option>
      <option value="200">RETURN JOURNEY</option>
	  <option value="300">MULTIPLE JOURNEY</option>
	  <option value="500">COMMERCIAL VEHICLE IN DISTRICT</option>
    </select> <br/> <br/>
</td>
	 </tr>

	<tr>
     <td>
	 <label for="VEHICLE NO">VEHICLE NO</label></td>
<td>
  <input type="text" name="VEHICLE_NO"><br/> <br/></td>
	 </tr>

	 <tr>
     <td>
	 	 <label for="AMOUNT">AMOUNT</label></td><td>
<input type="text" id="amount"name="AMOUNT"><br/> <br/> 
</td>
	 </tr>
	 <tr>
	   <td><label for="ENTER CARD NUMBER">CARD NUMBER </td>
	   <td><input type="text" id="AMOUNT"name="card_no"></td>
    </tr>
</table>
<div class="row">
  <div class="col-l-6"> 
<button id="myButun" type="submit" class="butoon butoon" >PAYMENT</button>
<script type="text/javascript">
    document.getElementById("myButun").onclick = function () 
	{
        location.href = "payment.php";
    };
</script>

	</div>
	<div class="col-l-6"> 
<button id="myButon" type="reset" class="butoon butoon" >CANCEL</button></center>


<!--<script type="text/javascript">
    document.getElementById("myButon").onclick = function () 
	{
        location.href = "user.php";
    };
</script>-->

</div>
</div>
	</form>

</body>
</html>
