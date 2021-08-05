<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
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
				
		<h2>Welcome to Our Shangrila Restaurant Administration!</h2>
		
		<table width="546" height="46" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
		
		   <tr>
           <th height="42" colspan="6" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:18px; text-align:center"><b>Online Orders</b></th>
           </tr>
      </table>
		<br />
		<table width="546" height="194" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
		
           <tr>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Customer Name</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Menue Category</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Menue</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Quantity</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Price</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</th>
           </tr>
<?php 
$con = mysql_connect("localhost","root","") or die("Cant connect");
$db = mysql_select_db("std_shangrilla",$con) or die("Cant select database");

$query="select * from order_user";
$result=mysql_query($query, $con) or die("Error in query: $query".mysql_error()); 
if(mysql_num_rows($result)<=0)
	echo "No Record found.";
	$count = 1;
	while($rows=mysql_fetch_array($result))
		{
		$sql_user = "select * from login where user_id='".$rows['user_id']."'";
		$user_res = mysql_query($sql_user, $con) or die("Error in query: $query".mysql_error());
		$user_row = mysql_fetch_array($user_res);
?>		   
		    
		   <tr>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:20px;">
		   <?php echo $user_row['login_name']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['menu_catag_name']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['menu_name']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['qty']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['price']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <a href="delete_online orders.php?id=<?php echo $rows['order_id']; ?>" onclick='return confirm(&quot Are you sure want to delete?&quot;)'
		    style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</a></td>
           </tr>
		   
		       
	
<?php
		$count++;
		}
?>	
</table>				
    </div>
    <!-- content ends -->
<!-- footer begins --><!-- footer ends -->
</div>
</div>
</body>
</html>
