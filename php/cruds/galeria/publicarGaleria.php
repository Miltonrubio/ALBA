<?php



include("../conexion.php");
$con=conectar();

$ID_galeria=$_GET['id'];

$sql="UPDATE galeria SET mostrar='Si' WHERE ID_galeria=$ID_galeria";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>  window.location.replace("../galeria.php");  </script>';
    }
?>
