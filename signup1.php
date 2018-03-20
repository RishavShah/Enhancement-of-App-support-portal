<?php
session_start();
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$compname=$_POST['compname'];
	$phoneno=$_POST['phoneno'];
	$uname=$_POST['mail'];
	$password=$_POST['pswrd'];
	$con=odbc_connect("Try","","abcd");
	$sql="SELECT * from info where username='".$uname."'";
	$ex=odbc_exec($con,$sql);
	$count=odbc_result($ex,"firstname");
	if($count!=NULL)
	{
		echo "user exist";
		header("refresh:2;url=signup.php");
	}
	else
	{
		$sql="insert into info(username,password,firstname,lastname,gender,dob,country,state,city,compname,phoneno) values ('".$uname."','".$password."','".$firstname."','".$lastname."','".$gender."','".$dob."','".$country."','".$state."','".$city."','".$compname."',".$phoneno.")";
	$res=odbc_exec($con, $sql);
	$sql1="select * from info where username='".$uname."' and password='".$password."'";
	$res1=odbc_exec($con, $sql1);
	$id1=odbc_result($res1,"firstname");
	$id=odbc_result($res1,"ID");
	$_SESSION["id"]=$id;
	$_SESSION["fname"] = $id1;
	$_SESSION["logout"]="false";
	if($res)
	{
		header("Location:login.php");
	}
	}
		
	
}
?>