<?php session_start();?>
<?php
require("connect.php");
$dob=$_POST['birthday']." ".$_POST['day'].",".$_POST['birthday'];
$sql="INSERT INTO user_catagory
	(user_Fname,user_Lname,user_Gender,user_Birthday,user_Email,user_Tph,user_Mbile,user_AdressL1,user_AdressL2,user_Pcode)
	VALUES
	('$_POST[firstname]',
	'$_POST[lastname]',
	'$_POST[gender]',
	'$dob',
	'$_POST[email]',
	'$_POST[teleph]',
	'$_POST[mobile]','$_POST[AdressL1]',
	'$_POST[AdressL2]',
	'$_POST[Pcode]')";
$result=mysql_query($sql) or die("error in inserting".mysql_error());
	if($result)
	{	$last_user_id=mysql_insert_id();
		$sql_insert_login=mysql_query("insert into login set
		user_id='$last_user_id',
		login_name='".$_POST['login_name']."',
		login_password='".$_POST['password']."'")or die("Error in inserting login details".mysql_error());
		if($sql_insert_login)
		{
			session_start();
			$_SESSION['user']=$_POST['login_name'];
			
			header("Location: home.php");
		}
	}
	else
	{
	 echo "Error in inserting whole details";
	}
mysql_close($con);
?>