<? 
$host = "127.0.0.1";
$gebruiker = "74757";
$wachtwoord = "xMYQpe";
$DBnaam = "db74757";
$tabelnaam = "meubels";
$verbinding = mysql_connect ($host, $gebruiker, $wachtwoord);
mysql_select_db ($DBnaam);

if (isset($_GET["inf"]))
{
	$info = $_GET["inf"];
	if ($info <> "")
		{

		$opdracht = "SELECT * FROM $tabelnaam WHERE artikelnr = $info";
		$result = mysql_query($opdracht);
		echo "<TABLE width=90% border=1 cellspacing=1 cellpadding=1>";

		while ($Rij = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo ("<td> $Rij[artikelnr] </td>\n");
			echo ("<td> $Rij[naam] </td>\n");
			echo ("<td> $Rij[type] </td>\n");
			echo ("<td> $Rij[omschrijving] </td>\n");
			echo ("<td> $Rij[prijs] </td>\n");
			echo ("</tr>\n");
		}
		echo "</TABLE>";
	}
}

?>