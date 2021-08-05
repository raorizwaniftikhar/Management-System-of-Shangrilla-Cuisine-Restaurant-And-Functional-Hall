<?php 
session_start();
if(!(isset($_SESSION['user'])))
header("Location: delivery_login.php");
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <?php include("navigation2.php"); ?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="Js/jquery-1.3.2.min.js" type="text/javascript"></script> 
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="Js/jquery.js"></script>
<script type="text/javascript">
function validate()
{	
	var catag=document.getElementById("catagory").value;
	if(catag=='None')
	{
		alert("Select Catagory");
		return false;
	}
	 if(document.order.menu.value=='None')
	{
		alert("Select Menu");
		return false;
	}
	 if(document.order.type.value=='None')
	{
		alert("Select Type");
		return false;
	}
	if(document.order.qty.value=='')
	{
		alert("Enter Quantity");
		return false;
	}
	
		var message=confirm("Are you sure to add this item to your order?");
		if(message==true)
		return true;
}
</script>
<script type="text/javascript">
function LoadXMLDOC(url,cfunc)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=cfunc;
xmlhttp.open("GET",url ,true);
xmlhttp.send();
}
  function show_menu(str)
  { 
		  LoadXMLDOC("show_menu.php?id="+str, function()
		  {
		   if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("menu").innerHTML=xmlhttp.responseText;
			}
		   });
	}
	function show_type(str)
  { 
		  LoadXMLDOC("show_type.php?id="+str, function()
		  {
		   if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("type").innerHTML=xmlhttp.responseText;
			}
		   });
	}

</script>
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
  <div align="center" style=" color:#990000;"><span style="color:#990000">Date for Your order is:&nbsp;</span> <script language="JavaScript">
  <!--
    var now = new Date();
    var days = new Array(
      'Sunday','Monday','Tuesday',
      'Wednesday','Thursday','Friday','Saturday');
    var months = new Array(
      'January','February','March','April','May',
      'June','July','August','September','October',
      'November','December');
    var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
    function fourdigits(number)	{
      return (number < 1000) ? number + 1900 : number;}
    today =  days[now.getDay()] + ", " +
       months[now.getMonth()] + " " +
       date + ", " +
       (fourdigits(now.getYear()));
     document.write(today);
  //-->
</script>
</div>
  <div align="center">

	<?php
	include("connect.php");
	$user_name=$_REQUEST['name'];
$result=mysql_query("SELECT * FROM login where login_name='$user_name'");
$row=mysql_fetch_array($result);
	$user_id=$row['user_id'];
	$qryorder=mysql_query("SELECT * FROM order_user where user_id='$user_id'");
	$i=1;
	echo "<center><table><caption><h2>Your Order:</h2></caption><th>No</th><th>Item Name</th><th>Price</th><th>Quantity</th><th>Date & Time</th></tr>";
	while($roworder=mysql_fetch_array($qryorder))
	{	
		echo "<tr><td>".$i."</td><td>".$roworder['menu_name']."</td><td>".$roworder['price']."</td><td>".$roworder['qty']."</td><td>".$roworder['date']."</td></tr>";
		$i=$i+1;
	}
	echo "</table>";
	
	echo"<a href=online_order.php>Back</a></center>";
?>
<center>
</center>
</div>
<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
</body>
</html>
<?php } ?>