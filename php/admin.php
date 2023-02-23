<?php 
include("conexion.php");

session_start();

$Datos=$_SESSION['usuario'];
$con=conectar();

$sql="SELECT * FROM usuarios";
$query=mysqli_query($con,$sql);



if($_SESSION['usuario']==""){
    echo '<script>  window.location.replace("../login/index.php");  </script>'; 
  }
  
  
if(isset($_SESSION['usuario'])){
   
    if($_SESSION['usuario']['cargo']!="CEO"){
        echo '<script>  window.location.replace("galeria.php");  </script>'; 
        } 
    
    }
    

?>

<!doctype html>
<html lang="en">

<head>
    

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Alba</title>
    
    <link rel="shortcut icon" href="../img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/menulateral.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



</head>


<body>



<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">


    

        <div class="options__menu">

            <a href="galeria.php">
                <div class="option">
                <i class="fa-solid fa-image" title="Galeria"></i>
                    <h4>Galeria</h4>
                </div>
            </a>
            <a href="galeria.php" class="selected">
                <div class="option">
                <i class="fa-solid fa-user" title="Galeria"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="mensajes.php">
                <div class="option">
                <i class="fa-solid fa-envelope" title= "Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>

            <a href="salir.php">
                <div class="option">
                <i class="fa-solid fa-door-open" title="Cerrar Sesion"></i>
                    <h4>Salir</h4>
                </div>
            </a>

        </div>

    </div>




    <main>

    <div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
       
        <div class="col-lg-4">
        <br><br> <br><br>
            <h1>Registrar nuevo</h1>
            <form action="cruds/usuarios/insertar.php" method="POST">
                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" required>
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">

                <select id="inputState" class="form-select mb-3" name="cargo" placeholder="Cargo">
                    <option selected>Becario</option>
                    <option>CEO</option>
                    <option>Familia Alba</option>
                    <option>Secretaria</option>
                </select>

                <input type="number" maxlength="10" class="form-control mb-3" name="celular" placeholder="Celular"
                    required>
                    <input type="email"  class="form-control mb-3" name="correo" placeholder="Correo"    required>
                <input type="password" minlength="8" class="form-control mb-3" name="clave" placeholder="Clave"
                    required>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
    </div>
    <br>
    <div class="container">
        
        <div class="col-lg-12 col-md-12">
           <table id="ejemplo" class="table table-striped" style="width:100%">
                <h1>Usuarios Ingresados</h1>
                <thead class="table-success">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Cargo</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Clave</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                                          
                                                while($row=mysqli_fetch_array($query)){
                                        ?>
                    <tr>
                        <th>
                            <?php  echo $row['ID_usuario']?>
                        </th>
                        <th>
                            <?php  echo $row['nombre']." ".$row['apellidos']?>
                        </th>
                        <th disabled>
                            <?php  echo $row['cargo']?>
                        </th>
                        <th>
                            <?php  echo $row['correo']?>
                        </th>
                        <th>
                            <?php  echo $row['celular']?>
                        </th>
                        <th>
                            <?php  echo $row['clave']?>
                        </th>
                        <th><a class="btn btn-success" data-toggle="modal"
                                data-target="#ModalVer<?php echo $row['ID_usuario']?>"><i
                                    class="bi bi-pencil-square"></i></a></th>
                        <th><a class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModal<?php echo $row['ID_usuario']?>"><i
                                    class="bi bi-trash"></i></a></th>
                    </tr>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $row['ID_usuario']?>" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> ¿Seguro quieres eliminar a
                                        <?php echo $row['Nombre'] ?> ?
                                    </h5>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <a class="btn btn-danger"
                                        href="php/crud/delete.php?id=<?php echo $row['ID_usuario']?>">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="ModalVer<?php echo $row['ID_usuario']?>"
                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header"> Actualizar </div>
                                <div class="container">



                                    <form id="frmajax<?php echo $row['ID_usuario']?>" method="POST">

                                        <input type="hidden" name="ID_usuario1"
                                            value="<?php echo $row['ID_usuario']  ?>">
                                        <label>Nombres:</label>
                                        <input type="text" class="form-control mb-3" name="nombre1"
                                            placeholder="Nombres" value="<?php echo $row['nombre']?>">
                                        <label>Apellidos:</label>
                                        <input type="text" class="form-control mb-3" name="apellidos1"
                                            placeholder="Apellidos" value="<?php echo $row['apellidos']?>">
                                            <label>Correo:</label>
                                        <input type="mail" class="form-control mb-3" name="correo1"
                                            placeholder="Correo" value="<?php echo $row['correo']?>">
                                        <label>Rol: </label>
                                        <input type="text" class="form-control mb-3" name="cargo1" placeholder="Cargo"
                                            value="<?php echo $row['cargo']?> ">
                                        <label>Celular:</label>
                                        <input type="text" class="form-control mb-3" name="celular1"
                                            placeholder="Celular" value="<?php echo $row['celular']?>">
                                        <label>Clave: </label>
                                        <input type="text" class="form-control mb-3" name="clave1" placeholder="Clave"
                                            value="<?php echo $row['clave']?>">

                                        <button id="btnguardar<?php echo $row['ID_usuario']?>"
                                            class="btn btn-success">Guardar datos</button>
                                    </form>



                                </div>


                            </div>
                        </div>
                    </div>




                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#btnguardar<?php echo $row['ID_usuario']?>').click(function () {
                                var datos = $('#frmajax<?php echo $row['ID_usuario'] ?>').serialize();
                                $.ajax({
                                    type: "POST",
                                    url: "cruds/usuarios/actualizar.php",
                                    data: datos,
                                    success: function (r) {
                                        if (r == 1) {
                                            window.location.replace("admin.php");
                                        } else {
                                            alert("Fallo el server");
                                        }
                                    }
                                });

                                return false;
                            });
                        });
                    </script>

                    <?php 
                                            }
                                        ?>
                </tbody>
            </table>


        </div>
    </div>
</div>

</div>

</main>





<script src="../js/menulateral.js"></script>

<script src="../css/assets/popper.min.js"></script>
<script src="../css/assets/bootstrap.min.js"></script>


<script  src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
<script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../js/app.js"></script>

    </script>


</html>