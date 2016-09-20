<?php
$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);



$archivar = "INSERT INTO archivadas VALUES('$_GET[numLista]', '$_GET[nombre]')";
$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM listas WHERE numLista='$_GET[numLista]'";

mysql_query($fk0);
mysql_query($archivar);
mysql_query($ezabatu);
mysql_query($fk1);
mysql_close($dp);
header("location:verListas.php");
?>