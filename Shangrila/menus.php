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
	<div id="right">
		<div id="archives1">                
                <div id="arcleft1">
                 
				<?php 
				session_start();
				if(!(isset($_SESSION['user']))) echo '<h2><a href="login.php">Login</a> </h2>';
				else
				{
				$username=$_SESSION['user']; 
				echo '<h2><a href="logout.php">Logout &nbsp;&nbsp;'.$username.'</a> </h2>';
				}
				 ?>
				<ul>
					<li class="style1">Get Registered</li>
					<li><span class="style1">Get Our Offers in your E-mail</span> </a></li>
					<li class="style1">Free Home delivey for registered users </li>
				</ul>
                </div>
                <div id="arcright1">
                <h2><a href="create_account.php">Create Account </a></h2>
				<ul>
					<li class="style1">Just go to Registration </li>
					<li class="style1">Fill the Form </li>
					<li class="style1">Correct information </li>
					<li class="style1">Just Click to Register </li>
				</ul>
                </div>
                
         </div>
    	
         <div id="rightbot">
				<h2>Shangrila special dishes </h2>
					<p><marquee  onmouseover="this.stop();" onmouseout="this.start();"  behavior="scroll" direction="up" width="200" height="129"scrolldelay="100" scrollamount="2" style="text-align: justify; font-family:Verdana; font-size:9pt" >
					<ul>
					<li>Fish crackers</li>
					<li>Shangrila special soup</li>
					
                    <li>Chicken burger with french fries</li>
                    <li>Special Qasoori Tawa Fish</li>
                    <li>Chicken Fried Rice</li>
                    
                    <li>Shangrila special chowmein</li>
                    <li>Shangrila special chicken</li>
                    <li>Mutton karahi</li>
                    <li>Russian salad</li>
                                       					
					<li>Chicken pasha boneless special</li>
					<li>Rice+Manchurian+Dhaka chicken</li>
					<li>Shangrila special icecream with almonds</li>
					<li>pepsi,7up,dew,marrinda</li>
					<li>Shangrila special tea</li>
					</ul>
					</marquee></p>
               </div>
			   <div id="archives">                
                <div id="arcleft">
                <h2>Shangrilla</h2>
				<ul>
					<img src="gallery img/PICT0279.JPG" width="200" height="120"/>
				  </ul>
                </div>
                <div id="arcright">
                 <?php include("navigation1.php"); ?>
                </div>
                
         </div>
        </div>
   	<div id="left">
   	  <h1>Our Menu !</h1>
	  <h3> Menu Name &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Price</h3>
	  <br /><?php
$id=$_REQUEST['id'];
$con = mysql_connect("localhost","root","") or die ("could not created");
$db = mysql_select_db("std_shangrilla",$con) or die(mysql_error());
$result=mysql_query("SELECT * FROM menus where menu_catag_id=$id") or die(mysql_error());

while ($row=mysql_fetch_array($result))
{
echo "<table>";
echo "<b>".$row['menu_id']."</b>". ":" . " " .""."<b>".$row['menu_name']."</b>";
echo "<br />";
$cid=$row['menu_id'];
$result1=mysql_query("SELECT * FROM menus_price where menu_id=$cid ");

while ($row1=mysql_fetch_array($result1))
{
echo "<center>";

echo "<b>".$row1['menu_type']."</b>". ":" . " " .""."<b>".$row1['menu_price']."</b>";
echo "<br />";
echo "</center>";

}
}
mysql_close($con);
?>					    
      <!-- content ends -->
      <!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
</body>
</html>