<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die
('could not created:'.mysql_error());
}
$db=mysql_select_db("shang_db",$con) ; 



$insrt="INSERT INTO feedback (feedback_name,feedback_email,feedback_phone,feedback_address,feedback_comments)
VALUES ('".$_POST[realname]."','".$_POST[email]."','".$_POST[phone]."','".$_POST[address]."','".$_POST[comment]."')";

mysql_query("INSERT INTO `feedback` (`feedback_name`,`feedback_email`,`feedback_phone`,`feedback_address`,`feedback_comments`)
			Values('".mysql_real_escape_string($_POST['realname'])."','".mysql_real_escape_string($_POST['email'])."',
					'".mysql_real_escape_string($_POST['phone'])."','".mysql_real_escape_string($_POST['address'])."',
					'".mysql_real_escape_string($_POST['comment'])."')");
					
//mysql_query($insrt); or die ("error");
mysql_close($con);
header('Location:contact.php');
?>