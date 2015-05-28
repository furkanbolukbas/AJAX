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

function meubelspecs(anr){
	
var xmlHttp = check();

    xmlHttp.onreadystatechange=function()
      {
      if(xmlHttp.readyState==4)
        {
       document.getElementById('output').innerHTML=xmlHttp.responseText;
	   
        }
      }
	  
	xmlHttp.open("GET","source.php?anr="+anr,true);
	  
    xmlHttp.send(null);
  }