<?php 
include("connect.php");
$id=$_REQUEST['id'];
if($id=="None")
echo "<option value='None'>Select Type</option>";
else
{
$qry_price=mysql_query("select * from menus_price where menu_id='$id'")or die("Error in Query".mysql_error());
		while($row=mysql_fetch_array($qry_price))
		{
			echo "<option>".$row['menu_type']."- Price:!".$row['menu_price']."!</option>";
		}
}
?>