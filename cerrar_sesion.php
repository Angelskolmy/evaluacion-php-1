<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cerrar sesion</title>
</head>
<?php 

    $ultimaaaaa=$_REQUEST['termina']; 

    if(isset($ultimaaaaa)){ 

        session_destroy(); 

        header("Location: formulario_login.php?archer=true");

    }

?>
<body>
</body>
</html>