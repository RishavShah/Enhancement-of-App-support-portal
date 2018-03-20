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
<html lang="en">
<head>
  <title>welcome user</title>
  <link rel="icon" type="image/jpg" href="images/favi.png" />
  <link rel="stylesheet" href="css/animate.css" />
	 <link rel="stylesheet" href="css/demo.css" />

	 <link rel="stylesheet" href="css/main3.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="backfix.min.js"></script>
	
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand the" href="#"><b><font size="5">My Profile</font></b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><b><form method="post"><input type="submit" name="b1" class="the" value="logout"/></form></b></li>
       <?php
			if(isset($_POST['b1']))
			{
					$_SESSION["logout"]="true";
				echo "<script>
				window.location.href = 'login.php';
				</script>";
			}
	   ?>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center slideInDown animated">
  <h3><font face="magneto" size="30px">Welcome <?php echo $_SESSION["fname"];?> to EXPECTO</font></h3>
  
</div>

<div class="container-fluid bg-2 text-center fadeInDown animated">
  <h3><font face="broadway">What can you do? </font></h3> 
  <a href="ins.php" class="btn btn-default btn-lg">
     update
  </a>
   <a href="retrievedata.php" class="btn btn-default btn-lg">
     retrieve
  </a>
   <a href="repmed.php" class="btn btn-default btn-lg">
     reports
  </a>
</div>


</body>
</html>
