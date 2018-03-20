<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title></title>
<link rel="icon" type="image/jpg" href="images/favi.png" />
<link rel="stylesheet" href="css/main3.css" type="text/css" />	
<link rel="stylesheet" href="css/signup.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
</head>
<body>
<?php
session_start();

//$tmpfname="B.xlsx";
$tmpfname=$_FILES["file"]["name"];
$ext = pathinfo($tmpfname, PATHINFO_EXTENSION);
if( $ext == 'xls' || $ext == 'xlsx' ) {
	excphp();
	}
else
{
	echo 'File cannot be loaded';
	
}
function excphp()
{
	require_once"Classes/PHPExcel.php";
$con=odbc_connect("Try","","abcd");
$id=$_SESSION["id"];
$tmpfname=$_FILES["file"]["tmp_name"];
$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
$excelObj = $excelReader->load($tmpfname);
$worksheet = $excelObj->getActiveSheet();
$lastRow = $worksheet->getHighestRow();
$lastColumn = $worksheet->getHighestColumn();
$count=0;
echo"<table>";
/*for ($row = 1; $row <= $lastRow; $row++) {
			 echo "<tr><td>";
			 echo $worksheet->getCell('A'.$row)->getValue();
			 echo "</td><td>";
			 echo $worksheet->getCell('B'.$row)->getValue();
			 echo "</td><tr>";
		}*/
		$row=1;
		for($col = 'A'; $col <= $lastColumn;$col++) {
		
			$v=$worksheet->getCell($col.$row)->getValue();
			if ($v=='pname')
			{
				$pname=$col;
				$count++;
			}
			else if($v=='mname') {
				$mname=$col;
			$count++;
			}
			else if($v=='dom') {
				$dom=$col;
			$count++;
			}
			else if($v=='doe') {
				$doe=$col;
			$count++;
			}
			else if($v=='qty') {
				$qty=$col;
			$count++;
			}
			else if($v=='price') {
				$price=$col;
			$count++;
			}
			else if($v=='coname') {
				$coname=$col;
			$count++;
			}
			else if($v=='lid') {
				$lid=$col;
			$count++;
			}
		}
		$id=32;
		if($count!=8)
			echo "Insufficient fields";
		
		else{
		for ($row = 2; $row <= $lastRow; $row++) {
			
		$proname= $worksheet->getCell($pname.$row)->getValue();
		$maname= $worksheet->getCell($mname.$row)->getValue();
		//$datem= $worksheet->getCell($dom.$row)->getValue();
		$UNIX_DATE = ( $worksheet->getCell($dom.$row)->getValue() - 25569) * 86400;
		$datem=	 gmdate("d-m-Y ", $UNIX_DATE);
		$UNIX_DATE = ( $worksheet->getCell($doe.$row)->getValue() - 25569) * 86400;	
		$datee=gmdate("d-m-Y ", $UNIX_DATE);
		$quan= $worksheet->getCell($qty.$row)->getValue();
		$pri= $worksheet->getCell($price.$row)->getValue();
		$comp= $worksheet->getCell($coname.$row)->getValue();
		$lot= $worksheet->getCell($lid.$row)->getValue();
		$sql = "insert into userdata(ID,pname,mname,dom,doe,qty,price,coname,lid) values ('".$id."','".$proname."','".$maname."','".$datem."','".$datee."','$quan','$pri','".$comp."','$lot')";
		$res=odbc_exec($con,$sql);
		
		
		}
		
		if($res)
		{
			header("Location:file.php");
		}

	else
		echo "Sorry"; 
		}
		
		echo "</table>";
}
		?>
</body>
</html>