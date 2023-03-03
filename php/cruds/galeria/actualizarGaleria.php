<?php

include("../../conexion.php");
$con=conectar();


$ID_galeria=filter_input(INPUT_POST,'ID_galeria1');

$titulo=filter_input(INPUT_POST,'nombreimagen1');

$foto= filter_input(INPUT_POST, 'imagen1');

                             

                                    $imagen = $_FILES['imagen1']['name'];
                                    $tipo = $_FILES['imagen1']['type'];
                                   $temp  = $_FILES['imagen1']['tmp_name'];

  if (!empty($imagen)){

    $sql="UPDATE galeria SET  nombreimagen='$titulo', imagen='$imagen' WHERE ID_galeria=$ID_galeria";



    move_uploaded_file($temp,"C:/xampp/htdocs/Alba/img/galeria/$imagen");

   }

   
   else if(empty($imagen)){
    $sql="UPDATE galeria SET  nombreimagen='$titulo' WHERE ID_galeria=$ID_galeria";
   }

   

$query=mysqli_query($con,$sql);

echo "<script>  
history.back();
alert('Se enviaron los datos');
</script>";

?>