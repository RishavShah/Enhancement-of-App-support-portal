
<?php
session_start();
$id=$_SESSION["id"];
$con=odbc_connect("Try","","abcd");
if((isset($_POST['columnName'])&&(isset($_POST['sort']))))
{
$order = $_POST['columnName'];
$sort = $_POST['sort'];
}
else {
	$order='qty';
	$sort='ASC';
}

if((isset($_POST['pname']))||(isset($_POST['mname']))||(isset($_POST['qty']))||(isset($_POST['dom']))||(isset($_POST['doe']))||(isset($_POST['price']))||(isset($_POST['coname']))||(isset($_POST['lid'])))
{
 $search = trim($_POST['pname']);
 $searchm = trim($_POST['mname']);
  $quan = trim($_POST['qty']);
   $dom = trim($_POST['dom']);
    $doe = trim($_POST['doe']);
	 $price = trim($_POST['price']);
	  $coname = trim($_POST['coname']);
	  $lid = trim($_POST['lid']);
	 
	  
	  
 if (!get_magic_quotes_gpc()){ 
 $search=addslashes($search);
 $searchm=addslashes($searchm);
 $quan=addslashes($quan);
 $dom=addslashes($dom);
  $doe=addslashes($doe);
   $price=addslashes($price);
    $coname=addslashes($coname);
	 $lid=addslashes($lid);
	 
 }
$query = "select * from userdata where ID=".$id." and pname LIKE '%$search%' and mname LIKE '%$searchm%' and qty LIKE '%$quan%'   and price LIKE '%$price%' and coname LIKE '%$coname%' and dom like '%$dom%' and doe like '%$doe%' and lid LIKE '%$lid%' order by $order $sort"; 
}
else{
	$query = "
  SELECT * FROM userdata where ID=".$id." order by $order $sort
 ";
}

$res=odbc_exec($con,$query);
$count=odbc_fetch_row($res);
if($count>0)
{
	$sort=='DESC'? $sort='ASC' : $sort='DESC' ;
	echo "
	<center><table id='res'  cellpadding='5' cellspacing='1' border='1' class='display' width='1000'>
	<tr bgcolor='#008080'>";
	
	$o1=stripslashes(odbc_result($res, "mname"));
		$o2=stripslashes(odbc_result($res, "pname"));
		$o3=stripslashes(odbc_result($res, "dom"));
		$o4=stripslashes(odbc_result($res, "doe"));
		$o5=stripslashes(odbc_result($res, "qty"));
		$o6=stripslashes(odbc_result($res, "price"));
		$o7=stripslashes(odbc_result($res, "coname"));
		$o8=stripslashes(odbc_result($res, "lid"));
		echo "
		<tr>
		<td width='250'>$o2</td>
		<td width='250'>$o1</td>
		<td width='250'>$o3</td>
		<td width='250'>$o4</td>
		<td width='250'>$o5</td>
		<td width='250'>$o6</td>
		<td width='250'>$o7</td>
		<td width='250'>$o8</td>
		</tr>";
while($row=odbc_fetch_array($res))
{

		$o2=stripslashes($row['pname']);
		$o1=stripslashes($row['mname']);
		$o3=stripslashes($row['dom']);
		$o4=stripslashes($row['doe']);
		$o5=stripslashes($row['qty']);
		$o6=stripslashes($row['price']);
		$o7=stripslashes($row['coname']);
		$o8=stripslashes($row['lid']);
		echo "
		<tr>
		<td>$o2</td>
		<td>$o1</td>
		<td>$o3</td>
		<td>$o4</td>
		<td>$o5</td>
		<td>$o6</td>
		<td>$o7</td>
		<td>$o8</td>
		</tr>";
			
	}
	echo "</table></div>";
$links="exportexcel.php?sql=$query";
	echo '<a href="'.$links.'"> Export To Excel </a>'; 

}

else
{
echo "No records";
}
 

?>