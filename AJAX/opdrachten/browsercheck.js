function check()
	{
	var xmlHttp;
	try
	{
		// Firefox, Opera 8.0+, Safari
		xmlHttp = new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
		{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e)
		{
			try
		{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
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

//vergeet niet de methode check() hierboven te plaatsen.
function persoonsgegevens(woonplaats)
{
	var xmlHttp = check();
	xmlHttp.onreadystatechange = function()
	{
		if(xmlHttp.readyState == 4)
		{
		document.getElementById('gegevens').innerHTML=xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","zoekscript.php?wp=" + woonplaats, true);
	xmlHttp.send(null);
}

function suggestie(woonplaats)
{
	var xmlHttp = check();
	xmlHttp.onreadystatechange = function()
	{
		if(xmlHttp.readyState == 4)
		{
		document.getElementById('gegevens').innerHTML=xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","zoekscript.php?wp2=" + woonplaats, true);
	xmlHttp.send(null)
}

function informatie(inf)
{
	
	var xmlHttp = check();
	xmlHttp.onreadystatechange = function()
	{
		if(xmlHttp.readyState == 4)
		{
		document.getElementById('gegevens').innerHTML=xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","zoekscript3.php?inf=" + inf , true);
	xmlHttp.send(null)
}