<?php
$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("std_shangrilla",$con) or die("Cant select database");			

$id=$_REQUEST['id'];
$query=mysql_query("delete FROM order_user where order_id='$id'")or die("Error in Query".mysql_error());

if($query)
header("Location: view_online_orders.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="view online orders.php";
					 </script>';

?>
