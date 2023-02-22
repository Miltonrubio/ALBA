<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM contacto ORDER BY ID_contacto DESC ";
//"SELECT * FROM blog JOIN usuarios USING(ID_usuario) ORDER BY DESC "
$query = mysqli_query($con, $sql);


?>

<!doctype html>
<html lang="en">

<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes Alba</title>
    
    <link rel="shortcut icon" href="../img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/menulateral.css">
        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>




<body id="body">

    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="options__menu">

            <a href="galeria.php" >
                <div class="option">
                <i class="fa-solid fa-image" title="Galeria"></i>
                    <h4>Galeria</h4>
                </div>
            </a>

            <a href="mensajes.php" class="selected">
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
<br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-sm-12">
                <table id="ejemplo" class="table table-striped" style="width:100%">
                    <h1 class="titulo2">MENSAJES</h1>
                    <thead class="table  table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Mensaje</th>
                            <th>Correo</th>
                            <th>Celular</th>
                            <th>Borrar</th>
                            <th>Ver</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <th>
                                    <?php echo $row['ID_contacto'] ?>
                                </th>
                                <th>
                                    <?php echo $row['nombre'] ?>
                                </th>
                                <th>
                                    <?php echo $row['comentarios'] ?>
                                </th>
                                <th>
                                    <?php echo $row['correo'] ?>
                                </th>
                                <th>
                                    <?php echo $row['celular'] ?>
                                </th>

                                <th> <a class="btn btn-danger" data-toggle="modal"
                                        data-target="#ModalDelete<?php echo $row['ID_contacto'] ?>"><i
                                            class="bi bi-trash"></i></a></th>
                                <th><a class="btn btn-info" data-toggle="modal"
                                        data-target="#ModalVer<?php echo $row['ID_contacto'] ?>"><i
                                            class="bi bi-eye-fill"></i></a> </th>


                            </tr>



                            <!-- Modal -->
                            <div class="modal fade" id="ModalDelete<?php echo $row['ID_contacto'] ?>" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> ¿Seguro quieres eliminar el
                                                mensaje de:
                                                <?php echo $row['nombre'] ?>?
                                            </h5>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            <a class="btn btn-danger"
                                                href="cruds/contactos/borrarContacto.php?id=<?php echo $row['ID_contacto'] ?>">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal fade bd-example-modal-lg" id="ModalVer<?php echo $row['ID_contacto'] ?>"
                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php echo $row['nombre'] ?>
                                                </h5>

                                            </div>
                                            <br>
                                            <div class="col-md-2"></div>
                                            <div class="">

                                                <form id="frmajax<?php echo $row['ID_contacto'] ?>" method="POST">

                                                    <input type="hidden" name="ID_contacto1"
                                                        value="<?php echo $row['ID_contacto'] ?>">
                                                    <label>Nombres:</label>
                                                    <input type="text" class="form-control mb-3" name="nombre1"
                                                        placeholder="Nombres" value="<?php echo $row['nombre'] ?>"
                                                        Disabled>

                                                    <label>Mensaje:</label>

                                                    <textarea class="form-control" rows="8" name="correo1" name="motivo1"
                                                        Disabled><?php echo $row['comentarios'] ?></textarea>
                                                    <label>Celular:</label>
                                                    <input type="text" class="form-control mb-3" name="celular1"
                                                        placeholder="Celular" value="<?php echo $row['celular'] ?>"
                                                        Disabled>

                                                    <label>Correo:</label>
                                                    <input type="text" class="form-control mb-3" name="correo"
                                                        value="<?php echo $row['correo'] ?>" Disabled>
                                                    <button   class="btn btn-danger">Cerrar</button>
                                                </form>

                                            </div>

                                            <div class="col-md-2"></div>


                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>


            <div class="col-md-"></div>
        </div>

    </div>
                    
    </main>



<!-- Option 1: Bootstrap Bundle with Popper -->

<script  src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
<script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../css/assets/popper.min.js"></script>
<script src="../css/assets/bootstrap.min.js"></script>


<script src="../js/menulateral.js"></script>

<script src="../js/app.js"></script>

</script>


</body>

</html>