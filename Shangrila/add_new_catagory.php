<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- header begins -->
<div id="header">
<div id="head_right">
	
</div>    
<div id="head_left">
<div id="logo"><h2><font color="#990000">Shangrila Administration</font></h2></div>
    <div id="buttons">
         <?php include("navigation.php"); ?>
	</div>


</div>	
</div>
<div id="main">

  <div id="content">
<br />
<br />
<h3>Insert Menu catagory </h3>
<form action="action_add_new_catagory.php" method="post">
<table border="2">
<tr><td align="right"><strong>Menu_catag_name:</strong></td>
<td><input type="text" name="name" /></td></tr>
<tr><td align="right"><strong>Menu_catag_desc:</strong></td>
<td><input type="text" name="desc" /></td></tr>
</table>
<input align="middle" name="save" type="submit" value="Add Menu Catagory" />
</form>
<left><a href=admin_menu_catagory.php><h3><font color="#CCCCCC">Back</font></h3></a></left>
</div>
</div>

</body>
</html>