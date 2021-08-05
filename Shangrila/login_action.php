
<?php
include("connect.php");
$login_name=$_POST['login'];
$pass=$_POST['pass'];
$result=mysql_query("SELECT * FROM login where login_name='$login_name' and login_password='$pass'");
if(mysql_num_rows($result)<=0)
header('Location: login.php');
else
{
			session_start();
			$_SESSION['user']=$login_name;
			header("Location: home.php");
}
mysql_close($con);
?>