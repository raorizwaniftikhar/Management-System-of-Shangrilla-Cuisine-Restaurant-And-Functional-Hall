<?php
include("connect.php");
$name=$_POST['name'];
$id=$_REQUEST['id'];
//menu_id 	menu_catag_id 	menu_name
$query=mysql_query("update menus set menu_name='$name' where menu_id='$id'")or die("Error in Query".mysql_error());

if($query)
header("Location: admin_Menu_catagory.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="admin_Menu_catagory.php";
					 </script>';
?>