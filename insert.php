<?php
session_start();
if($_SESSION["logout"]=="true")
{
	echo "<script>
	window.location.href = 'login.php';
	</script>";
	echo "inside upper if";
	echo "prev statement is not executed";
}
else{
	if(time() - $_SESSION['loggedAt'] > 900) { 
    $_SESSION["logout"]="true";
	echo "<script>
				window.location.href = 'login.php';
				</script>";
}
else
{
	$_SESSION["loggedAt"]=time();
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Insert</title>
<link rel="icon" type="image/jpg" href="images/favi.png" />
<link rel="stylesheet" href="css/main3.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" />
	
<link rel="stylesheet" href="css/insert.css" type="text/css" />


		
</head>

<body>
<script src="script5.js" type='text/javascript'>
</script>
<div class="wrapper">
<div class="navigation slideInDown animated">
		<h1>Expecto</h1>
		<form action="insert.php" method="post">
			<button class="a" type="submit" name="retrieve" value="retrieve">RETRIEVE DATA</button>
			<button class="b" type="submit" name="submit" value="logout">LOGOUT</button></form>
			<?php
			if(isset($_POST['submit']))
			{
				$_SESSION["logout"]="true";
				echo "<script>
				window.location.href = 'login.php';
				</script>";
			}
			if(isset($_POST['retrieve']))
			{
				
				echo "<script>
				window.location.href = 'retrievedata.php';
				</script>";
			}
			?>
			
		
</div>
</div>
<div class="navigation slideInDown animated">
<a class="back" href="ins.php">back</a>

		</div>
<center><big>
		      
		<div class="box"><center>
        <div id="header"><br /><br /><br /><center><big><big><big><big>ENTER DATA</big></big></big></big></center></div>
        
        <div id="main">
		<form action="insert1.php" id="form_id" onsubmit='return val();' method="post">
			<table>
            	
                 
				
				<tr>
					<td><label for="productname">Product Name</label></td>
					<td><input type="text" name="productname" id="productname" value="" required="required" placeholder="Product Name" size="30" onchange='alpha("productname");'/></td>
				</tr>
				<tr>
					<td><label for="manufacturername">Manufacturer Name</label></td>
					<td><input type="text" name="manufacturername" id="manufacturername" value="" required="required" placeholder="Manufacturer Name" size="30" onchange='alpha("manufacturername");'/></td>
				</tr>
				
				<tr>
					<td><label for="dom">Date of manufacture</label></td>
					<td><input type="date" name="dom" id="dom" required="required" placeholder="D_O_M"/></td>
				</tr>
				<tr>
					<td><label for="doe">Date of expiry</label></td>
					<td><input type="date" name="doe" id="doe" required="required" placeholder="D_O_E"/></td>
				</tr>
				
                <tr>
                	<td><label for="quantity">Quantity</label></td>
                    <td><input type="text" name="quantity" id="quantity" required="required" placeholder="Quantity" size="30" onchange='numb("quantity");' /></td>
				
                <tr>
                	<td><label for="price">Price</label></td>
                    <td><input type="text" name="price" id="price" required="required" placeholder="Price" size="30" onchange='numb("price");'/></td>
				<tr>
					<td><label for="compname">Company Name</label></td>
					<td><input type="text" name="compname" id="compname" value="" placeholder="Company name" size="30" onchange='alpha("compname");'/></td>
				</tr>
				<tr>
					<td><label for="idno">Lot id</label></td>
					<td><input type="text" name="idno" id="idno" required="required" maxlength="10" placeholder="Lot No." size="30" onchange='numb("idno");'/></td>
				</tr>
                
				
						
			</table>
			<div id="butto">
			<button type="submit" class="sbmt" name="submit"/>SUBMIT</button>
					<button type="reset" class="reset" class="reset"/>RESET</button>
		</div>
		</form></div>
        <div id="footer"></div>
		</center>
        </div>
		</big></center>

	

</body>
</html>
