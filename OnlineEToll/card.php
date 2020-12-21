
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
	   <li><a href="home.php">HOME</a></li>    </ul>

	       	  <ul class="nav navbar-nav navbar-right">

      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
      
	</ul>
  </div>
</nav>
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
 
  
  
<body>
<center>
<form action="card.php" method="post">
<table width="400px">
<tr>
<td>
	 <label for="CARD NUMBER">CARD NUMBER</label>

</td>
<td>
<input type="text" name="CARD_NUMBER" required><br/> <br/></td>
</tr> 
<tr>
<td>
	 <label for="EXPIRE DATE">EXPIRE DATE</label>

</td><td>
  
  <input type="text" name="EXPIRE_DATE" required ><br/> <br/></td>
</tr>  
 <tr>
<td>
	 <label for="CCV">CCV</label>

</td>
<td>
  <input type="text" name="CCV" required="required"><br/> <br/> </td>
  </tr>
<tr>
<td>
	 <label for="NAME ON CARD">NAME ON CARD</label>

</td>
<td>
  <input type="text" name="NAME_ON_CARD"><br/> <br/></td></tr></table> </center>
</form>
<center><button id="myButoon" type="submit" name="btn" class="butoon butoon" >PAY</button>

<script type="text/javascript">
    document.getElementById("myButoon").onclick = function () 
	{
        location.href = "payment.php";
    };
</script><center>
</body>
</html>