<?php

//control de sesion
$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);

$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM listas WHERE numLista='$_GET[numLista]'";
$ezabatu2 = "DELETE FROM tareas WHERE id_lista='$_GET[numLista]'";
$ezabatu3 = "DELETE FROM usuarioLista WHERE numLista='$_GET[numLista]'";

mysql_query($fk0);
mysql_query($ezabatu);
mysql_query($ezabatu2);
mysql_query($ezabatu3);
mysql_query($fk1);
mysql_close($dp);
header("location:verListas.php");
?>