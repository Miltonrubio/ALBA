<?php

include("../../conexion.php");
$con=conectar();
	
$ID_usuario=$_POST['ID_usuario1'];
$Nombre=$_POST['nombre1'];
$Apellidos=$_POST['apellidos1'];
$Cargo=$_POST['cargo1'];
$celular=$_POST['celular1'];
$Clave=$_POST['clave1'];
$correo=$_POST['correo1'];

$foto=$_POST['imagen1'];



$nombreConvert = strtr($Nombre, " ", "_");
$apellidoConvert = strtr($Apellidos, " ", "_");


$res = substr("$Apellidos", -1); 
$res1 = substr("$Apellidos",0, 2); 
$usuario = "$nombreConvert"."$res1"."$res";



$imagen = $_FILES['imagen1']['name'];
$tipo = $_FILES['imagen1']['type'];
$temp  = $_FILES['imagen1']['tmp_name'];




if (!empty($imagen)){
    $sql="UPDATE usuarios SET nombre='$Nombre', apellidos='$Apellidos',cargo='$Cargo', celular='$celular',correo='$correo', clave='$Clave', usuario='$usuario', foto='$imagen' WHERE ID_usuario='$ID_usuario'";

    move_uploaded_file($temp,"C:/xampp/htdocs/Alba/img/usuarios/$imagen");
   }
   else if(empty($imagen)){
    
    $sql="UPDATE usuarios SET nombre='$Nombre', apellidos='$Apellidos',cargo='$Cargo', celular='$celular',correo='$correo', clave='$Clave', usuario='$usuario' WHERE ID_usuario='$ID_usuario'";

   }

 
$query=mysqli_query($con,$sql);

echo "<script>  
history.back();
alert('Se enviaron los datos');
</script>";
 ?>



