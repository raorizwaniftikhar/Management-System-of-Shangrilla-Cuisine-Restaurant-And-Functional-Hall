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
			
		<table width="963" height="46" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
		
		   <tr>
           <th height="42" colspan="10" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:18px; text-align:center">Registered Users</th>
           </tr>
      </table>
		   <br />
		   
		<table width="963" height="192" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
           <tr>
           <th height="68" colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">User Name</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Email</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Phone</th>
           <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Cell</th>
		   <th colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</th>
           </tr>
<?php 
$con=mysql_connect("localhost","root","") or die("Cant connect");
$db=mysql_select_db("std_shangrilla",$con) or die("Cant select database");

$query="select * from user_catagory";
$result=mysql_query($query, $con) or die("Error in query: $query".mysql_error()); 
if(mysql_num_rows($result)<=0)
{
?>
<tr>
           <td colspan="10" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">No Record Found</td>
</tr>
<?php	
}
else
{	
	$count = 1;
	while($rows=mysql_fetch_array($result))
		{
?>		   
		    
		   <tr>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['user_Fname']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['user_Email']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['user_Tph']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <?php echo $rows['user_Mbile']; ?></td>
           <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">
		   <a href="delete_user.php?id=<?php echo $rows['user_id']; ?>" onclick='return confirm(&quot Are you sure want to delete?&quot;)'
		    style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:16px;">Delete</a></td>
           </tr>
		   
		       
	
<?php
		$count++;
		}
}		
?>	
</table>	
<center>
<a href="admin.php" class="button" style="width:150px; margin:10px;"><em><b>Back to Admin Page</b></em></a> 
</center>	
<?php include("footer.php"); ?>		
    </div>
    <!-- content ends -->
<!-- footer begins --><!-- footer ends -->
</div>
</div>
</body>
</html>
