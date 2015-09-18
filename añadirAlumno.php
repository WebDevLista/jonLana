<?php

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("ikastola", $dp);


$sql = "INSERT INTO alumnos (`alu_cod`, `nombre`) VALUES (NULL, '".$_POST['nAlumno']."')";
mysql_query($sql);
mysql_close($dp);

header("location:hasiera.html");
?>

