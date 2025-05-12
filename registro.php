<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regitro de usuarios</title>
</head>
<body>
    
<?php    

    $conexion=mysqli_connect("localhost","root","","evaluacion") or die("error de conexion");  

    $busqueda_correo=mysqli_query($conexion,"select correo from usuarios WHERE correo='$_REQUEST[email]'")or 
    die("error en la consutla".mysqli_error($conexion));



    if($_REQUEST['pasw']!= $_REQUEST['confirmpasw']){ 
 
            
        header("Location: registro_fromulario.php?condicionalerror=1"); 
        exit;

    }  

    if(mysqli_fetch_array($busqueda_correo)>0){

        header("Location: registro_fromulario.php?correoerror=1"); 
        exit;
    } 



    else{ 

        $conn = new mysqli('localhost', 'root', '', 'evaluacion');   


        if ($_SERVER["REQUEST_METHOD"] == "POST") { 

            $nombre = $_POST['usuario']; 
            $correo = $_POST['email']; 
            $contrasena = $_POST['confirmpasw'];  

        

            // Hashear la contraseña
            $hash = password_hash($contrasena, PASSWORD_DEFAULT); 
            $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, 
            contrasena) VALUES (?, ?, ?)"); 
            $stmt->bind_param("sss", $nombre, $correo, $hash); 

            if ($stmt->execute()) { 

                header("Location: formulario_login.php?infrome_exito=true");
                exit;

                
            } 
            else { 

                echo "Error: " . $stmt->error; 
                
            } 

            $stmt->close();  
        }

    }
 
    mysqli_close($conexion); 
?> 


</body>
</html>