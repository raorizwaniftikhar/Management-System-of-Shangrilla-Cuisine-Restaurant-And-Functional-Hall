<?php 
session_start();
if(!(isset($_SESSION['user'])))
header("Location: delivery_login.php");
else
{
?>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="Js/jquery-1.3.2.min.js" type="text/javascript"></script> 
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="Js/jquery.js"></script>
  <div align="center">

	<?php
	include("connect.php");
	$user_name=$_REQUEST['name'];
$result=mysql_query("SELECT * FROM login where login_name='$user_name'");
$row=mysql_fetch_array($result);
	$user_id=$row['user_id'];
	$qryorder=mysql_query("SELECT * FROM order_user where user_id='$user_id'");
	$i=1;
	echo "<center><table><caption><h2>Your Order:</h2></caption><th>No</th><th>Item Name</th><th>Price</th><th>Quantity</th><th>Date & Time</th></tr>";
	while($roworder=mysql_fetch_array($qryorder))
	{	
		echo "<tr><td>".$i."</td><td>".$roworder['menu_name']."</td><td>".$roworder['price']."</td><td>".$roworder['qty']."</td><td>".$roworder['date']."</td></tr>";
		$i=$i+1;
	}
	echo "</table>";
	
?>
<center>
</center>
</div>
<?php } ?>