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
<script type="text/javascript" src="../river view test/check">
</script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <?php include("navigation2.php"); ?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="Js/jquery-1.3.2.min.js" type="text/javascript"></script> 
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script type="text/javascript" src="Js/jquery.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
	 document.getElementById("date").value=today;
  //-->
</script>
</div>
  <div style="float:left">
<form action="action_order.php" method="post" onsubmit="return validate()" name="order">

<table border="2" bordercolor="#990000" cellpadding="0" cellspacing="0" >
   
  <caption><h3 style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000;"><font size="+1">Online Delivery Page</font> </h3></caption>
      <tr>
         <th width="100"><font color="#990000">Menu</font></th>
         <th width="100"><font color="#990000">Item Name</font></th>
		 <th width="100"><font color="#990000">Half/Full & Price</font></th>
         <th width="100"><font color="#990000">Quantity</font></th>
      </tr>
   <tr>
         <td>
		 <select name="catagory" id="catagory" onchange="show_menu(this.value)">
	<?php
	$user_name=$_SESSION['user'];
	include("connect.php");
	
$query=mysql_query("SELECT * FROM menu_catagory")or die("Error in Query".mysql_error());
echo '<option value="None">Select Catagory</option>';
while($row=mysql_fetch_array($query))
		{
			echo "<option value=".$row['menu_catag_id'].">".$row['menu_catag_name']."</option>";
		}
		?>
    </select></td>
	<td >
	<select name="menu" id="menu" onchange="show_type(this.value)">
	<option value="None">Select Menu</option>
	</select>	</td>
	<td >
	<select name="type" id="type">
	<option value="None">Select Type</option>
	<option value="None">full</option>
	<option value="None">half</option>
    </select></td>
	<td align="center" valign="middle"><span id="sprytextfield1">
    <input type="text" name="qty" id="data_0" width="30" onkeyup="isNumber(this.value,this.id)"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span>	  
	  <input name="user_name" type="hidden" value="<?php echo $user_name; ?>" />
	 </td>
   </tr>
   <tr><td colspan="4" align="center" bgcolor="#990000"><input type="submit" value="Save Invoice" />&nbsp;&nbsp;&nbsp;
   <input name="print"  type="button" value="Print Invoice"   onClick="window.print()"/></td>
   </tr>
</table>
</form>
<center><?php echo '<a href="view_order.php?name='.$user_name.'" style="text-decoration:none;">'; ?><input name="Proceed To View Your Order" value="Proceed To View Your Order" type="button" style="margin:15px" /></a></center>
<br>
<?php if($user_name != "")
{
?>
<iframe src="view_order_new.php?name=<?php echo $user_name; ?>" width="700" height="300">
<?php } ?>
</div>
<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {minChars:1, maxChars:3, validateOn:["change"]});
</script>
</body>
</html>
<?php } ?>