<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edicion primera validacion</title>
</head> 
<?php 
session_start();
function validar_sql (){ 

    $dato_busqueda=$_REQUEST['id_old_tarea']; 

    $enlace_1=mysqli_connect("localhost","root","","evaluacion") or die("error en la conexion"); 

    $comando_sql1=mysqli_query($enlace_1,"select id, titulo, descripcion, fecha_creacion, completada from tareas WHERE id='$dato_busqueda'")or die("error en la busqueda".mysqli_error($enlace_1)); 

    if($lista_update=mysqli_fetch_array($comando_sql1)){ 
        
    
?> 
<form action="edicion.php" method="post"> 

    <label for="">nuevo nombre de la tarea<label><br>
    <input type="text" name="new_nombre" placeholder="<?php echo"$lista_update[titulo]"; ?>"> 
    <br><br> 
    
    <label for="">nueva descripcion</label><br>
    <textarea name="new_descripcion" placeholder="<?php echo"$lista_update[descripcion]"; ?>"></textarea> 
    <br><br> 
    
    <label for="">cambiar estado</label><br>
    <input type="checkbox" name="new_estado">
    <br><br>  

    <input type="hidden" name="old_estado" value="<?php echo"$lista_update[completada]"; ?>">  

    <input type="hidden" name="id_workshit" value="<?php echo"$lista_update[id]"; ?>">

    <input type="submit" value="UPDATE" name="bot1">

</form>
<?php 
    } 
    else{ 
        header("Location: formulario_edicion_validacion.php?mensaje_update=true");
    } 
    mysqli_close($enlace_1);
    } 
    if(isset($_REQUEST['invoque_update1'])){ 

        validar_sql ();

    }
?>
<body>
    
</body>
</html>