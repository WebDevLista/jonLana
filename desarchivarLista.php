<?php
$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);



$desarchivar = "INSERT INTO listas VALUES('$_GET[num]', '$_GET[numLista]')";
$fk0 = "SET foreign_key_checks = 0";
$fk1 = "SET foreign_key_checks = 1";
$ezabatu = "DELETE FROM archivadas WHERE num='$_GET[num]'";

mysql_query($fk0);
mysql_query($desarchivar);
mysql_query($ezabatu);
mysql_query($fk1);
mysql_close($dp);
header("location:listasArchivadas.php");
?>