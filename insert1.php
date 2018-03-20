<?php
session_start();
if(time() - $_SESSION['loggedAt'] > 900) { 
    $_SESSION["logout"]="true";
	echo "<script>
				window.location.href = 'login.php';
				</script>";
}
else
{
	$_SESSION["loggedAt"]=time();
if(isset($_POST['submit']))
{
	$con=odbc_connect("Try","","abcd");
	$id=$_SESSION["id"];
	$pname=$_POST['productname'];
	$mname=$_POST['manufacturername'];
	$dom=$_POST['dom'];
	$doe=$_POST['doe'];
	$qty=$_POST['quantity'];
	$price=$_POST['price'];
	$coname=$_POST['compname'];
	$lid=$_POST['idno'];
	$sql="insert into userdata(ID,pname,mname,dom,doe,qty,price,coname,lid) values ('$id','$pname','$mname','$dom','$doe','$qty','$price','$coname','$lid')";
	$res=odbc_exec($con,$sql);
	
	if($res)
	{
		header("Location: insert.php");;
	}
}
}
?>