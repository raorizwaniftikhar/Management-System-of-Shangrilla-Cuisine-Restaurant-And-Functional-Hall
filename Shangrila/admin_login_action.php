
<?php
include("connect.php");
$name=$_POST['loginname'];
$psw=$_POST['password'];

$query=mysql_query("SELECT * FROM login where login_name='$name' AND login_password='$psw'")or die("Error in Query".mysql_error());

if(mysql_num_rows($query)<=0)
echo '
					 <script type="text/javascript">
					 alert("Login Name or Password in incorrect. Please try again");
					 window.location="admin_login.php";
					 </script>';
else 
 header('Location:admin.php');
?>
