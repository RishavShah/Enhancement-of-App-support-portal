<?php  
 session_start(); 
$con=odbc_connect("Try","","abcd");
$id=$_SESSION["id"];  
if(isset($_GET['sql']))
{
	$sql=$_GET['sql'];
}
$res=odbc_exec($con,$sql);  
 
  
$columnHeader = '';  
$columnHeader = "Product Name" . "\t" . "Manufacturer Name" . "\t" . "Date of Manu" . "\t"."Date of Exp" . "\t" ."Quantity" . "\t" ."Price" . "\t" ."Company" . "\t" ."Lot id" . "\t" ;  
  
$setData = '';  
  
while ($rec = odbc_fetch_array($res)) {  
    $rowData = '';  
	$o1=$rec["pname"];
	$o2=$rec["mname"];
	$o3=$rec["dom"];
	$o4=$rec["doe"];
	$o5=$rec["qty"];
	$o6=$rec["price"];
	$o7=$rec["coname"];
	$o8=$rec["lid"];
     
        $o1 = '"' . $o1 . '"' . "\t";  
        $rowData .= $o1;  
		$o2 = '"' . $o2 . '"' . "\t";  
        $rowData .= $o2; 
		$o3 = '"' . $o3 . '"' . "\t";  
        $rowData .= $o3; 
		$o4 = '"' . $o4 . '"' . "\t";  
        $rowData .= $o4; 
		$o5 = '"' . $o5 . '"' . "\t";  
        $rowData .= $o5; 
		$o6 = '"' . $o6 . '"' . "\t";  
        $rowData .= $o6; 
		$o7 = '"' . $o7 . '"' . "\t";  
        $rowData .= $o7; 
		$o8 = '"' . $o8 . '"' . "\t";  
        $rowData .= $o8; 
    
		
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>