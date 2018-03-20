function alpha(elementId)
{
	var x = document.getElementById(elementId).value;
	var g = document.getElementById(elementId).placeholder;
	var i=0;
	var count=0;
	while(i<x.length)
	{
		if(isNaN(x[i])==false &x.charAt(i)!=' ')
		{
			count++;
		}
		i++;
	}
	if (count>0)
 {
	alert("Enter letters in " +g);
	document.getElementById(elementId).focus();
	document.getElementById(elementId).style.borderColor = "red";
	return false;;
 }
 else
{
	document.getElementById(elementId).style.borderColor = "green";
	return true;
}
}
function val()
{

	if(alpha("productname")==0)
	{
		return false;
	}
	else{
		if(alpha("manufacturername")==0)
		{
			return false;
		}
		else {
			if(numb("quantity")==0)
			{
				return false;
			}
			else{
				if(numb("price")==0)
				{
					return false;
				}
				else{
					if(alpha("compname")==0)
					{
						return false;
					}
					else {
						if(numb("idno")==false)
							return false;
						else
							return true;
						
						}
					}
				}
				
				}
			}
			
			}

function numb(elementId)
{
 var f = document.getElementById(elementId).value;
 var i=0;
 var count=0;
 while(i<f.length)
 {
    if(isNaN(f[i])==true)
{
	count++;
}
i++;
 }
 if (count>0)
 {
	 alert("Enter numbers");
	document.getElementById(elementId).focus();
	document.getElementById(elementId).style.borderColor = "red";
	return false;
 }
else
{
	document.getElementById(elementId).style.borderColor = "green";
	correct++;
}
}