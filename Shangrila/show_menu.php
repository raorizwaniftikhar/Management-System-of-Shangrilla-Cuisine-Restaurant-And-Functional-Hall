<?php 
include("connect.php");
$id=$_REQUEST['id'];
if($id=="None")
echo "<option value='None'>Select Menu</option>";
else
{
$qry_menus=mysql_query("select * from menus where menu_catag_id='$id'")or die("Error in Query".mysql_error());
		while($row=mysql_fetch_array($qry_menus))
		{
			echo "<option value=".$row['menu_id'].">".$row['menu_name']."</option>";
		}
}
?>