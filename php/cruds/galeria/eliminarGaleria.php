<?php

include("../conexion.php");
$con=conectar();

$ID_galeria=$_GET['id'];

$sql="DELETE FROM galeria WHERE ID_galeria=$ID_galeria";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>  window.location.replace("../galeria.php");  </script>';
    }
?>
