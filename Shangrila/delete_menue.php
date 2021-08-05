<?php
$con=mysql_connect("localhost","root","pakistan") or die("Cant connect");
			$db=mysql_select_db("shang_db",$con) or die("Cant select database");			

$id=$_GET['id'];
$query=mysql_query("DELETE FROM menus where menu_id = '".$id."'")or die("Error in Query".mysql_error());

if($query)
header("Location: admin_Menu_catagory.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="admin_Menu_catagory.php";
					 </script>';

?>
