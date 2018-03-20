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
?>
<!DOCTYPE HTML>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

			<title>Retrieve</title>
			<link rel="stylesheet" href="css/main3.css" type="text/css" />
			<link rel="stylesheet" href="css/animate.css" />
			<link rel="icon" type="image/jpg" href="images/favi.jpg" />
			<link rel="stylesheet" href="css/report.css" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<div class="navigation slideInDown animated">
		<h1>Expecto</h1>
		<form action="retrievedata.php" method="post">
			<button class="a" type="submit" name="update" value="Update">UPDATE DATA</button>
			<button class="b" type="submit" name="logout" value="logout">LOGOUT</button></form>
			<?php
			if(isset($_POST['logout']))
			{
				
				$_SESSION["logout"]="true";
				echo "<script>
				window.location.href = 'login.php';
				</script>";
			}
			if(isset($_POST['update']))
			{
				
				echo "<script>
				window.location.href = 'insert.php';
				</script>";
			}
			?>
		
		</div>
	</div>
<div class="navigation slideInDown animated">
<a class="back" href="welcomeuser.php">back</a>
</div>
<form class="p" action="repmed.php" method="post">
				<tr>
					<td><font color= #008080 face= broadway> X-axis </font></td>
					<td><select name="x-axis">
					
						<option value="pname">Product Name</option>
						<option value="mname">Manufacturer Name</option>
						<option value="coname">Company Name</option>
						<option value="dom">Date Of Manufacture</option>
						<option value="doe">Date Of Expiry</option>
					</select></td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</tr>
				<tr>
						<td><font color= #008080 face= broadway> Y-axis </font></td>
						<td><select name="y-axis">
						<option value="qty">Quantity</option>
						<option value="price">Price</option>
						<option value="lid">Lot ID</option>
					</select></td>
				</tr>
				<br><br>
				<button class="submit" type="submit" name="plot" value="plot">PLOT</button>
</form>
</body>
</html>
<?php
if(isset($_POST['plot']))
{
	$xaxis=$_POST["x-axis"];
	$_SESSION["xaxis"]=$xaxis;
	$yaxis=$_POST["y-axis"];
	$_SESSION["yaxis"]=$yaxis;
	header("Location: report1bar.html");
}
?>