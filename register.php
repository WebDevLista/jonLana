<?php
$user = $_POST['user'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
 
$conexion =mysql_connect("localhost","sergy444") or die ("Problemas al conectar el servidor");
mysql_select_db("c9", $conexion) or die ("Error al seleccionar la base de datos");

if($password == $password2){ 
 mysql_query("INSERT INTO usuarios(nombre, pass) VALUES('$user', '$password')");
 mysql_close($conexion);
 header("location:nagusia.html");
}
else{
  echo 'Las contraseñas no coinciden';
}
?>