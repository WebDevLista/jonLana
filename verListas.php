<html>
<head>
<title>Alumnos</title>
</head>
<body>
<?php
$zenbat = 0;

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("todoList", $dp);

$sql2 = "SELECT * FROM listas" ;
$asig2 = mysql_query($sql2);
while ($row2 = mysql_fetch_assoc($asig2)) {
 $zenbat = $zenbat+1;
};
echo "Listas: (En total: $zenbat listas)<hr/>";


$sql = "SELECT * FROM listas" ;
$asig = mysql_query($sql);

echo "<table>";
while ($row = mysql_fetch_assoc($asig)) {
 echo "<tr><td>$row[numLista]</td><td>$row[nombre]</td><td>$row[texto]</td><td>";
 echo "<a href='eliminarLista.php?numLista=$row[numLista]'>Eliminar</a> <a href='modificarLista.php?numLista=$row[numLista]'>Editar</a></td></tr>";
};
echo "</table>";


echo "FIN DE LAS LISTAS<hr/>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<a href="nuevaLista.php" target="_self">Nueva Lista</a><br/>
<a href="nagusia.html">Inicio</a>
</body>
</html>