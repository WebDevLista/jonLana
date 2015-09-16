<?php
$nombre = $_POST['nombre'];
$texto = $_POST['texto'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("todoList", $dp);
$sartu="INSERT INTO listas (nombre,texto) VALUES ('$nombre','$texto')";
mysql_query($sartu);
mysql_close($dp);
header("location:hasiera.html");

?>