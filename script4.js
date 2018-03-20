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
function validate()
{

	if(alpha("firstname")==0)
	{
		return false;
	}
	else{
		if(alpha("lastname")==0)
		{
			return false;
		}
		else {
			if(alpha("state")==0)
			{
				return false;
			}
			else{
				if(alpha("city")==0)
				{
					return false;
				}
				else{
					if(alpha("compname")==0)
					{
						return false;
					}
					else {
						if(valphn()==false)
							return false;
						else
							return true;
						
						}
					}
				}
				
				}
			}
			
			}
function valphn()
{
	var n=document.getElementById('phoneno').value;
	if(isNaN(n)==true)
					{
						alert("Enter numbers");
						document.getElementById('phoneno').focus();
						document.getElementById('phoneno').style.borderColor = "red";
						return false;
					}
					else{
							if(n.length<10 || n.length>10)
							{
								alert("phone no is 10 character long");
								document.getElementById('phoneno').style.borderColor = "red";
								document.getElementById("phoneno").focus();
								return false;
							}
							else 
							{
								document.getElementById('phoneno').style.borderColor = "green";
								correct++;
								return true;
							}
						}
}