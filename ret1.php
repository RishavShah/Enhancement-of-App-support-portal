<?php
session_start();
if(isset($_POST['submit']))
{

	$con=odbc_connect("Try","","abcd");
	$id=$_SESSION["id"];
	$pname=$_POST['d1'];
	$sql="select * from userdata where ID=".$id." and pname='".$pname."'";
	 echo "<table><tr>";
	   echo "<th>Manufacturer Name  &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>Date of Manu &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>Date of EXP &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>qty &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>price &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>company &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>Lot &nbsp; &nbsp; &nbsp;</th></tr>";
	$res=odbc_exec($con, $sql);
	while(odbc_fetch_row($res))
	{
		$o1=odbc_result($res, "mname");
		$o2=odbc_result($res, "dom");
		$o3=odbc_result($res, "doe");
		$o4=odbc_result($res, "qty");
		$o5=odbc_result($res, "price");
		$o6=odbc_result($res, "coname");
		$o7=odbc_result($res, "lid");
		echo "<tr><th>$o1 &nbsp; &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o2 &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o3 &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o4 &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o5 &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o6 &nbsp; &nbsp; &nbsp;</th>";
	   echo "<th>$o7 &nbsp; &nbsp; &nbsp;</th></tr>";
		
	}
	
	
}
?>