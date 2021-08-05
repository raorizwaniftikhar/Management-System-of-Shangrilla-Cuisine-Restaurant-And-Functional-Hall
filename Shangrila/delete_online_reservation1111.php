<?php
$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("river view",$con) or die("Cant select database");			

$id=$_GET['id'];
$query=mysql_query("DELETE FROM tbl_reservations where ID = '".$id."'")or die("Error in Query".mysql_error());

if($query)
header("Location: view_online_reservation.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="view_online_reservation.php";
					 </script>';

?>
