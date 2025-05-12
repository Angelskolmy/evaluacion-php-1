<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularion de edicion</title>
</head> 
<?php 
if(isset($_GET['mensaje_update'])&& $_GET['mensaje_update']){

    echo"no existe esta tarea no se puede editar";
}
?>

<body>
    <form action="formulario_entradada_edicion.php" method="post"> 

    <label for="">id de tarea a editar</label><br>
    <input type="number" name="id_old_tarea"> 
    <br><br> 

    <input type="submit" value="busqueda" name="invoque_update1">
    
    </form> <br><br>

    <button><a href="listar_paneltareas.php">CANCELAR</a></button>
</body>
</html>