<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <?php include("river view test/navigation2.php"); ?></head>
<body>
<?php

$con=mysql_connect("localhost","root","") or die("could not created");
$db=mysql_select_db("river view",$con);
$result=mysql_query("SELECT * FROM user_catagory");
while($row=mysql_fetch_array($result)){

if($_POST['firstname']==$row['user_Fname'] And $_POST['password']==$row['user_Pword'])
$login=header(
'Location:signin to order.php');
else
$login=header(
'Location:create account.php');
}
echo $login;
mysql_close($con);
?>
</body>
</html>