
<?php

$con=mysql_connect("localhost","root","") or die("Cant connect");
			$db=mysql_select_db("river view",$con) or die("Cant select database");			

$id=$_POST['id'];
$m_name=$_POST['m_name'];
$item_id=$_POST['item_id'];
$item_name=$_POST['item_name'];
$p_half=$_POST['p_half'];
$p_ful=$_POST['p_ful'];


$sql = "INSERT INTO admin_menu (m_id, menu_name, menu_item_id, menu_item_name, price_half, price_full) VALUES ('$id', '$m_name', '$item_id', '$item_name', '$p_half','$p_ful');";

$query=mysql_query($sql);
if($query)
{echo "Menu successfully Saved";
header('Location: admin_add_menu.php');
}
else 
echo "error in inserting".mysql_error();
?>

