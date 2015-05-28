<? 
$host = "127.0.0.1";
$gebruiker = "74757";
$wachtwoord = "xMYQpe";
$DBnaam = "db74757";
$tabelnaam = "persoonsgegevens";
$verbinding = mysql_connect ($host, $gebruiker, $wachtwoord);
mysql_select_db ($DBnaam);

if (isset($_GET["wp"]))
{
	$plaats = $_GET["wp"];
	if ($plaats <> "")
		{

		$opdracht = "SELECT * FROM $tabelnaam WHERE Woonplaats = '$plaats'";
		$result = mysql_query($opdracht);
		echo "<TABLE width=90% border=1 cellspacing=1 cellpadding=1>";

		while ($Rij = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo ("<td> $Rij[Naam] </td>\n");
			echo ("<td> $Rij[Adres] </td>\n");
			echo ("<td> $Rij[Postcode] </td>\n");
			echo ("<td> $Rij[Woonplaats] </td>\n");
			echo ("</tr>\n");
		}
		echo "</TABLE>";
	}
}
elseif (isset($_GET["wp2"])) {
	
	$plaats2 = $_GET["wp2"];
	
	if ($plaats2 <> "")
		{

		$opdracht = "SELECT DISTINCT Woonplaats FROM $tabelnaam WHERE Woonplaats LIKE '$plaats2%'";
		$result = mysql_query($opdracht);
		echo "<TABLE width=90% border=1 cellspacing=1 cellpadding=1>";

		while ($Rij = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo ("<td> $Rij[Woonplaats] </td>\n");
			echo ("</tr>\n");
		}
		echo "</TABLE>";
	}
}

?>