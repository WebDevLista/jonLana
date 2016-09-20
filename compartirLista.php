<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/nagusia.css" />
        <title>Compartir listas</title>
    </head>
    <body class="bodycss">
        
        Compartir Lista <br/><br/>
        
        <form enctype='multipart/form-data' action='cLista.php?nombreLista=nomLista&nombreUsuario=nombreUsuario' method='post'>
    
        <input type='number' name='idLista' placeholder='ID de la lista'><br/><br/>
        <input type='text' name='nombreUsuario' placeholder='Nombre del usuario'><br/><br/>
        
        <input type='submit' value='Compartir'/><br/>
        </form>

        <a href="hasiera.html"><img width="50" height="50" src="img/flecha-back.png"></a>
    </body>
</html>



