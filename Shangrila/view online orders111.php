<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <?php include("navigation2.php"); ?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- header begins -->
<div id="header" style="height:auto">
<div id="head_right">
	
</div>    
<div id="head_left">
<div id="logo"><a href="#">Shangrila Cuisine Restaurant & Function Halls</a>
		<h2><a href="#"><h3>we are better.. , we are fresher.. , we are tastier!</h3></a></h2>
    </div>
    <div id="buttons">
           <?php include("navigation3.php"); ?>
		</div>


</div>	
</div>
<div id="main">

  <div id="content">
    <div >
			<h2>Welcome to Our Shangrilla Restaurant Administration!</h2>
		
			<center>  <?php 
			$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("river view",$con) or die("Cant select database");

$query="select * from order_user";
$result=mysql_query($query, $con) or die("Error in query: $query".mysql_error()); 
if(mysql_num_rows($result)<=0)
	echo "No Record found.";
//feedback_id 	feedback_name 	feedback_email 	feedback_phone 	feedback_address 	feedback_comments

else
	{	echo "<table border='2' bgcolor='ffffdd' cellspacing='2' cellpadding='2' align='center'><caption ><h2>Online Orders</h2></caption>";
		echo "<tr><th>order id</th><th>order No</th><th>user id</th><th>menu catagory name</th><th>quantity</th><th>price</th><th>date</th><th>menu name</th><th>Delete</th></tr>";
	
		while($rows=mysql_fetch_array($result))
		{	echo "<tr>
			<td>".$rows['order_id']."</td><td>".$rows['order_no']."</td><td>".$rows['user_id']."</td><td>".$rows['menu_catag_name']."</td>
			<td>".$rows['qty']."</td><td>".$rows['price']."</td><td>".$rows['date']."</td><td>".$rows['menu_name']."</td>
			
			<td><a href='delete_online orders.php?id=".$rows['order_id']."' onclick='return confirm(&quot Are you sure want to delete?&quot;)'>Delete</a></td>
			
			
			</tr>" ; 
		}
		echo "<tr><td colspan='2' align='center'></table>" ;
	}
	
echo '	
</center><br /><center>';
//<h3>Product Picture<input type="file" name="file" id="file" /></h3><br />
?>
<a href="admin.php" class="button" style="width:150px; margin:10px;"><em><b>Back to Admin Page</b></em></a> 
</center>
					
				
    </div>
    <!-- content ends -->
<!-- footer begins --><!-- footer ends -->
</div>
</div>
</body>
</html>
