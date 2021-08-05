<?php
$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("river view",$con) or die("Cant select database");			

$id=$_REQUEST['id'];
$query=mysql_query("delete FROM user_catagory where user_id='$id'")or die("Error in Query".mysql_error());

if($query)
header("Location: view_user.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="view_user.php";
					 </script>';

?>
