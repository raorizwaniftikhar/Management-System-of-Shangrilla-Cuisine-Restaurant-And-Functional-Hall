<?php 
session_start();
if(!(isset($_SESSION['user'])))
header("location:delivery_login.php");
else
{
$result="";
?>

<?php

if(isset($_POST['Reserve'])) 
{
include("connect.php");

	$id         =   $_POST['txt_id'];
   $user_name   =   $_SESSION['user'];
   $name        =   $_POST['txt_name'];
   $email       =    $_POST['txt_email'];
   $address     =   $_POST['txt_adres']; 
   $phone       =   $_POST['txt_phone'];                                                                   
   $cel         =   $_POST['txt_cel'];
   $hall        =   $_POST['slct_menu'];
   $datein      =   $_POST['slct_dayin'].'/'.$_POST['slct_monthin'].'/'.$_POST['slct_yearin'];
   $dateout     =   $_POST['slct_dayout'].'/'.$_POST['slct_monthout'].'/'.$_POST['slct_yearout'];
   $meal        =   $_POST['slct_meal'];
   $payment     =   $_POST['payment'];
   
	
		$sql_insert_order=mysql_query("insert into tbl_reservations set
										ID                =  '".$id."',
										Name              =  '".$name."',
										Email             =  '".$email."',
										Address           =  '".$address."',
										Phone             =  '".$phone."',
										Cell              =  '".$cel."',
										Hall_ID           =  '".$hall."',
										Booking_Date_in   =  '".$datein."', 
										Booking_Date_out  =  '".$dateout."',
										Meal_ID           =  '".$meal."',
		                                Payment           =  '".$payment."'")or die("Error in inserting order details".mysql_error());
		
		
		$result = $sql_insert_order;
		if($result == 1)
		{
		 $result = "Reservation has been done successfully";
		}
		
mysql_close($con);
}
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
  { //alert(str);
		  LoadXMLDOC("show_menu.php?id="+str, function()
		  {//alert(str);
		   if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{//alert(xmlhttp.responseText);
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
  <div align="center" style=" color:#990000;"><span style="color:#990000">Date for Your order is:&nbsp;</span> 
  
  <script language="JavaScript" type="text/javascript">
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
</script>
</div>
  
<form action="online_reservation.php" method="post" onsubmit="" name="formreservation">
<div style="float:left">
<p style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">
<?php 
echo $result;
?></p>
<table width="546" height="194" border="2" cellpadding="0" cellspacing="0" bordercolor="#990000" align="center">
 <tr>  
  <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:18px;">Online reservation Page</td>
 </tr>     
	<?php
	$user_name=$_SESSION['user'];
	include("connect.php");
		?>
		
		
	<!--Personal Information-->	
		
    <tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Name:</label></td>
	<td width="424" style="text-align:center"><span id="sprytextfield1">
    <input type="text" name="txt_name" id="txt_name" value="<?php if(isset($_POST['txt_name'])) { echo $_POST['txt_name']; } ?>" style="width:400px;"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
	</tr>
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Email:</label></td>
	<td width="424" style="text-align:center"><span id="sprytextfield2">
    <input type="text" name="txt_email" id="txt_email" value="<?php if(isset($_POST['txt_email'])) { echo $_POST['txt_email']; } ?>" style="width:400px;"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
	</tr>
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Address:</label></td>
	<td width="424" style="text-align:center"><span id="sprytextfield3">
    <input type="text" name="txt_adres" id="txt_adres" value="<?php if(isset($_POST['txt_adres'])) { echo $_POST['txt_adres']; } ?>" style="width:400px;"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
	</tr>
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Phone:</label></td>
	<td width="424" style="text-align:center"><span id="sprytextfield4">
    <input type="text" name="txt_phone" id="txt_phone" value="<?php if(isset($_POST['txt_phone'])) { echo $_POST['txt_phone']; } ?>" style="width:400px;"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
	</tr>
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Cell:</label></td>
	<td width="424" style="text-align:center"><span id="sprytextfield5">
    <input type="text" name="txt_cel" id="txt_cel" value="<?php if(isset($_POST['txt_cel'])) { echo $_POST['txt_cel']; } ?>" style="width:400px;"/>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
	</tr>
	
	<!--Reservation Information-->	
	<tr>  
      <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; background-color:#440000; font-size:18px;">Select Hall Type</td>
    </tr> 
	
	<tr>
	<td colspan="2" width="114" height="55" style="text-align:center"><select name="slct_menu" id="slct_menu" onchange="" style="width:300px; text-align:center;">
	<?php
	$user_name=$_SESSION['user'];
	include("connect.php");
	
$query=mysql_query("SELECT * FROM tbl_hall")or die("Error in Query".mysql_error());
echo '<option value="None">Select Type</option>';
while($row=mysql_fetch_array($query))
		{
			echo "<option value=".$row['ID'].">".$row['Name']."</option>";
		}
		?>
    </select></td>
	</tr>
	
	
	<!--Reservation Dates Information-->	
	<tr>  
      <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; background-color:#440000; font-size:18px;">Select Dates</td>
    </tr> 
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Date In:</label></td>
	
	<td width="424">
	<select name="slct_dayin" id="slct_dayin">
	<option>Select Day</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
	</select>
 
	<select name="slct_monthin" id="slct_monthin">
	<option>Select Month</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	</select>
 
	<select name="slct_yearin" id="slct_yearin">
	<option>Select Year</option>
	<option>2011</option>
	<option>2012</option>
	</select>
	</td>
	</tr>
	
	<tr>
	<td width="114" height="55" style="text-align:right;"><label style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; font-size:14px;">Date Out:</label></td>
	<td width="424">
		<select name="slct_dayout" id="slct_dayout">
	<option>Select Day</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
	</select>
 
	<select name="slct_monthout" id="slct_monthout">
	<option>Select Month</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	</select>
 
	<select name="slct_yearout" id="slct_yearout">
	<option>Select Year</option>
	<option>2011</option>
	<option>2012</option>
	</select>
	</td>
	</tr>
		
    <!--Reservation Meals Information-->	
	<tr>  
      <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; background-color:#440000; font-size:18px;">Select Meal</td>
    </tr>
	
	<tr>
	<td colspan="2" width="114" height="55" style="text-align:center"><select name="slct_meal" id="slct_meal" onchange="" style="width:300px; text-align:center;">
	<?php
	include("connect.php");
    $query=mysql_query("SELECT * FROM tbl_meal")or die("Error in Query".mysql_error());
    echo '<option value="None">Select Meal</option>';
    while($row=mysql_fetch_array($query))
		{
			echo "<option value=".$row['ID'].">".$row['Name']."</option>";
		}
		?>
    </select></td>
	</tr> 
	
	<!--Reservation Payment Information-->	
	<tr>  
      <td colspan="2" align="center" style="font:Georgia, 'Times New Roman', Times, serif 18px bold; color:#990000; background-color:#440000; font-size:18px;">Payment Mode</td>
    </tr>
	
	<tr>
	<td colspan="2" width="114" height="55" style=" color:#990000; font-size:14px; text-align:center;">
	<input type="radio" name="payment" value="cheque"/>Cheque
    <input type="radio" name="payment" value="cash" />Cash
	<input type="radio" name="payment" value="Online Bank Transfer" />Online Bank Transfer
	</td>
	</tr>
		
   
   
   <tr><td colspan="4" align="center" bgcolor="#990000">&nbsp;&nbsp;&nbsp;
   </tr>
</table>

<center><?php echo '<a href="online_reservation.php?name='.$user_name.'" style="text-decoration:blink;">'; ?><input name="Reserve" value="Reserve" type="submit" style="margin:15px" /></a></center>

</div>
</form>
<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:5, maxChars:20, validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["change"], minChars:6, maxChars:20});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["change"], minChars:7, maxChars:40});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {minChars:11, maxChars:11, validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {validateOn:["change"], minChars:11, maxChars:11});
</script>
</body>
</html>
<?php } ?>