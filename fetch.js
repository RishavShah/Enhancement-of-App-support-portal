$(document).ready(function(){

 load_data();

 function load_data(query1,query2,query3,query4,query5,query6,query7,query8)
 {
  $.ajax({
   url:"indu.php",
   method:"POST",
   data:{pname:query1,mname:query2,qty:query3,dom:query4,doe:query5,price:query6,coname:query7,lid:query8},
   success:function(data)
   {
    $('#res').html(data);
   }
  });
 }
 $('#pname').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val(); 
   var qty= $('#qty').val();
  
    var dom=$('#dom').val();
    var doe= $('#doe').val();
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
    load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
 });
 $('#mname').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
    var dom= $('#dom').val();
	
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
 load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
 });
 $('#qty').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
     var dom= $('#dom').val();
	var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
   load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
 });
  $('#dom').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
     var dom= $('#dom').val();
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
   load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
 });
 $('#doe').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
     var dom= $('#dom').val();
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
    load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
});
 $('#price').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
    var dom= $('#dom').val();
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
   load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
});
 $('#coname').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
    var dom= $('#dom').val();
	
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
  load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
});
 $('#lid').keyup(function(){
  var pname = $('#pname').val();
   var mname = $('#mname').val();
   var qty= $('#qty').val();
     var doe= $('#doe').val();
    var dom=$('#dom').val();
	 var price= $('#price').val();
	  var coname= $('#coname').val();
	   var lid= $('#lid').val();
  if((pname != '')||(mname!='')||(qty!='')||(dom!='')||(doe!='')||(price!='')||(coname!='')||(lid!=''))
  {
   load_data(pname,mname,qty,dom,doe,price,coname,lid);
  }
  else
  {
   load_data();
  }
});
 });
 