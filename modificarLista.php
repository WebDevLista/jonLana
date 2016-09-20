<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/nagusia.css" />
        <title>Modificar listas</title>
    </head>
    <body class="bodycss">
        <?php
        
            $dp = mysql_connect("localhost", "sergy444");
            mysql_select_db("c9", $dp);
            $sql = "SELECT * FROM listas WHERE numLista='$_GET[numLista]'";
           
            $lista = mysql_query($sql);
            echo "EDITE LOS DATOS DE LA LISTA: <br/><br/>";
            
            while ($row = mysql_fetch_assoc($lista)) {
                $tareas = mysql_query("SELECT descripcion FROM tareas WHERE id_lista = '$_GET[numLista]'");
                
                echo "<form enctype='multipart/form-data' action='mLista.php?numLista=$row[numLista]' method='post'>";
                echo "Nombre de la lista:<br/><input type='text' name='nombre' value='$row[nombre]'><br/><br/>";
                while ($row2 = mysql_fetch_array($tareas)) {
                    $i++;
                    echo "Tarea $i:<br/><input type='text' rows='3' cols='25' name='tarea$i' value='$row2[descripcion]'/><br/><br/>";
                }
                echo "<input type='submit' value='Guardar'/><br/>";
                echo "</form>";
            };
            
            mysql_close($dp);
        ?>
        <a href="hasiera.html"><img width="50" height="50" src="img/flecha-back.png"></a>
    </body>
</html>