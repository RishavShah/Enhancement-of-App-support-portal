<?php
session_start();
$id=$_SESSION["id"];
$xax=$_SESSION["xaxis"];
$yax=$_SESSION["yaxis"];
header('Content-Type: application/json');
	$con=odbc_connect("Try","","abcd");
	$query="select $xax,$yax from userdata where ID=".$id."";
	$res=odbc_exec($con,$query);
	$data=array();
	while($row=odbc_fetch_array($res))
	{
			$dataItem[]=array();
			$dataItem['label']=$row[$xax];
			$dataItem['value']=$row[$yax];
			array_push($data, $dataItem);
	}
	$j=json_encode($data);
	echo $j;

?>
