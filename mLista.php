
<?php
//session_start();
$nombre = $_POST['nombre'];
$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);
$resultareas = mysql_query("SELECT id_tarea FROM tareas WHERE id_lista = '$_GET[numLista]'");
$aldatu="UPDATE listas SET nombre='$nombre' WHERE numLista='$_GET[numLista]'";
mysql_query($aldatu);
while ($row = mysql_fetch_array($resultareas)) {
    $i++;
    $desc = $_POST['tarea'.$i];
    $aldatu2="UPDATE tareas SET descripcion='$desc' WHERE id_tarea='$row[id_tarea]'";
    mysql_query($aldatu2);
}
mysql_close($dp);
header("location:verListas.php");
?>