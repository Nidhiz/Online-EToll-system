<?php
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['USERNAME']);
$password=mysql_escape_string($_POST['PASSWORD']);
if (!$_POST['USERNAME'] | !$_POST['PASSWORD'])
{
echo ("<SCRIPT LANGUAGE='Javascript'>
	window.alert('You didnot complete all of the required fields')
	window.location.href='usersignup.php'
	</script>");
	exit();
}
$sql = mysql_query("select * from demo1 where username='$username' AND password='$password'");
if (mysql_num_rows($sql)>0)
{
echo ("<SCRIPT LANGUAGE='Javascript'>
	window.alert('Login Successfully.')
	window.location.href='usersignup.php'
	</script>");
exit();
}

else {
echo ("<SCRIPT LANGUAGE='Javascript'>
	window.alert('wrong username password combination, Please re-enter.')
	window.location.href='usersignup.php'
	</script>");
	exit();
	
}
}
else{
	
}
?>