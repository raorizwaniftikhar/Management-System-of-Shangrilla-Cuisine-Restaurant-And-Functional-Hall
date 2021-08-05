<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <?php include("navigation2.php"); ?>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die
('could not created:'.mysql_error());
}
$db=mysql_select_db("std_shangrilla",$con) ; 



$insrt="INSERT INTO feedback (feedback_name,feedback_email,feedback_phone,feedback_address,feedback_comments) VALUES 
('$_POST[realname]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[comment]')";

$result=mysql_query($insrt) or die ("error");



echo 
header(
'Location:contact.php');

mysql_close($con);

?>
</body>
</html>