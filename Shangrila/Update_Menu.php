<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <?php include("navigation2.php"); ?><meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

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
<br />
<br />
<h3>Update Menu</h3>
<?php 
include("connect.php");
$id=$_REQUEST['id'];
$qry_menus=mysql_query("select * from menus where menu_id='$id'")or die("Error in Query".mysql_error());
	$row_menu=mysql_fetch_array($qry_menus);
		//menu_id 	menu_catag_id 	menu_name
echo '
<form action="action_update_Menu.php" method="post">
<table border="2">
<tr><td align="right"><strong>Menu_name:</strong></td>
<input name="id" type="hidden" value="'.$id.'" />
<td><input type="text" name="name" value="'.$row_menu["menu_name"].'"/></td></tr>
</table>
<input align="middle" name="save" type="submit" value="Update Menu" />
<left><a href=admin_menu_catagory.php><h3><font color="#CCCCCC">Back</font></h3></a></left>
</form>';
?>
</div>
</div>
</body>
</html>