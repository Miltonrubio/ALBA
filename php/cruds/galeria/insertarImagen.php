<?php


//Estas lfotoas sirven para crear una conexion con la BD para poder agregar un Administrador nuevo


include("../../conexion.php");
$con=conectar();





$titulo = filter_input(INPUT_POST, 'titulo');


$foto= filter_input(INPUT_POST, 'foto');



                                    $imagen = $_FILES['foto']['name'];
                                    $tipo = $_FILES['foto']['type'];
                                   $temp  = $_FILES['foto']['tmp_name'];

                                   

    $query = "INSERT INTO `galeria`(`imagen`,`nombreimagen`, `mostrar`) VALUES ('$imagen','$titulo','No')";
                                       // $resultado = mysqli_query($conex, $query);

    

                                     if (mysqli_query($con, $query)) {

                                                move_uploaded_file($temp,"C:/xampp/htdocs/Alba/img/galeria/$imagen");
                                           
                                          
        echo '<script>  window.location.replace("../../galeria.php");  </script>';


                                        } else {
                                            //Si la consulta no se logro completar, se nos mostrara un mensaje de error
                                            echo "<script>  
                                            history.back();
                                            alert('No se enviaron los datos');
                                            </script>";
                                        }

                                    
                                

?>
  
