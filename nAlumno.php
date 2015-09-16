<?php
$nombre = $_POST['nombre'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$sartu="INSERT INTO alumnos (nombre) VALUES ('$nombre')";
mysql_query($sartu);
mysql_close($dp);
header("location:nagusia.html");

?>