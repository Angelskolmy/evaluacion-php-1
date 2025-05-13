<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro_login</title>
</head> 

<?php 
    if(isset($_GET['infrome_exito']) && $_GET['infrome_exito']==true){ 

        echo"<h1>registro exitoso inicie sesion </h1>";}
?>  

<?php 
    if(isset($_GET['errorDecont']) && $_GET['errorDecont']==true){ 

        echo"contraseña equivocada";}
?>  

<?php 
    if(isset($_GET['errorDeuser']) && $_GET['errorDeuser']==true){ 

        echo"usuario inexistente";}
?>  
<?php 
    if(isset($_GET['archer']) && $_GET['archer']==true){ 

        echo"cerro sesion";}
?>  
<?php 
    if(isset($_GET['archer']) && $_GET['archer']==true){ 

        echo"cerro sesion";}
?> 

<body>
    <form action="login.php" method="post">

        <label for="">correo electronico</label><br>
        <input type="email" name="electronicMail">
        <br><br> 

        <label for="">contraseña</label><br>
        <input type="text" name="encripted">
        <br><br> 
        
        <input type="submit" value="inicio sesion">


    </form>
</body>
</html>