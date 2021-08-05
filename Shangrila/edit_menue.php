<?php 
session_start();
if(!(isset($_SESSION['user'])))
header("location:delivery_login.php");
else
{
?>


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
<div id="logo"><a href="#">Shangrila_restaurant</a>
		<h2><a href="home.php" id="metamorph">A GREAT CHOICE OF FOOD UNDER ONE ROOF</a></h2>
    </div>
    <div id="buttons">
           <?php include("navigation3.php"); ?>
		</div>


</div>	
</div>
<div id="main">

  <div id="content">
    <div >
			<h2>Welcome to Our Shangrila restaurant Administration!</h2>			<h3>Static Pages</h3>
			
			
<form action="edit_menue_action.php?id=<?=$_GET['id']?>" method="post" onsubmit="" name="form1">
<div style="float:left">
<p style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">
<?php 
echo $result;
?></p>
<table width="546" height="194" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
 <tr>  
  <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:18px;">Edit Menue</td>
 </tr>     
	<?php
	$user_name=$_SESSION['user'];
	include("connect.php");
	$id = $_GET['id'];
	$sql_menue = "SELECT * FROM menus where menu_id = '".$id."'";
	$menue_res = mysql_query($sql_menue, $con) or die("Error in query: $query".mysql_error());
	$menue_row = mysql_fetch_array($menue_res);
	
	?>
		
		
	<!--Personal Information-->	
		
    <tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Menue:</label></td>
	<td width="424" style="text-align:center"><input type="text" name="txt_name" id="txt_name" value="<?=$menue_row['menu_name']?>" style="width:400px;"/></td>
	</tr>
	
	
		
   
   
   <tr><td colspan="4" align="center" bgcolor="#990000">&nbsp;&nbsp;&nbsp;
   </tr>
</table>

<center><?php echo '<a href="edit_menue_action.php?id='.$id.'" style="text-decoration:blink;">'; ?><input name="Update" value="Update" type="submit" style="margin:15px" /></a></center>
</div>
</form>
<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
</body>
</html>


<?php } ?>
