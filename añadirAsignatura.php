<?php

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);


$sql = "INSERT INTO asignaturas (`asig_cod`, `nombre_asig`, `horas`) VALUES (NULL, '".$_POST['nAsignatura']."','".$_POST['nHoras']."')";
mysql_query($sql);
mysql_close($dp);

header("location:hasiera.html");
?>

