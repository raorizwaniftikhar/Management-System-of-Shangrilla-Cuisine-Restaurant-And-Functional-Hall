<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <?php include("navigation2.php"); ?></head>

<body>
<?php
$con=mysql_connect("localhost","root","") or die ("could not created");
$db=mysql_select_db("river view",$con);
$result=mysql_query("SELECT * FROM menu_catagory");
//$price=mysql_query("SELECT * FROM 
while($row=mysql_fetch_array($result))
{
echo "<b>".$row['menu_catag_id']."</b>". " : " . " " ."<b><a href=menus.php?id=".$row['menu_catag_id'].">".$row['menu_catag_name']."</a></b>".$row['menu_catag_desc'];
echo "<br />";
}
mysql_close($con);
?>
</body>
</html>
