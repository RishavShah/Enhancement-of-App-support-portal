<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title></title>
<link rel="icon" type="image/jpg" href="images/favi.png" />
<link rel="stylesheet" href="css/main3.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/insert.css" type="text/css" />	
</head>
<body>
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
			</form>
			</div>
			</div>
			<div class="navigation slideInDown animated">
<a class="back" href="ins.php">back</a></div>

			
<form enctype="multipart/form-data" method="post" action="excel.php" role="form">
    <div class="form-group">
        <input type="file" style="margin-left:45%; margin-top:10%; " name="file" id="file" size="150">
        <p align="center" class="help-block"><font color="#008080">can export only excel files</font></p>
    </div>
    <button type="submit" style="margin-left:45%;" name="Import" value="Import">Upload</button>
</form>
</body>
</html>