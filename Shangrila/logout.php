<?php 
include("connect.php");
session_start();
if(isset($_SESSION["user"]))
session_destroy();
	header("Location: home.php");
mysql_close($connect);

?>

