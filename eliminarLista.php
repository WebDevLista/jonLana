<?php
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("todoList", $dp);
$ezabatu = "DELETE FROM listas WHERE numLista='$_GET[numLista]'";
mysql_query($ezabatu);
mysql_close($dp);
header("location:hasiera.html");
?>