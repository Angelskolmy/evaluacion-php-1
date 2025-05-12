<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso de nuevas tareas</title>
</head> 
<?php

session_start(); 

function ingreso_new_tareas(){  

    //datos del fromulario; 
    $identificador_usuario=$_SESSION['usuario_id']; 
    $nombre_tarea=$_REQUEST['name_tarea']; 
    $texto_descripcion=$_REQUEST['texto_descript']; 


    $link_database=mysqli_connect("localhost","root","","evaluacion")or die("error en la conexion");  

    $comando_ingreso=mysqli_query($link_database,"insert into tareas (usuario_id,titulo,descripcion) values 
    ('$identificador_usuario', '$nombre_tarea','$texto_descripcion')") or 
    die("fallo de la consulta".mysqli_error($link_database)); 

    if($comando_ingreso){ 

        header("Location: listar_paneltareas.php?mensaje_ing=true");
    }

    mysqli_close($link_database);
} 
if(isset($_REQUEST['confirmar'])){ 

    ingreso_new_tareas();
}

?>
<body>
    
</body>
</html>