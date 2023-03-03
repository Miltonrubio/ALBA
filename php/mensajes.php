<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM contacto ORDER BY ID_contacto DESC ";
//"SELECT * FROM blog JOIN usuarios USING(ID_usuario) ORDER BY DESC "
$query = mysqli_query($con, $sql);


session_start();

$Datos=$_SESSION['usuario'];


if($_SESSION['usuario']==""){
  echo '<script>  window.location.replace("../login/index.php");  </script>'; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contacto Alba</title>


  <!-- Favicons --> 
  <link rel="shortcut icon" href="../img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">
  <link href="../img/ALBA_WEB_ELEMENTS-01.png" rel="apple-touch-icon">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">


  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
  
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="galeria.php" >
              <i class="bi bi-circle"></i><span>Galeria</span>
            </a>
            </li>
            <li>
            <a href="mensajes.php" class="active">
              <i class="bi bi-circle"></i><span>Mensajes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      
      <li class="nav-heading">usuarios</li>
      <?php 
    if(isset($_SESSION['usuario'])){   
   if($_SESSION['usuario']['cargo']=="CEO"){

?>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin.php">
          <i class="bi bi-person"></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <?php 
} }
 ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="salir.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Salir</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Mensajes</h1>

    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12 col-md-12 sol-sm-12">


          <div class="card">
            <div class="card-body">

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
   
                  <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Borrar</th>  
                            <th scope="col">Ver</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                  <tr>
                    <td> <?php  echo $row['nombre']?></td>
                    <td>     <?php  echo $row['comentarios']?></td>
                    <td>     <?php  echo $row['correo']?></td>
                    <td>     <?php  echo $row['celular']?></td>
                   
                    <td> <a   class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete<?php echo $row['ID_contacto']?>"><i class="bi bi-trash"></i></a></td>  
                    <td><a  class="btn btn-info" data-toggle="modal" data-target="#ModalVer<?php echo $row['ID_contacto']?>" ><i class="bi bi-eye-fill"></i></a> </td>
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
                                       } ?>
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/apexcharts/apexcharts.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/chart.js/chart.umd.js"></script>
  <script src="vendor/echarts/echarts.min.js"></script>
  <script src="vendor/quill/quill.min.js"></script>
  <script src="vendor/simple-datatables/simple-datatables.js"></script>
  <script src="vendor/tinymce/tinymce.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="main.js"></script>



  
  <script src="../css/assets/popper.min.js"></script>
<script src="../css/assets/bootstrap.min.js"></script>


<script  src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
<script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../js/app.js"></script>


</body>

</html>