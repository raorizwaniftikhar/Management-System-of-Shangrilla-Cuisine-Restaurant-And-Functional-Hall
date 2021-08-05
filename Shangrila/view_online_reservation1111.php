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
				
		<h2>Welcome to Our Shangrila restaurant Administration!</h2>
			
		<table width="963" height="184" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
		
           <tr>
           <th height="53" colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Customer Name</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Email</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Phone</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Booking Date In</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Booking Date Out</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Resevation Of</th>
		   <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Meal</th>
		   <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Payment Mode</th>
		   <th width="84" colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</th>
           </tr>
<?php 
$con=mysql_connect("localhost","root","") or die("Cant connect");
$db=mysql_select_db("river view",$con) or die("Cant select database");

$query="select * from tbl_reservations";
$result=mysql_query($query, $con) or die("Error in query: $query".mysql_error()); 
if(mysql_num_rows($result)<=0)
{
?>
<tr>
           <td colspan="18" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">No Record Found</td>
</tr>
<?php	
}
else
{	
	$count = 1;
	while($rows=mysql_fetch_array($result))
		{
		$sql_meal = "select * from tbl_meal where ID='".$rows['Meal_ID']."'";
		$meal_res = mysql_query($sql_meal, $con) or die("Error in query: $query".mysql_error());
		$meal_row = mysql_fetch_array($meal_res);
		
		$sql_hal = "select * from tbl_hall where ID='".$rows['Hall_ID']."'";
		$hal_res = mysql_query($sql_hal, $con) or die("Error in query: $query".mysql_error());
		$hal_row = mysql_fetch_array($hal_res);
?>		   
		    
		   <tr>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Name']?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Email']?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Phone']?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Booking_Date_in']?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Booking_Date_out']?></td>
		   <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$hal_row['Name']?></td>
		   <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$meal_row['Name']?></td>
		   <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?=$rows['Payment']?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <a href="delete_online_reservation.php?id=<?=$rows['ID']?>" onclick='return confirm(&quot Are you sure want to delete?&quot;)'
		    style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</a></td>
           </tr>
		   
		       
	
<?php
		$count++;
		}
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
