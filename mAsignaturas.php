
<?php
//session_start();
$asig = $_POST['nombre_asig'];
$horas = $_POST['horas'];
$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);
$aldatu="UPDATE asignaturas SET nombre_asig='$asig', horas='$horas' WHERE asig_cod='$_GET[asig_cod]'";
mysql_query($aldatu);
mysql_close($dp);
header("location:hasiera.html");
?>