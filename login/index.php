


<?php

error_reporting(0);

session_start();

$Datos=$_SESSION['usuario'];


if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['cargo']=="CEO"){
    echo '<script>  window.location.replace("../php/admin.php");  </script>'; 
    }
    
    else if($_SESSION['usuario']['cargo']=="Becario"){
        echo '<script>  window.location.replace("../php/galeria.php");  </script>'; 
        } 
    
    }
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginstyle.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    
    <link rel="shortcut icon" href="../img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">
    <script src="../js/mainLogin.js"></script>
    <title>Alba-login</title>
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="../img/ALBA_WEB_ELEMENTS-01.png" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Inicia Sesión</h1>
                <div>recuerda colocar los datos correctos</div>
            </div>
            <form class="login-card-form" action="" id="formLg">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="text" placeholder="Correo" id="emailForm"  name="correo" autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded"></span>
                    <input type="password" placeholder="Contraseña" id="passwordForm"  name="clave"  required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Recordame</label>
                    </div>
                    <a href="#">Olvide mi contraseña</a>
                </div>

                <button type="submit" value="Iniciar Sesión">Iniciar Sesión</button>
            </form>
            <div class="login-card-footer">
                ¿No tienes una cuenta? <a href="#">Contactate con el soporte</a>
            </div>
        </div>


    

        
</body>

</html>
