<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <?php include("navigation2.php"); ?><meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- header begins -->
<div id="header" style="height:auto">
<div id="head_right">
	
</div>    
<div id="head_left">
<div id="logo"><a href="#">Shangrila Cuisine Administration</a>
		
    </div>
    <div id="buttons">
         <?php include("navigation3.php"); ?>
	</div>


</div>	
</div>
<div id="main">

  <div id="content">
<br />
<br>
<h3>Insert New Menu </h3>
<?php 
include("connect.php");
$mecu_catag_id=$_REQUEST['id'];

		//menu_id 	menu_catag_id 	menu_name
?>
<form action="action_create_Menu.php" method="post">
<table border="2">
<tr><td align="right"><strong>Menu_name:</strong></td>
<input name="id" type="hidden" value="<?php echo $mecu_catag_id;	?>" />
<td><input type="text" name="name" /></td></tr>
<tr><td align="right"><strong>Menu_desc:</strong></td>
<td><input type="text" name="desc" /></td></tr>
</table>
<input align="middle" name="save" type="submit" value="Add Menu" />
</form>
<left><a href="admin_menu_catagory.php"><h3><font color="#CCCCCC">Back</font></h3></a></left>
</div>
</div>
</body>
</html>