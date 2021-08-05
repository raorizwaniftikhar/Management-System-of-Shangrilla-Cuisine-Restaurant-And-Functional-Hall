<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 <?php include("navigation2.php"); ?>
<meta name="keywords" content="" />
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
					<p><marquee  onmouseover="this.stop();" onmouseout="this.start();"  behavior="scroll" direction="up" width="200" height="129"scrolldelay="80" scrollamount="2" style="text-align: justify; font-family:Verdana; font-size:9pt" >
					<ul>
					<li>Fish crackers</li>
					<li>Shangrila special soup</li>
					
                    <li>Chicken burger with french fries</li>
                    <li>Special Qasoori Tawa Fish</li>
                    <li>Chicken Fried Rice</li>
                    
                    <li>shangrila special chowmein</li>
                    <li>shangrila special chicken</li>
                    <li>Mutton karahi</li>
                    <li>Russian salad</li>
                                       					
					<li>Chicken pasha boneless special</li>
					<li>Rice+Manchurian+Dhaka chicken</li>
					<li>shangrila special icecream with almonds</li>
					<li>pepsi,7up,dew,marrinda</li>
					<li>shangrila special tea</li>
					</ul>
					</marquee></p>	
                    
               </div>
			   <div id="archives">                
                <div id="arcleft">
                <h2>shangrila</h2>
				<ul>
					<img src="gallery img/shangrila3.JPG" width="200" height="120"/>
				  </ul>
                </div>
                <div id="arcright">
				 <?php include("navigation1.php"); ?>
                </div>
                
         </div>
        </div>
          	<div id="left">
			<h1>Welcome to Our shangrila restaurant!</h1>			
				<div class="text">
                 <p>You’ll find at 9 no chungi bosan road  a welcome relief   for the customers-Central to our restaurant is a focus on good quality food made from good quality ingredients.  Nothing is   done in half measures and is all experienced in a considered and   tranquil environment.  We like to call this <strong><em>Best Place To Eat and Relax</em> : Pakistani Chinese and Bar-B-Que. </strong></p>
                  <p>The difference is in the subtleties, which you’ll notice are all around you.  To name a few, we only use free – range Halal chicken and meat, whole spices are ground in house and dishes from the grill are marinated overnight to ensure the delicate flavours infuse.</p>
                  <p> just make sure you try one of our signature dishes from the pan.    Developed from age-old family recipes and given a modern twist by Head   Chef and restaurant owner MR Hashim Khan. </p>
                  <p>Enjoy ::: Pakistani grill: Chinese Food: Bar-B-Que : Pakistani and Punjabi Dishes</p>
			    </div>
			<div class="date">
					  <ul>
					    <li><a href="contact.php"  class="small_icon1">Contacts</a></li>
						<li><a href="menu.php" class="small_icon2">menu</a></li>
						<li><a href="home.php"  class="small_icon3">Home</a></li>
					</ul>
			  </div><br />
		
				<div class="text">
				<img src="gallery img/PICT0284.JPG"  width="490px" height="330"/>
			  </div>
            
	</div>     


<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
</body>
</html>