<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Retrieve</title>
<link rel="icon" type="image/jpg" href="images/favi.png" />
<link rel="stylesheet" href="css/main3.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" href="css/retrieve1.css" type="text/css" />
<link rel="stylesheet" href="css/ret.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>
<div class="navigation slideInDown animated">
<a class="back" href="welcomeuser.php">back</a>
</div>
<script src="fetch.js" type='text/javascript'>
</script>
<center>
<input type='hidden' id='sort' value='asc'>
<table style="width:1300" id="result"  cellpadding="5" cellspacing="1" border="1" class="display" >
    <thead>
       <tr bgcolor='#008080'>
            <th width="100">Product name</th>
            <th width="100">Manufacturer Name</th>
			<th width="100">Date of Manu.</th>
			<th width="100">Date of Expiry.</th>
            <th width="100">Quantity</th>
			<th width="100">Price</th>
			<th width="100">Company</th>
			<th width="100">Lot id</th>
			
        </tr>
    </thead>
    <thead>
        <tr>
		
            <td width="250"><input type="text" name="pname" id="pname" autocomplete="off"  class="search-input-text"></td>
            <td  width="250"><input type="text" name="mname" id="mname" autocomplete="off"  class="search-input-text"></td>
			<td  width="250"> <input type="number" placeholder="yyyy or dd or mm" name="dom" id="dom" maxlength="4" autocomplete="off" class="search-input-text"></td>
			<td  width="250"><input type="number" placeholder="yyyy or dd or mm" name="doe" id="doe" size="10" autocomplete="off" class="search-input-text"></td>
            <td  width="250"><input type="number" name="qty" id="qty" autocomplete="off" class="search-input-text"></td>
			<td  width="250"><input type="number" name="price" id="price" autocomplete="off" class="search-input-text"></td>
			 <td  width="250"><input type="text" name="coname" id="coname" autocomplete="off" class="search-input-text"></td>
			 <td  width="250"><input type="number" name="lid" id="lid" autocomplete="off" class="search-input-text"></td>
			
        </tr>
    </thead>
	
   <br />
	
   <table id="res" cellpadding="5" cellspacing="1" border="1" class="display" width="1300"></table>
  
   </table>
   </center>
		

</body>
</html>