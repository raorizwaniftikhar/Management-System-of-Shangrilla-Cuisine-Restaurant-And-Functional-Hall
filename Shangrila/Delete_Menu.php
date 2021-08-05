<?php
include("connect.php");
$id=$_REQUEST['mid'];
echo $id;
$query=mysql_query("delete FROM menus where menu_id='$id'")or die("Error in Query".mysql_error());

if($query)
header("Location: admin_Menu_catagory.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="admin_Menu_catagory.php";
					 </script>';

?>

