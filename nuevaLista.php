<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/nagusia.css" />
    <title>Insertar lista</title>
</head>
<body class="bodycss">
    <script>
    var cont = 0;
        function nuevaTarea(){
            cont++;
            if(cont<=6){
                document.getElementById("tareas").innerHTML += "<input type='text' rows='3' cols='25' name='tarea" +cont+"' placeholder='Tarea " +cont+"'/><br><br>";
            } else{
                alert("Has llegado al limite de tareas");
            } 
            document.getElementById("contador").innerHTML = parseInt(cont);
                
            }
    </script>
INSERTE LA LISTA: <br/><br/>
<form enctype='multipart/form-data' action='nLista.php' method='post'>
<input type='text' name='nombre' value=''  placeholder="Nombre de la lista">
<input type="button" name="boton" value="Añadir tarea" onclick="nuevaTarea()"/><br/><br/></br>
<div id="tareas">
</div>
<p hidden name="cont" id="contador"></p>

<input type='submit' value='Crear Lista'/><br/>
</form>

<a href="hasiera.html"><img width="50" height="50" src="img/flecha-back.png"></a>
</body>
</html>