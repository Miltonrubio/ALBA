


<!DOCTYPE html>
<html lang="en">

<head>
   
   <!-- Tags meta requeridos -->
        <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <script src="jquery-3.5.1.min.js"></script>
   <!-- Links css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <link rel="stylesheet" href="estilologin.css">

    <script src="mainLogin.js"></script>
    <!-- Links js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
   
   
   <!-- Icono-->
   <link rel="shortcut icon" href="img/HOME/HOME_ELEMENTS-04.png" />
 
    <!-- Titulo pestaña -->
       <title>Login</title>
</head>

<body>
    <!-- Inicio sección -->
    <section>

        
        <!-- Imagen fondo -->
        <img class="wave" src="wave.png">
         <!-- Contenedor inicio de sesión -->
       <div class="container">
            <div class="img">
                <img src="bg.png">
            </div>
           <!-- Campos correo y contraseña -->
           <div class="login-content">
                <form action="" id="formLg">
                    <img src="img/HOME/HOME_ELEMENTS-08.png">
                    <h2 class="title">Bienvenido</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="usuario" 
                            required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="clave"
                            required="required">
                    </div>
                    
                    <BR>
                    <a href="recupcontra.php">Recuperar Contraseña</a>
               
                    <!-- Botón iniciar sesión -->
                  
                    <input type="submit" class="btn btn-primary botonlg bton"  value="Iniciar Sesión">
                </form>
            </div>
        </div>


    </section>
    
   

</body>

</html>

<?php
session_start();

$Datos=$_SESSION['usuario'];



if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['Rol']=="Admin"){
    echo '<script>  window.location.replace("admin.php");  </script>'; 
    }
    
    else if($_SESSION['usuario']['Rol']=="Editor"){
        echo '<script>  window.location.replace("crudBlog.php");  </script>'; 
        } 
    
    }
    
?>
