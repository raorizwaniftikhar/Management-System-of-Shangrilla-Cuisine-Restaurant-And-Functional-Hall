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
			<center><h2>Welcome to Our Shangrila restaurant Administration!</h2></center>
		
			<center>  <?php 
$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("river view",$con) or die("Cant select database");

$query="select * from feedback";
$result=mysql_query($query, $con) or die("Error in query: $query".mysql_error()); 
if(mysql_num_rows($result)<=0)
	echo "No Record found.";
//feedback_id 	feedback_name 	feedback_email 	feedback_phone 	feedback_address 	feedback_comments

else
	{	echo "<table border='2' bgcolor='ffffdd' cellspacing='2' cellpadding='2' align='center'><caption ><h2>Registered Users</h2></caption>";
		echo "<tr><th>Serial #</th><th>Full Name</th><th>Email-ID</th><th>Phone #</th><th>Address</th><th>Comments</th><th>Delete</th></tr>";
	
		while($rows=mysql_fetch_array($result))
		{	echo "<tr>
			<td>".$rows['feedback_id']."</td><td>".$rows['feedback_name']."</td><td>".$rows['feedback_email']."</td><td>".$rows['feedback_phone']."</td>
			<td>".$rows['feedback_address']."</td><td>".$rows['feedback_comments']."</td>
			
			<td><a href='delete_feedback.php?id=".$rows['feedback_id']."' onclick='return confirm(&quot Are you sure want to delete?&quot;)'>Delete</a></td>
			
			
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