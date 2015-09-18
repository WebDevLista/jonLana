<?php
$user = $_POST['usuario'];
$pass = $_POST['pass'];

$dp = mysql_connect("localhost", "root", "zubiri" );
mysql_select_db("todoList", $dp);

$sql = "SELECT * FROM usuarios" ;
$resultado = mysql_query($sql);
while ($row = mysql_fetch_assoc($resultado)) {
 if ($row[nombre] == $user) {
   $pasa = $row[pass];
   //$tipo = $row[erab_mota];
 };
};

if (isset($pasa)) {
 if ($pass == $pasa) {
  session_start();
  $_SESSION["usuario"]=$user;
  //session_start();
  //$_SESSION["tipo"]=$tipo;
  header("location:nagusia.html");
 } else {
  header("location:index.html");
 };
} else {
 header("location:index.html");
};

mysql_close($dp);
?>

