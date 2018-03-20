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
if(isset($_GET['pname']))
{
	unset ($_SESSION["pname"]);
}
if(isset($_GET['price']))
{
	unset ($_SESSION["priceup"]);
	unset ($_SESSION["pricelow"]);
}
?>
<!DOCTYPE HTML>
<html>
<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

			<title>INSERT</title>
			<link rel="stylesheet" href="css/main3.css" type="text/css" />
			<link rel="stylesheet" href="css/animate.css" />
			<link rel="stylesheet" href="css/retrieve.css" type="text/css" />
			<link rel="icon" type="image/jpg" href="images/favi.png" />
</head>

<body>
	<div class="wrapper">
		<div class="navigation slideInDown animated">
		<h1>Expecto</h1>
		<form action="retrievedata.php" method="post">
			<button class="a" type="submit" name="ret" value="Update">RETRIEVE DATA</button>
			<button class="b" type="submit" name="logout" value="logout">LOGOUT</button></form>
			<?php
			if(isset($_POST['logout']))
			{
				
				$_SESSION["logout"]="true";
				echo "<script>
				window.location.href = 'login.php';
				</script>";
			}
			if(isset($_POST['ret']))
			{
				
				echo "<script>
				window.location.href = 'retrievedata.php';
				</script>";
			}
			?>
		
		</div>
	</div>
<div class="navigation slideInDown animated">
<a class="back" href="welcomeuser.php">back</a>
</div>
<form class="p" action="ins.php" method="post">
<center><big> <font face="broadway" color="#008080" size="10px"></center></big>
<center><button type="submit" name="infile" value="infile">INSERT FILE</button>
<button type="submit" name="indata" value="indata">INSERT DATA</button></center>
</form>
</body>
</html>
<?php
if(isset($_POST['infile']))
{
	header("Location: file.php");
}
elseif(isset($_POST['indata']))
{
	header("Location: insert.php");
}
?>