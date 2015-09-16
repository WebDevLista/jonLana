<html>
<head>
<title>Cambiar alumno</title>
</head>
<body>
<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$sql = "SELECT * FROM alumnos WHERE alu_cod='$_GET[alu_cod]'";
$alu = mysql_query($sql);
echo "EDITE LOS DATOS DEL ALUMNO: <br/><br/>";
while ($row = mysql_fetch_assoc($alu)) {
echo "<form enctype='multipart/form-data' action='mAlumnos.php?alu_cod=$row[alu_cod]' method='post'>";
echo "Nombre<br/><input type='text' name='nombre' value='$row[nombre]'><br/><br/>";
echo "<input type='submit' value='Guardar'/><br/>";
echo "</form>";
};
mysql_close($dp);
?>
<a href="nagusia.html">Inicio</a>
</body>
</html>