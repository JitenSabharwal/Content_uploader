//funciton to select an option from menu
//funciton to select and load action from side menu bar
function verify()
{

	var login=document.forms['loginform'].elements['login'].value;
	var password=document.forms['loginform'].elements['password'].value;
	
	var str="login="+login+"&password="+password+"&Submit=Submit";
	alert(str);
	xml=createAjaxObj();
	xml.open("POST","./functions/login_verify.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	alert(xml.responseText);
	switch(xml.responseText.trim())
	{
		case "Success" : 	window.open("index.php","_self");
							break;
		case "Failed"  :	alert("Enter corect Username and Password");
							break;
	}
	return false;
}

function registerme()
{
	var  firstName=document.forms['registerform'].elements['firstName'].value;
	var lastName=document.forms['registerform'].elements['lastName'].value;
	var regNo=document.forms['registerform'].elements['regNo'].value;
	var domain=document.forms['registerform'].elements['domain'].value;
	var username=document.forms['registerform'].elements['email'].value;
	var password=document.forms['registerform'].elements['password'].value;
	var str="firstName="+firstName+"&lastName="+lastName+"&regNo="+regNo+"&domain="+domain+"&username="+username+"&password="+password+"&Submit=Submit";
	
	
	xml=createAjaxObj();
	xml.open("POST","./functions/registeration.php",false);
	xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xml.send(str);
	alert(xml.responseText);
	if(xml.responseText.trim()=="true")
	{
		alert("You are Successfully Registered"+"<br>"+"Username= "+username+"<br>"+"Password= "+password);
		window.open('loginindex.php',"_self");
		return false;						  			
	}
	else
	{
		switch(xml.responseText.trim())
		{
			case "false" 			: 	alert("User by  this username is already registered");											
										break;
			case "error"			: 	alert("Error occured");
										window.open("register.php","_self");
										break;
			default					:   alert("Problem ocuuered");
										window.open("register.php","_self");
										 						  	
		}
	}	
	return false;
}

//function to load states from xml file
// function loadStates()
// {
// 	xml=createAjaxObj();
// 	xml.open("get","./xml/states.xml",true);
// 	xml.send();
// 	xml.onreadystatechange=function()
// 	{
// 		if(xml.readyState==4 && xml.status==200)
			
// 	}
// }