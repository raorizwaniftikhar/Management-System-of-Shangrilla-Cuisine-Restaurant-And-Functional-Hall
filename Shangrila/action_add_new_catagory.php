
<?php
include("connect.php");
$name=$_POST['name'];
$desc=$_POST['desc'];
$query=mysql_query("insert into menu_catagory set menu_catag_name='$name' , menu_catag_desc='$desc' 
")or die("Error in Query".mysql_error());

if($query)
header("Location: admin_Menu_catagory.php");
else
echo '
					 <script type="text/javascript">
					 alert("Error in Query");
					 window.location="admin_Menu_catagory.php";
					 </script>';
?>