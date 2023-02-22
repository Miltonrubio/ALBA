<?php


include("../../conexion.php");
$con=conectar();

// Tomar los datos del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$comments = $_POST["comments"];

// Agregar los datos a una base de datos o hacer cualquier otra cosa con ellos
// ...

$query = "INSERT INTO `contacto`(`nombre`, `correo`, `celular`, `comentarios`, `fecha`) VALUES ('$name','$email','$phone','$comments',NOW())";


if (mysqli_query($con, $query)) {

  echo '<script>  window.location.replace("../../mensajes.php");  </script>';

} else {
  //Si la consulta no se logro completar, se nos mostrara un mensaje de error
  echo "Error: " . mysqli_error($co);
}



?>



