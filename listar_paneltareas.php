<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel de tareas y llistar</title> 
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 3px;
            text-align: center; 
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>  
<?php 
    if(isset($_GET['mensaje_panelt']) && $_GET['mensaje_panelt']==TRUE){ 
        echo"<h3>sesion iniciada con exito</h3>";
    }
?> 
<?php
    if(isset($_GET['mensaje_ing'])&& $_GET['mensaje_ing']==true){ 
        echo"nueva tarea creada con exito";
    }
?>  
<?php 

    if(isset($_GET['eee'])&& $_GET['eee']==true){  

        echo"tarea editada con exito";

    }

?> 
<?php 

    if(isset($_GET['raw'])&& $_GET['raw']==true){  

        echo"tarea eliminada con exito";

    }

?>
<?php  

    $conectar_database= mysqli_connect("localhost","root","","evaluacion") or die("error en la conexion"); 

    $ejecucion= mysqli_query($conectar_database,"select id, usuario_id, titulo, descripcion, fecha_creacion, completada from tareas ") or 
    die("error en la consulta".mysqli_errno($conectar_database));

    echo"<table> 
        <th>numero tarea</th>
        <th>numero usuario</th>
        <th>nombre tarea</th>
        <th>descripcion</th>
        <th>fecha inicio</th>
        <th>estado</th>
        <th>edicion</th>
        <th>eliminar</th>";

    while($lista_list=mysqli_fetch_array($ejecucion)){ 
        switch($lista_list['completada']){ 

            case 0: 
                $lista_list['completada']="activa"; 
                break; 

            case 1: 
                $lista_list['completada']="terminada"; 
                break; 
        }
?> 
         
            <tr>
                <td ><?php echo"$lista_list[id]"?></td> 
                <td><?php echo"$lista_list[usuario_id]"?></td> 
                <td><?php echo"$lista_list[titulo]"?></td> 
                <td><?php echo"$lista_list[descripcion]"?></td>
                <td><?php echo"$lista_list[fecha_creacion]"?></td> 
                <td><?php echo"$lista_list[completada]"?></td> 
                <td><button><a href="formulario_edicion_validacion.php">editar</a></button></td> 
                <td><button><a href="formulario_eliminacion.php">eliminar</a></button></td>
            </tr>
        
<?php 
} 
echo"<table>";
mysqli_close($conectar_database); 
?>

<body>
    <header> 
        <button><a href="formulario_ingreso_treas.php">nueva tarea</a></button>  
        <form action="cerrar_sesion.php" method="post"> 

            <br><input type="submit" value="cerrar sesion" name="termina">

        </form>
    </header>
</body>
</html>