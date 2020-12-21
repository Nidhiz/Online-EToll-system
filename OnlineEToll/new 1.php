<?php
 
$con = mysql_connect("localhost","root","","forms2");
if(!$con)
{
die('Could not connect:'.mysql_error());
}
mysql_select_db("biz",$con);
 
$mail=$_POST['card'];
 
 
$query = mysql_query("SELECT CARD_NO,NAME_ON_CARD,BALANCE FROM demo4 WHERE CARD_NO = '$card' ");
 
while($row = mysql_fetch_array($query))
    {
   
 echo $row['name'];     
  echo $row['card'];   
   echo $row['bal'];                
    } 
mysql_close($con);
?>
<html>
<body>
<form class="form-signin" role="form" id="form1" action="new 1.php">
      
       <label class="">Name</label>
        <input type="text" class="form-control" placeholder="Your Name" value="" required name="name" id="name" autofocus ><br/>
         <label class="">Email</label>
                <input type="text" class="form-control" name="card" id="card" placeholder="Email address" required > <br/>
                   
            
    
    <label class="">Telephone Number</label>
       <input type="text" class="form-control"  placeholder="Telephone" name="bal" required><br/>
 
<div class="col-md-4 col-md-offset-4">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit Ad</button>
        </div>
</form>
</body>
</html>
