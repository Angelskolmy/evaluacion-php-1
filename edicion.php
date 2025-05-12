<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edicion.php</title>
</head> 
<?php 

function update (){ 

    $nuevo_nombre=$_REQUEST['new_nombre']; 
    $nueva_descripcion=$_REQUEST['new_descripcion']; 
    $nuevo_estado=$_REQUEST['new_estado']; 
    $viejo_estado=$_REQUEST['old_estado'];  
    $id_tareaxd=$_REQUEST['id_workshit'];

    if(isset($nuevo_estado)){ 

        if($viejo_estado==0){ 

            $viejo_estado=1;
        } 
        elseif($viejo_estado==1){

            $viejo_estado=0;

        } 

        $linkeo_mysicual=mysqli_connect("localhost","root","","evaluacion")or die("error de conecion"); 

        $proceso_final_upt= mysqli_query($linkeo_mysicual,"update tareas set titulo='$nuevo_nombre', descripcion='$nueva_descripcion', completada='$viejo_estado' WHERE id='$id_tareaxd'")or 
        die("error mysql".mysqli_error($linkeo_mysicual)); 

        if ($proceso_final_upt){ 

            header("Location: listar_paneltareas.php?eee=true");
        } 

        mysqli_close($linkeo_mysicual);
        
    }  
    else{

        $linkeo_mysicual2=mysqli_connect("localhost","root","","evaluacion")or die("error de conecion"); 

        $proceso_final_upt2= mysqli_query($linkeo_mysicual2,"update tareas set titulo='$nuevo_nombre', descripcion='$nueva_descripcion' WHERE id='$id_tareaxd'")or 
        die("error mysql".mysqli_error($linkeo_mysicual2)); 

        if ($proceso_final_upt2){ 

            header("Location: listar_paneltareas.php?eee=true");
        } 

        mysqli_close($linkeo_mysicual2);

    }
} 

if(isset($_REQUEST['bot1'])){ 

    update ();

}

?>
<body>
    
</body>
</html>