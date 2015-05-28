<?php
require"../../../connection.php";
?>
<html>
<head>
	<script language="javascript" src="browsercheck.js"></script>

<style type="text/css">
  <!--#gegevens {
  width:762px;
  height:181px;
  z-index:1;
  background-color: #FFFF99;
  }
  -->
</style>

<?php
$array = array();
$array2 = array();

$sql="SELECT * FROM `meubels`";
$query = mysql_query($sql);

while($row = mysql_fetch_array($query)){

  array_push($array, $row['afbeelding']);
  array_push($array2, $row['artikelnr']);
}

  echo "<table width='100%' height='100%' border='1'>";
  echo "<tr>";
  echo    "<td><img src=".$array[0]." onClick='informatie(".$array2[0].")' height='100%'></td>";
  echo    "<td rowspan='3' id='gegevens'></td>";
  echo    "<td><img src=".$array[1]." onClick='informatie(".$array2[1].")' height='100%'></td>";
  echo  "</tr>";
  echo  "<tr>";
  echo    "<td><img src=".$array[2]."  onClick='informatie(".$array2[2].") 'height='100%'></td>";
  echo    "<td><img src=".$array[3]."  onClick='informatie(".$array2[3].") 'height='100%'></td>";
  echo  "</tr>";
  echo  "<tr>";
  echo    "<td><img src=".$array[4]."  onClick='informatie(".$array2[4].")' height='100%'></td>";
  echo   "<td><img src=".$array[5]."   onClick='informatie(".$array2[5].")' height='100%'></td>";
  echo  "</tr>";
  echo"</table>";


  ?>
</body>
</html>

