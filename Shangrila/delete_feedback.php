<?php
$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("std_shangrilla",$con) or die("Cant select database");			

$id=$_GET['id'];
$query=mysql_query("DELETE FROM feedback where feedback_id = '".$id."'")or die("Error in Query".mysql_error());

if($query)
header("Location: view_feedback.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="view_feedback.php";
					 </script>';

?>
