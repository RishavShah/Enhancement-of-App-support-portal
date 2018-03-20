<?php
session_start();
if(isset($_POST['submit']))
{
	$con=odbc_connect("Try","","abcd");
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from info where StrComp(username,'$uname',0)=0 and StrComp(password,'$password',0)=0";
	$res=odbc_exec($con, $sql);
	$count=odbc_fetch_row($res);
	$id=odbc_result($res,"ID");
	$_SESSION["id"]=$id;
	$id1=odbc_result($res,"firstname");
	$_SESSION["fname"]=$id1;
	$_SESSION["logout"]="false";
	$_SESSION["loggedAt"]=time();
	if($count==1)
	{
		
		header("Location: welcomeuser.php");
		
	}
	if($count==null)
	{
		echo "<script>
		alert('Invalid User Name or Password!');
        window.location='login.php';
		</script>";
	}
}
?>