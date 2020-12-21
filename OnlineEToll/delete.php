<?php
include('config.php');

if (isset($_GET['ID']) && is_numeric($_GET['ID']))
{
$id = $_GET['ID'];

$result = mysql_query("DELETE FROM demo2 WHERE ID=$ID")
or die(mysql_error());

header("Location: view.php");
}
else

{
header("Location: view.php");
}
?>
