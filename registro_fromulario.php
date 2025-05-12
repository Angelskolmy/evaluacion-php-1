<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>  
<?php 
if(isset($_GET['condicionalerror'])&& $_GET['condicionalerror']==1){ 

    echo"<h3>Error en la contrseña redigite</h3>";
} 
?> 

<?php 
    if(isset($_GET['correoerror'])&& $_GET['correoerror']==1){ 

        echo"<h3>ya existe una cuenta con este correo registrar uno diferente</h3>";

    }
?>

<body>
    <form action="registro.php" method="post">

        <label for="">nombre usuario</label><br>
        <input type="text" name="usuario">  
        <br><br> 
        
        <label for="">correo electronico</label><br>
        <input type="text" name="email">  
        <br><br> 

        <label for="">contraseña</label><br>
        <input type="text" name="pasw"> 
        <br><br>  

        <label for="">confirmar contraseña</label><br>
        <input type="text" name="confirmpasw"> 
        <br><br> 

        <input type="submit" value="ingresar">


    </form>   
    <br><br>
    <button><a href="formulario_login.php">sing up</a></button>
    

</body>
</html>