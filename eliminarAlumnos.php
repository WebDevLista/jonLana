<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$ezabatu = "DELETE FROM alumnos WHERE alu_cod='$_GET[alu_cod]'";
mysql_query($ezabatu);
mysql_close($dp);
header("location:nagusia.html");
?>