
<?php
require("connect.php");
$user_name=$_POST['user_name'];
$result=mysql_query("SELECT * FROM login where login_name='$user_name'");

if(mysql_num_rows($result)>0)
{
	$row=mysql_fetch_array($result);
	$user_id=$row['user_id'];
	$qryorder=mysql_query("SELECT order_no FROM order_user order by order_no desc");
	$roworder=mysql_fetch_array($qryorder);
	$userorder=$roworder['order_no'];
	$neworderno=$userorder+"1";
	//echo $neworderno;
	$catagory=$_POST['catagory'];
	$menu=$_POST['menu'];
	$type=$_POST['type']; 
	$qty=$_POST['qty'];
	$names=mysql_query("SELECT menu_catagory.menu_catag_name, menus.menu_name FROM menu_catagory inner join menus on  menu_catagory.menu_catag_id=menus.menu_catag_id where menu_catagory.menu_catag_id='$catagory' and menus.menu_id='$menu'")or die("Error in names".mysql_error());
	if($names)
	{
	$rownames=mysql_fetch_array($names);
	//order_id 	order_no 	user_id 	menu_catag_name 	qty 	price 	date 	menu_name

		//echo $user_id; die;
		$sql_insert_order=mysql_query("insert into order_user set
		user_id='$user_id',
		order_no='$neworderno',
		menu_catag_name='".$rownames['menu_catag_name']."',
		menu_name='".$rownames['menu_name']."',
		price='$type',
		qty='$qty', 
		date='".date("Y-m-d")."'")or die("Error in inserting order details".mysql_error());
		if($sql_insert_order)
		{	
			header("Location: online_order.php");
		}
		else
		{
		 echo "Error in inserting whole details";
		}
	}
}
mysql_close($con);
?>