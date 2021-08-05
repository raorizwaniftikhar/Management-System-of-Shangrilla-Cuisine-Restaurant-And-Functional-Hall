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
<div id="logo"><a href="#">Shangrila Cuisine Restaurant & Function Halls</a>
		<h2><a href="#"><h3>we are better.. , we are fresher.. , we are tastier!</h3></a></h2>
    </div>
    <div id="buttons">
           <?php include("navigation.php"); ?>
		</div>


</div>	
</div>
<div id="main">
<!-- header ends -->
<!-- content begins -->
  <div id="content">
    <!-- content ends -->
    <!-- footer begins --><!-- footer ends -->
	
<table cellpadding="10" >
<?php 
include("connect.php");
$query=mysql_query("SELECT * FROM menu_catagory")or die("Error in Query".mysql_error());
if(mysql_num_rows($query)<=0)
echo '<tr><td>No Menu Catagory added yet</td></tr>';
else
{		echo '
		<tr>
		<th>Menu-catag-id</th>
		<th>Menu-catag-name</th>
		<th>Menu-catag-desc</th>
		<th>Delete</th>
		<th>Update</th>
		<th>Add New</th></tr>';
	while($row_catag=mysql_fetch_array($query))
	{	$id=$row_catag['menu_catag_id'];
	echo "
		<tr>
		<td>".$row_catag['menu_catag_id']."</td>
		<td>".$row_catag['menu_catag_name']."</td><td></td>
		<center>
		<td><a href='Delete_Menu_catagory.php?id=".$id."' onclick='return confirm(&quot Are you sure want to delete?&quot;)'>Delete</a></td>
		<td><a href='Update_Menu_catagory.php?id=".$id."'>Update</a></td>
		<td><a href='add_new_catagory.php'>Add New Catagory</center></a></tr>"; 
		echo '<tr><table cellpadding="10" border="1" style="margin-left:150px; margin-top: 10px; border-color:#990000; " width="80%">
					<tr>
				<th>Menu-id</th>
				<th>Menu-name</th>
				<th>Type</th>
				<th>Delete Menu</th>
				<th>Update Menu</th>
				<th><a href="create_Menu.php?id='.$id.'">Add New Menu</a></th></tr>';
		$qry_menus=mysql_query("select * from menus where menu_catag_id='$id'")or die("Error in Query".mysql_error());
		while($row_menu=mysql_fetch_array($qry_menus))
		{	$mid=$row_menu['menu_id'];
			
				$qry_price=mysql_query("select * from menus_price where menu_id='$mid'")or die("Error in Query".mysql_error());
				//$price_limit=mysql_num_rows($query);
				echo "	
			<tr><td >".$row_menu['menu_id']."</td>
			<td>".$row_menu['menu_name']."</td>
			<td><table><tr><th>Type</th>
					<th>Price</th>
					<tr>"; 
			while($row_price=mysql_fetch_array($qry_price))
			{
				echo "<tr><td>".$row_price['menu_type']."</td>
				<td>".$row_price['menu_price']."</td>
				";
			}
			echo '</table></td>
			<td ><a href="Delete_Menu.php?mid='.$mid.'" onclick="return confirm(&quot Are you sure want to delete?&quot;)">Delete</a></td>
			<td ><a href="Update_Menu.php?id='.$mid.'">Update</a></td>
			<td ><a href="create_Menu.php?id='.$id.'">Create</a></td></tr>';
			
		} echo '</table>';
	//first while ends	
	}
//else ends
}
?>
</table>
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
<!-- content ends -->

</div>
</body>
</html>