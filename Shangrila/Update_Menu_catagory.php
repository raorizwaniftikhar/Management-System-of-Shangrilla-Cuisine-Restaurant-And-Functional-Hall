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
<div id="header">
<div id="head_right">
	
</div>    
<div id="head_left">
<div id="logo"><h2><font color="#990000">Riverview Administration</font></h2></div>
    <div id="buttons">
          <?php include("navigation.php"); ?>
	</div>


</div>	
</div>
<div id="main">

  <div id="content">
<br />
<br />
<h3>Update Menu catagory </h3>
<?php 
include("connect.php");
$id=$_REQUEST['id'];
$query=mysql_query("SELECT * FROM menu_catagory where menu_catag_id='$id'")or die("Error in Query".mysql_error());
$row_catag=mysql_fetch_array($query);
$id=$row_catag['menu_catag_id'];
echo '
<form action="action_update_Menu_catagory.php?id='.$id.'" method="post">
<table border="2">
<tr><td align="right"><strong>Menu_catag_name:</strong></td>
<td><input type="text" name="name" value="'.$row_catag["menu_catag_name"].'"/></td></tr>
<tr><td align="right"><strong>Menu_catag_desc:</strong></td>
<td><input type="text" name="desc" value="'.$row_catag["menu_catag_desc"].'"/></td></tr>
</table>
<input align="middle" name="save" type="submit" value="Update Menu Catagory" />
<left><a href=admin_menu_catagory.php><h3><font color="#CCCCCC">Back</font></h3></a></left>
</form>';
?>
</div>
</div>
</body>
</html>