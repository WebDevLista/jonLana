<html>
<head>
<title>Listas</title>
</head>
<body>
<?php
session_start();
$usuariosesion = $_SESSION['usuariosesion'];
 
 
//variable de la id_Lista del usuario 
$id_Lista_Usuario = "";

 
$con = 0;
$cont = 0;

$dp = mysql_connect("localhost", "sergy444");

mysql_select_db("c9", $dp);

/*( SELECT numLista FROM usuarioLista where num = ( SELECT num FROM usuarios WHERE nombre = '$usuariosesion'))";*/

//Muestra el número de listas mediante un bucle que las recorre todas
$sql2 = "SELECT * FROM listas where numLista in (SELECT numLista FROM usuarioLista where num in ( SELECT num FROM usuarios WHERE nombre = '$usuariosesion'))";
$listas = mysql_query($sql2);
while ($row = mysql_fetch_assoc($listas)) {
 $con = $con+1;
};
echo "Listas: (En total: $con listas)<hr/>";


//hace los select de las listas y los guarda en variables
$listas = mysql_query($sql2);

//Muestra en una tabla los select guardados en las variables mediante un bucle
//echo "<tr><th>ID</th><th>Nombre</th><th>Texto</th><th>Tarea 1</th><th>Tarea 2</th><th>Tarea 3</th><th>Opciones</th></tr>";

while ($row = mysql_fetch_assoc($listas)) {
 $id_Lista_Usuario = $row['numLista'];
 $sql4 = "SELECT id_tarea, descripcion from tareas where id_lista = $id_Lista_Usuario";
 echo "<table id='tablaListas' class='tablaListas'>";
 echo "<tr><th><h3>$row[numLista]</h3></td><td><h2>$row[nombre]</h2></td><td><a href='eliminarLista.php?numLista=$row[numLista]'><img width='30' height='30' src='img/eliminar2.png'></a> <a href='modificarLista.php?numLista=$row[numLista]'><img width='30' height='30' src='img/editar2.png'></a>
 <a href='archivarLista.php?numLista=$row[numLista]&nombre=$row[nombre]'><img width='30' height='30' src='img/archivar.ico'></a></th></tr>";
 
  $tarea = mysql_query($sql4);
  while ($row7 = mysql_fetch_assoc($tarea)) {
     echo "<tr><td><a href='eliminarTarea.php?id_tarea=$row7[id_tarea]'><img width='15' height='15' src='img/eliminar2.png'></a></td><td colspan='2'>-$row7[descripcion]</td></tr>";
  }
  echo "</table><br/>";
 
};



echo "FIN DE LAS LISTAS<hr/>";

//echo "<h2>MENÚ DE OPCIONES:</h2>";
//echo "<a href='mezu_berria.php'>Insertar mensaje (Solo usuarios y administradores)</a><hr/>";



mysql_close($dp);
?>
<a href="nuevaLista.php" target="_self">Nueva Lista</a><br/>
<a href="nagusia.html">Inicio</a>
</body>
</html>