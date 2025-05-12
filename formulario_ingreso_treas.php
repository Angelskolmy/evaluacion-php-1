<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso de tareas</title>
</head>
<body>
    <form action="ingreso_tareas.php" method="post">

    <label for="">titulo tarea</label><br>
    <input type="text" name="name_tarea">
    <br><br> 

    <label for="">descripcion</label><br>
    <textarea name="texto_descript"></textarea> 
    <br><br> 

    <input type="submit" value="enviar" name="confirmar">

    </form>
</body>
</html>