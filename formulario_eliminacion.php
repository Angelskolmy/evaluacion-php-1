<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario eliminacion</title>
</head> 
<?php 

    if(isset($_GET['del'])&& $_GET['del']==true){  

        echo"tarea ingresada inexistente";

    }

?>
<body>
    <form action="eliminacion.php" method="post">

        <label for="">id de tarea a eliminar</label><br>
        <input type="number" name="aaaaa">  
        <br><br>
 
        <input type="submit" value="borrar" name="ultimobt">

    </form><br><br> 

    <button><a href="listar_paneltareas.php">CANCELAR</a></button>
</body>
</html>