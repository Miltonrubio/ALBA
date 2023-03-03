<?php
include("../../conexion.php");
$con=conectar();



$ID_usuario=$_POST['ID_usuario'];
$Nombre=$_POST['nombre'];
$Apellidos=$_POST['apellidos'];
$Cargo=$_POST['cargo'];
$celular=$_POST['celular'];
$Correo=$_POST['correo'];
$foto=$_POST['foto'];
$Clave=$_POST['clave'];



$nombreConvert = strtr($Nombre, " ", "_");
$apellidoConvert = strtr($Apellidos, " ", "_");


$res = substr("$Apellidos", -1); 
$res1 = substr("$Apellidos",0, 2); 
$usuario = "$nombreConvert"."$res1"."$res";



$imagen = $_FILES['foto']['name'];
$tipo = $_FILES['foto']['type'];
$temp  = $_FILES['foto']['tmp_name'];





$sql="INSERT INTO usuarios (nombre, apellidos, cargo, celular, correo, clave, qr, usuario, foto) VALUES('$Nombre', '$Apellidos', '$Cargo', '$celular','$Correo','$Clave','qr','$usuario','$imagen');";
$query= mysqli_query($con,$sql);

if($query){
    
    
    move_uploaded_file($temp,"C:/xampp/htdocs/Alba/img/usuarios/$imagen");
    
    echo '<script>  window.location.replace("../../admin.php");  </script>'; 

}else{
    echo '<script>alert("No se pudo ingresar")</script>';
    echo '<script>  window.location.replace("../../admin.php");  </script>'; 
}
?>