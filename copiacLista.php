<?php
/*************************************
Esto deberia hacer que solo se pudieran
compartir las listas en las que tienes
permisos (no funciona), de momento usar
cLista.php
*************************************/
session_start();
$usuariosesion = $_SESSION['usuariosesion'];
$nombreUsuario = $_POST['nombreUsuario'];
$idLista = $_POST['idLista'];
$dp = mysql_connect("localhost", "sergy444");
mysql_select_db("c9", $dp);

//COGE EL ID DEL USUARIO AL QUE QUIERE COMPARTIRLE LA LISTA------------------------------
$result = mysql_query("SELECT num FROM usuarios WHERE nombre = '$nombreUsuario'");
if(!$result) {
    die("Database query failed: " . mysql_error());
}
while ($row = mysql_fetch_array($result)) {
    $idUsuario = $row['num'];
}


//COGE EL ID DE LOS USUARIOS CON PERMISOS DE ESA LISTA Y LOS METE EN UN ARRAY------------
$result2= mysql_query("SELECT num FROM usuarioLista WHERE numLista = '$idLista'");
$usuariosPermisos = array();

while ($row_user = mysql_fetch_assoc($result2)){
    $usuariosPermisos[] = $row_user;

}
//COGE EL ID DEL USUARIO QUE COMPARTE LA LISTA-------------------------------------------
$result3 = mysql_query("SELECT num FROM usuarios WHERE nombre = '$usuariosesion'");
if(!$result3) {
    die("Database query failed: " . mysql_error());
}
while ($row = mysql_fetch_array($result3)) {
    $idSesion = $row['num'];
}

//COMPARTE LA LISTA SI EL ID DEL USUARIO COINCIDE CON ALGUNO DE LOS USUARIOS CON PERMISOS
for($e = 0; $e < count($usuariosPermisos);$e++){
    if($idSesion == $usuariosPermisos[$e]){
        $compartir = "INSERT INTO usuarioLista VALUES ('$idUsuario', '$idLista')";
        mysql_query($compartir);
    }
}

 
mysql_close($dp);
header("location:hasiera.html");
?>