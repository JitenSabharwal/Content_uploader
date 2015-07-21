//this file will contain the library of some important global function


//function to create and return the ajax object
function createAjaxObj()
{
	 if (window.XMLHttpRequest)
    {
        return new XMLHttpRequest();//IE7+, Firefox, Chrome, Opera, Safari
    }
    else if (ActiveXObject("Microsoft.XMLHTTP"))
    {
        return ActiveXObject("Microsoft.XMLHTTP");//IE6/5
    }
    else if (ActiveXObject("Msxml2.XMLHTTP"))
    {
        return ActiveXObject("Msxml2.XMLHTTP");//other
    }
    else
    {
        alert("Error: Your browser does not support AJAX.");
        return false;
    }
   
}

//this function display the reponse of the xml in specified object
//here in this function the holder is the id of the element which should contai the reponse
function XMLDisplayId(xml,holder)
{
	xml.onreadystatechange=function()
	{
		if(xml.readyState==4 && xml.status==200)
			document.getElementById(holder).innerHTML=xml.responseText;
	}
}

//this function takes the holder argument as the js object
//the object should be selected by a valid jquery selector
//** this requires jquery
function XMLDisplay(xml,holder)
{
	xml.onreadystatechange=function()
	{
		if(xml.readyState==4 && xml.status==200)
			$(holder).html(xml.responseText);
	}
}

//this function just executes the passed set of instructions 
// when the the XML is completed
function XMLPerform(xml,instruction)
{
	xml.onreadystatechange=function()
	{
		if(xml.readyState==4 && xml.status==200)
			instruction();
	}
}

//this funtion just returns the response from the completed ajax script
function XMLResponse(xml)
{
	xml.onreadystatechange=function()
	{
		if(xml.readyState==4 && xml.status==200)
			{
				resp=xml.responseText;
				return resp;
			}			
	}
}

function valid_email(val)
{
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(val);
}