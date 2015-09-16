<html>
<head>
<title>Cambiar asignatura</title>
</head>
<body>
<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$sql = "SELECT * FROM asignaturas WHERE asig_cod='$_GET[asig_cod]'";
$asig = mysql_query($sql);
echo "EDITE LOS DATOS DE LA ASIGNATURA: <br/><br/>";
while ($row = mysql_fetch_assoc($asig)) {
echo "<form enctype='multipart/form-data' action='mAsignaturas.php?asig_cod=$row[asig_cod]' method='post'>";
echo "Nombre:<br/><input type='text' name='nombre_asig' value='$row[nombre_asig]'><br/><br/>";
echo "Horas:<br/><input type='number' name='horas' value='$row[horas]'><br/><br/>";
echo "<input type='submit' value='Guardar'/><br/>";
echo "</form>";
};
mysql_close($dp);
?>
<a href="hasiera.html">Inicio</a>
</body>
</html>