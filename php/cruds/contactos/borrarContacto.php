<?php



include("../../conexion.php");
$con=conectar();

$ID_contacto=$_GET['id'];

$sql="DELETE FROM contacto WHERE ID_contacto='$ID_contacto'";
$query=mysqli_query($con,$sql);

echo '<script>  window.location.replace("../../mensajes.php");  </script>';

?>
