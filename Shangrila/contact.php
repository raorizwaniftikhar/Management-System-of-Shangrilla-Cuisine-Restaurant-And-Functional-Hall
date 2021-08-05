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
                <h2>Shangrila</h2>
				<ul>
					<img src="gallery img/PICT0284.JPG" width="200" height="120"/>
				  </ul>
                </div>
                <div id="arcright">
               				 <?php include("navigation1.php"); ?>

                </div>
                
         </div>
        </div>
          	<div id="left">
			<h1>Welcome to Shangrila resturent</h1>	
			<form action="action_contact.php" method="Post" name="frm" onsubmit="if(document.frm.realname.value=='' || document.frm.email.value=='' || document.frm.phone.value==''  || document.frm.address.value==''|| document.frm.comment.value=='') {alert('ENTER DATA IN ALL REQUIRED FIELDS'); return false;}else{return true;}" >
			  <table>
			  <tr><td>Name</td>
			  <td><span id="sprytextfield1">
              <input type="text" class="text" name="realname" onblur="if(!this.value.match(/^[a-zA-Z\-]+$/)){alert('Please Enter only letters with no space');this.focus();}" size=45 />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td></tr>
			  <tr><td>E-Mail:</td>
			  <td><span id="sprytextfield2">
              <input type="text" class="text" name="email" size=45 />
              <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td></tr>
			  <tr>
			    <td>Phone</td>
			    <td><span id="sprytextfield3">
                <input type="text" class="text" name="phone" size=45 />
                <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td></tr>
			  <tr>
			    <td>Address</td>
			    <td><span id="sprytextfield4">
			      <input type="text" class="text" name="address" size=45 />
		        <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr>
			  <tr>
			    <td>Question /Comments </td>
			    <td><textarea rows="4" cols="46" class="text" name="comment" onblur="if(!this.value.match(/^[a-zA-Z\-]+$/)){alert('Please Enter only letters with no space');this.focus();}" ></textarea>
<span id="sprytextfield5"><span class="textfieldRequiredMsg">A value is required.</span></span></td></tr>
				<tr><td><input type="submit" class="submit" name="Contact-Infinitee" value="Submit"  onclick="myfun();"></td><td><input type="reset" class="reset" name="Reset" value="Reset" ></td></tr>
			  </table>
			</form>		
    </div>
          	<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"], minChars:3, maxChars:20});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["change"], minChars:5, maxChars:25});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "integer", {validateOn:["change"], minChars:11, maxChars:11});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
</body>
</html>