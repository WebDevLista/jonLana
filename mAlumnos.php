<?php
//session_start();
$alu = $_POST['nombre'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$aldatu="UPDATE alumnos SET nombre='$alu' WHERE alu_cod='$_GET[alu_cod]'";
mysql_query($aldatu);
mysql_close($dp);
header("location:nagusia.html");

?>