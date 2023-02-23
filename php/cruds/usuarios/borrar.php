<?php

include("../../conexion.php");
$con=conectar();

$ID_usuario=$_GET['id'];

$sql="DELETE FROM usuarios WHERE ID_usuario='$ID_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>  window.location.replace("../../admin.php");  </script>'; 

    }else{
        echo '<script>alert("No se pudo ingresar")</script>';
        echo '<script>  window.location.replace("../../admin.php");  </script>'; 
    }
?>
