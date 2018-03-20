<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Sign Up</title>
<link rel="icon" type="image/jpg" href="images/favi.png" />
<link rel="stylesheet" href="css/main3.css" type="text/css" />	
<link rel="stylesheet" href="css/signup.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
</head>

<body>
<script src="script4.js" type='text/javascript'>
</script>
<div class="wrapper">
<div class="navigation slideInDown animated">
		<h1>Expecto</h1>
			<a class="about " href="#">about us |</a> 
			<a class="signup" href="login.php">login |</a>
		
</div>
</div>
<div class="navigation slideInDown animated">
<a class="back" href="index.php">back</a>
		</div>
<center><big>      
		<div class="box"><center>
        <div id="header"><br /><br /><br /><center><big><big><big><big>SIGN UP</big></big></big></big></center></div> 
        <div id="main">
		<form action="signup1.php" method="post" id="myform" onsubmit='return validate();'>
			<table>
            	<tr><br /></tr>
            	<tr>
                	<td><label class="personal">Personal Info.</label></td>
                 </tr>
                 
				
				<tr>
					<td><label for="firstname">First Name</label></td>
					<td><input type="text"  name="firstname" id="firstname" value="" required="required" placeholder="First Name" size="30" onchange='alpha("firstname");'/></td>
				</tr>
				<tr>
					<td><label for="lastname">Last Name</label></td>
					<td><input type="text" name="lastname" id="lastname" value="" required="required" placeholder="Last Name" size="30" onchange='alpha("lastname");'/></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
				
					<td><input type="radio" name="gender" value="male" id="male"/><label for="male">Male</label>
					
					<input type="radio" name="gender" value="female" id="female"/><label for="female">Female</label></td>
				</tr>
				<tr>
					<td><label for="dob">Date of Birth</label></td>
					<td><input type="date" name="dob" id="dob" required="required" width="30" placeholder="D_O_B"/></td>
				</tr>
				<tr>
					<td><label for="Country"><font color= #008080 face= broadway> Country </font></label></td>
					<td><select name="country">
					
						<option value="India">India</option>
						<option value="Japan">Japan</option>
						<option value="canada">Canada</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="France">France</option>
						<option value="Germany">Germany</option>
						<option value="Australia">Australia</option>
						<option value="United States">United States</option>
						<option value="Switzerland">Switzerland</option>
						<option value="London">London</option>
					</select></td>
				</tr>
                <tr>
                	<td><label for="state">State</label></td>
                    <td><input type="text" name="state" id="state" required="required" placeholder="State" size="30" onchange='alpha("state");' /></td>
				
                <tr>
                	<td><label for="city">City</label></td>
                    <td><input type="text" name="city" id="city" required="required" placeholder="City" size="30" onchange='alpha("city");'/></td>
				<tr>
					<td><label for="compname">Company Name</label></td>
					<td><input type="text" name="compname" id="compname" value="" placeholder="Company name" size="30" onchange='alpha("compname");'/></td>
				</tr>
				<tr>
					<td><label for="phoneno">Phone Number</label></td>
					<td><input type="text" name="phoneno" id="phoneno" required="required"  maxlength="10" placeholder="Phone No." size="30" onchange='valphn();' /></td>
				</tr>
                
                <tr>
                	<td><label class="login"></label></td>
                </tr>
                
				<tr>
					<td><label for="mail">Email Id</label></td>
					<td><input type="email" name="mail" id="mail" required="required" placeholder="Email Id" size="30"/></td>
				</tr>
				<tr>
					<td><label for="pswrd">Password</label></td>
					<td><input type="password" name="pswrd" id="pswrd" required="required" placeholder="Password" size="30"/></td>
				</tr>
				</table>
				
				
					<button class="signup" type="submit" name="submit" value="submit">SIGN UP</button>
					<button class="reset" type="reset" class="reset">RESET</button>
				
			
		</form></div>
        <div id="footer"></div>
		</center>
        </div>
		</big><center>
	

</body>
</html>

