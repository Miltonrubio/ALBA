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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Admin Alba</title>


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
            <a href="mensajes.php">
              <i class="bi bi-circle"></i><span>Mensajes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Usuarios</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin.php" class="active">
          <i class="bi bi-person"></i>
          <span>Usuarios</span>
        </a>
      </li><!-- End Profile Page Nav -->


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
      <h1>Usuarios</h1>

    </div><!-- End Page Title -->


    <section class="section">
      <div class="row">
        <div class="col-lg-12 col-md-12 sol-sm-12">


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

                <input type="file" class="form-control mb-3" name="foto" placeholder="Foto"
                    required>
                <input type="number" maxlength="10" class="form-control mb-3" name="celular" placeholder="Celular"
                    required>
                    <input type="email"  class="form-control mb-3" name="correo" placeholder="Correo"    required>
                <input type="password" minlength="8" class="form-control mb-3" name="clave" placeholder="Clave"
                    required>
                <input type="submit" class="btn btn-primary">
            </form>


        </div>
        </div>
        </div><!-- End Form -->

        <br>
        <br>
        <br>
 
    <section class="section">
      <div class="row">
        <div class="col-lg-12 col-md-12 sol-sm-12">


          <div class="card">
            <div class="card-body">

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
   
                  <tr>
                            <th scope="col">Nombres</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Clave</th> 
                            <th scope="col">Editar</th>
                            <th scope="col">Borrar</th> 
                    
                  </tr>
                </thead>
                <tbody>
                <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                  <tr>
                    <td>
                            <?php  echo $row['nombre']." ".$row['apellidos']?></td>
                    <td> 
                            <?php  echo $row['cargo']?></td>
                    <td>     <?php  echo $row['correo']?></td>
                    <td>     <?php  echo $row['celular']?></td>
                    <td>     <?php  echo $row['clave']?></td>
                   
                    <td><a class="btn btn-success" data-toggle="modal"
                                data-target="#ModalVer<?php echo $row['ID_usuario']?>"><i
                                    class="bi bi-pencil-square"></i></a></td>  
                    <td><a class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModal<?php echo $row['ID_usuario']?>"><i
                                    class="bi bi-trash"></i></a> </td>
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



                                <form  enctype="multipart/form-data" id="frmajax<?php echo $row['ID_usuario']?>" method="POST" action="cruds/usuarios/actualizar.php">

                                        <input type="hidden" name="ID_usuario1"
                                            value="<?php echo $row['ID_usuario']?>">
                                        <label>Nombres:</label>
                                        <input type="text" class="form-control mb-3" name="nombre1"
                                            placeholder="Nombres" value="<?php echo $row['nombre']?>">
                                        <label>Apellidos:</label>
                                        <input type="text" class="form-control mb-3" name="apellidos1"
                                            placeholder="Apellidos" value="<?php echo $row['apellidos']?>">
                                            <label>Correo:</label>
                                        <input type="mail" class="form-control mb-3" name="correo1"
                                            placeholder="Correo" value="<?php echo $row['correo']?>">
                                        <label>Cargo: </label>
                                        <input type="text" class="form-control mb-3" name="cargo1" placeholder="Cargo"
                                            value="<?php echo $row['cargo']?>">
                                            <label>Usuario: </label>
                                        <input type="text" class="form-control mb-3" name="usuario"
                                            value="<?php echo $row['usuario']?>" disabled id="link">
                                        

                                            <label>Foto: </label>
                                        <input type="file" class="form-control mb-3" name="imagen1" placeholder="Foto"
                                            value="<?php echo $row['foto']?>">

                                            <img src="../img/usuarios/<?php echo $row['foto']?>" height="auto" width="100%">
                                            
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
	$(document).ready(function(){
    $("#frmajax<?php echo $row['ID_usuario']?>").on("submit", function (event) {

      event.preventDefault();
  
      var form = $('#frmajax<?php echo $row['ID_usuario']?>')[0]; 
      var formData = new FormData(form);

      formData.append('imagen1', $('input[type=file]')[0].files[0]);

			$.ajax({
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: formData,
        contentType: false,
        processData: false,
      
				success:function(r){
					if(r==1){
                                            window.location.replace("admin.php");
					}else{
                                            window.location.replace("admin.php");
					}
				}
			});

			return false;
		});
	});
</script>
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