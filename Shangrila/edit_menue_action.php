<?php
$con=mysql_connect("localhost","root","pakistan") or die("Cant connect");
			$db=mysql_select_db("shang_db",$con) or die("Cant select database");			

include("connect.php");
	
	  $menue_name = $_POST['txt_name'];
	  $id = $_GET['id'];
	  if($menue_name != "") 
	  { 
		
		$sql_insert_order=mysql_query("UPDATE menus set menu_name='".$menue_name."' where menu_id='".$id."' ")or die("Error in inserting order details".mysql_error());
		header("Location: admin_Menu_catagory.php");
			
			
	  }
	  else
	  {
	   header("Location: admin_Menu_catagory.php");
	  }
			
	mysql_close($con);

?>
