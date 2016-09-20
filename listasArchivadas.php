<!DOCTYPE html>
<html>
<head>
<title>Mis Listas</title>
<link rel="stylesheet" type="text/css" href="css/nagusia.css" />

</head>
<body class="bodycss">
<?php
session_start();
$usuariosesion = $_SESSION['usuariosesion'];
 
$con = 0;
$cont = 0;

$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);

/*( SELECT numLista FROM usuarioLista where num = ( SELECT num FROM usuarios WHERE nombre = '$usuariosesion'))";*/


//Muestra el número de listas mediante un bucle que las recorre todas
$sql = "SELECT * FROM archivadas WHERE num in (SELECT numLista FROM usuarioLista where num in ( SELECT num FROM usuarios WHERE nombre = '$usuariosesion'))";
/*
$archivadas = mysql_query($sql);
while ($row = mysql_fetch_assoc($archivadas)) {
 $con = $con+1;
};
echo "Listas archivadas: (En total: $con listas)<hr/>";
*/
//hace los select de las listas y los guarda en variables
$archivadas = mysql_query($sql);
while ($row = mysql_fetch_assoc($archivadas)) {
   echo "<table id='tablaArchivadas' class='tablaListas'";
   echo "<tr><th><h3>$row[num]</h3></td><td><h2>$row[numLista]</h2></td><td><a href='eliminarArchivadas.php?num=$row[num]'><img width='30' height='30' src='img/eliminar2.png'></a>
   <a href='desarchivarLista.php?num=$row[num]&numLista=$row[numLista]'><img width='30' height='30' src='img/desarchivar.png'></a></th></tr>";
}
 echo "</table><br/>";

echo "FIN DE LAS LISTAS ARCHIVADAS<hr/>";

mysql_close($dp);
?>

<a href="hasiera.html"><img width="40" height="40" src="img/flecha-back.png"></a>
</body>
</html>