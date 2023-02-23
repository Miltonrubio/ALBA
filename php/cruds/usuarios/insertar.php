<?php
include("../../conexion.php");
$con=conectar();



$ID_usuario=$_POST['ID_usuario'];
$Nombre=$_POST['nombre'];
$Apellidos=$_POST['apellidos'];
$Cargo=$_POST['cargo'];
$celular=$_POST['celular'];
$Correo=$_POST['correo'];

$Clave=$_POST['clave'];



$nombreConvert = strtr($Nombre, " ", "_");
$apellidoConvert = strtr($Apellidos, " ", "_");


$res = substr("$Apellidos", -1); 
$res1 = substr("$Apellidos",0, 2); 
$usuario = "$nombreConvert"."$res1"."$res";



$sql="INSERT INTO usuarios (nombre, apellidos, cargo, celular, correo, clave, qr, usuario) VALUES('$Nombre', '$Apellidos', '$Cargo', '$celular','$Correo','$Clave','qr','$usuario');";
$query= mysqli_query($con,$sql);

if($query){
    echo '<script>  window.location.replace("../../admin.php");  </script>'; 

}else{
    echo '<script>alert("No se pudo ingresar")</script>';
    echo '<script>  window.location.replace("../../admin.php");  </script>'; 
}
?>