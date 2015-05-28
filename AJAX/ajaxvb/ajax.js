function check(){

  var xmlHttp;
  try
    {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
    }
  catch (e)
    {
    // Internet Explorer
    try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
    catch (e)
      {
      try
        {
        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
      catch (e)
        {
        alert("Your browser does not support AJAX!");
        return false;
        }
      }
    }
  	return xmlHttp;
}

function form()
 { 
 	var xmlHttp = check();	
	
    xmlHttp.onreadystatechange=function()
      {
      if(xmlHttp.readyState==4)
        {
			document.getElementById("div1").innerHTML=xmlHttp.responseText;
        }
      }
	  
	xmlHttp.open("GET","test.php",true);
	  
    xmlHttp.send(null);
 	
	
  }
