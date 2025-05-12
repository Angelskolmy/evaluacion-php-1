<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php 
    
    session_start(); 
    $conn = new mysqli('localhost', 'root', '', 'evaluacion'); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        $correo = $_POST['electronicMail']; 
        $contrasena = $_POST['encripted']; 

        $stmt = $conn->prepare("SELECT id, nombre, contrasena FROM usuarios 
        WHERE correo = ?"); 
        $stmt->bind_param("s", $correo); 
        $stmt->execute(); 
        $result = $stmt->get_result(); 

      if ($result && $row = $result->fetch_assoc()) { 
        if (password_verify($contrasena, $row['contrasena'])) { 
            // Contraseña válida 
            $_SESSION['usuario_id'] = $row['id']; 
            $_SESSION['nombre'] = $row['nombre']; 
            // Redirigir a la página de tareas 
            header("Location: listar_paneltareas.php?mensaje_panelt=true");
            ///------------------------- 
        } 
        else { 
            header("Location: formulario_login.php?errorDecont=true"); 
        //condicional de error redirigir a form login
        } 
     } 

     else { 
        header("Location: formulario_login.php?errorDeuser=true");
     //condicional de error redirigir a form login
      }  
    $stmt->close(); 
    } 
        
    ?>
</body>
</html>