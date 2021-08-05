<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <?php include("navigation2.php"); ?>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
	<div id="right">
		<div id="archives1">                
                <div id="arcleft1">
                <h2><a href="login.php">Login Here</a> </h2>
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
                <h2>Shangrila</h2>
				<ul>
					<img src="gallery img/PICT0263.JPG" width="200" height="120"/>
				  </ul>
                </div>
                <div id="arcright">
                				 <?php include("navigation1.php"); ?>

                </div>
                
         </div>
        </div>
          	<div id="left">
			<h1>Welcome to Our Shangrila Cuisines Restaurant!</h1>			
				<form action="login_action.php" method="post">
	 <table border="3" cellspacing="3" cellpadding="3" bgcolor="#510000" align="center"> <caption><h2 class="style2 style1">Login Here</h2>
	 </caption>
	 <tr>
	 <td><h3 class="style1">Login Name</h3></td>
	 <td><span id="sprytextfield1">
     <input type="text" id="login2" name="login2"/>
     <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td></tr>
	 <tr>
	 <td><h3 class="style1">Password</h3></td>
	 <td><span id="sprytextfield2">
	   <input name="pass" type="password" id="pass" maxlength="10" />
	   <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr>
	 <tr>
	 <td><input name="submit" type="submit" id="log" value="Login Now" /></td>
	 <td><a href="create_account.php"><input type="button" value="Register Here" /></a></td></tr>
	 
</table>
	
   </form>
			<div class="date">
					  <ul>
					    <li><a href="contact.php"  class="small_icon1">Contacts</a></li>
						<li><a href="menu.php" class="small_icon2">menu</a></li>
						<li><a href="home.php"  class="small_icon3">Home</a></li>
					</ul>
			  </div><br />
		
				<div class="text">
				<img src="gallery img/PICT0283.JPG"  width="490px"/>
			  </div>
            
	</div>     


<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {minChars:4, maxChars:20});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>
