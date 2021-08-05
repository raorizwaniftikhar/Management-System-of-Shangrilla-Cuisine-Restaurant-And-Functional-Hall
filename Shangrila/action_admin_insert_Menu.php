<?php
include("connect.php");
$name=$_POST['name'];
$menu_catag=$_POST['menu_catag'];
$query=mysql_query("insert into menus set menu_name='$name' , menu_catag_id='$menu_catag' 
")or die("Error in Query".mysql_error());

if($query)
header("Location: admin_Menu_catagory.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="admin_Menu_catagory.php";
					 </script>';
?>