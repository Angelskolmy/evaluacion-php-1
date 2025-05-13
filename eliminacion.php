<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminacion</title>
</head> 
<?php 
    session_start();
    function eliminar(){ 

        $dato_busq_delete=$_GET['id']; 

        $interlase=mysqli_connect("localhost","root","","evaluacion")or die("falla de conexion"); 

        $validacion=mysqli_query($interlase,"select id, usuario_id, titulo, descripcion, fecha_creacion, completada from tareas WHERE id='$dato_busq_delete'")or die("error de la consulta".mysqli_errno($interlase)); 

        if($lista_exterminio=mysqli_fetch_array($validacion)){ 

            $exterminatus=mysqli_query($interlase,"delete from tareas WHERE id='$lista_exterminio[id]'")or die("error en la consulta".mysqli_error($interlase)); 

            header("Location: listar_paneltareas.php?raw=true");

        } 
        else{ 

            header("Location: formulario_eliminacion.php?del=true");

        }
    }
    if(isset($_REQUEST['id'])){ 

        eliminar();
    }
?>
<body>
    
</body>
</html>