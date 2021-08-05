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
<form  action="action_create_account.php" method="post" name="frm" onsubmit="if(document.frm.firstname.value=='' || document.frm.lastname.value=='' || document.frm.gender.value==''  || document.frm.birthday.value=='' 
 || document.frm.day.value==''
  || document.frm.year.value=='' || document.frm.login_name.value==''
 || document.frm.password.value=='' || document.frm.email.value==''  || document.frm.teleph.value==''  || document.frm.mobile.value==''  || document.frm.AdressL1.value==''  || document.frm.AdressL2.value==''  || document.frm.pcode.value==''){alert('ENTER DATA IN ALL REQUIRED FIELDS'); return false;}else{return true;}" /> 

<table>
<caption><h1>Create Account</h1></caption>
  <tr>
    <td height="50"><div align="right"><strong>Firstname:</strong></div></td>
    <td><span id="sprytextfield1">
    <input name="firstname" type="text" maxlength="25" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span></span></td>
    <td><div align="right"><strong>Lastname:</strong></div></td>
    <td><span id="sprytextfield2">
    <input type="text" name="lastname" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
  </tr>
  <tr>
    <td height="39"><div align="right"><strong>Gender:</strong></div></td>
    <td><select name="gender">
      <option>-Select one-&nbsp;&nbsp;&nbsp;&nbsp;</option>
      <option>male</option>
      <option>female</option>
    </select></td>
  </tr>
  <tr>
    <td height="34"><div align="right"><strong>Birthday:</strong></div></td>
    <td><select name="birthday">
      <option>-Select month-</option>
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select></td>
    <td><div align="right"><strong>Day:</strong></div></td>
	<td><select name="day">
      <option>-Select day-</option>
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
    </select></td>
    <td><div align="right"><strong>Year:</strong></div></td>
    <td><input type="text" name="year" /></td>
  </tr>
  <pre>

</pre>
  <tr>
    <td height="37"><div align="right"><strong>Login name</strong></div></td>
    <td><input type="text" name="login_name" /></td>
    <td><div align="right"><strong>Password:</strong></div></td>
    <td><input type="password" name="password" /></td>
	<td height="37"><div align="right"><strong>Email:</strong></div></td>
    <td><span id="sprytextfield3">
    <input type="text" name="email" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
  </tr>
  <tr>
    <td height="40"><div align="right"><strong>Telephone:</strong></div></td>
    <td><span id="sprytextfield4">
    <input type="text" name="teleph" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span><span class="textfieldMinCharsMsg">Minimum number of characters not met.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
    <td><div align="right"><strong>Mobile:</strong></div></td>
    <td><input type="text" name="mobile" /></td>
  </tr>
  <tr>
    <td height="41"><div align="right"><strong>AddressLine</strong> <strong>1:</strong></div></td>
    <td colspan="3"><input type="text" name="AdressL1" size="58px"/></td>
    <td><strong>AddressLine</strong> <strong>2:</strong></td>
    <td><input type="text" name="AdressL2" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Postcode:</strong> </div></td>
    <td><span id="sprytextfield5">
    <input type="text" name="Pcode" />
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
  </tr>
  <tr><td colspan="5" align="center"><input name="submit" type="submit" value="submit" />&nbsp;&nbsp;&nbsp;
  <input name="Reset" type="reset" value="Reset" /></td></tr>
</table>
</form>
<!-- content ends -->
<!-- footer begins -->
<?php include("footer.php"); ?>
<!-- footer ends -->
</div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"], maxChars:20, minChars:6});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["change"], minChars:6, maxChars:20});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["change"], minChars:10, maxChars:20});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {minChars:6, maxChars:12, validateOn:["change"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {validateOn:["change"]});
</script>
</body>
</html>