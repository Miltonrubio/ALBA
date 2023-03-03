

<?php 
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM galeria ";
//"SELECT * FROM blog JOIN usuarios USING(ID_usuario) ORDER BY DESC "
$query=mysqli_query($con,$sql);




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

  <title>Tables / General - NiceAdmin Bootstrap Template</title>


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
            <a href="tables-general.html" class="active">
              <i class="bi bi-circle"></i><span>Galeria</span>
            </a>
            </li>
            <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Mensajes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Salir</span>
        </a>
      </li><!-- End Login Page Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>

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
                            <th scope="col">imagen</th>
                            <th scope="col">Mostrar</th>
                            <th scope="col">Borrar</th>  
                            <th scope="col">Ver</th>
                            <th scope="col">Publicar</th>
                            <th scope="col">Editar</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                  <tr>
                    <td> <?php  echo $row['nombreimagen']?></td>
                    <td>     <?php  echo $row['mostrar']?></td>
                    <td> <a   class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete<?php echo $row['ID_galeria']?>"><i class="bi bi-trash"></i></a></td>  
                    <td><a  class="btn btn-info" data-toggle="modal" data-target="#ModalVer<?php echo $row['ID_galeria']?>" ><i class="bi bi-eye-fill"></i></a> </td>
                    <td><a   class="btn btn-success" data-toggle="modal" data-target="#ModalConfir<?php echo $row['ID_galeria']?>" ><i class="bi bi-check"></i></a></td> 
                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $row['ID_galeria']?>"><i class="bi bi-pencil-square"></i></a></td>
                  </tr>




  <!-- Modal -->
  <div class="modal fade" id="ModalDelete<?php echo $row['ID_galeria']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">  ¿Seguro quieres eliminar la imagen: <?php echo $row['nombreimagen']?> ?</h5>
        
        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a  class="btn btn-danger" href="cruds/galeria/eliminarGaleria.php?id=<?php echo $row['ID_galeria']?>">Eliminar</a>
        </div>
      </div>
    </div>
  </div>

 
  <!-- Modal -->
  <div class="modal fade" id="ModalConfir<?php echo $row['ID_galeria'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">  ¿Seguro quieres publicar la imagen: <?php echo $row['nombreimagen'] ?> ?</h5>
        
        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a  class="btn btn-success" href="cruds/galeria/publicarGaleria.php?id=<?php echo $row['ID_galeria']?>">Publicar</a>
        </div>
      </div>
    </div>
  </div>


<div class="modal fade bd-example-modal-lg" id="ModalVer<?php echo $row['ID_galeria'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['nombreimagen'] ?></h5>
          
      </div>
          <br>
          
                        <img class="card-img-top" src="../img/galeria/<?php echo $row['imagen']?>" height="400px" width="400px" >

   </div>
 </div>
</div>




     <div class="modal fade bd-example-modal-lg" id="ModalEdit<?php echo $row['ID_galeria']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header"> Actualizar </div>

<div class="container">


<form  enctype="multipart/form-data" id="frmajax<?php echo $row['ID_galeria']?>" method="POST" action="cruds/galeria/actualizarGaleria.php">
                    
                    <input type="hidden" name="ID_galeria1" value="<?php echo $row['ID_galeria']?>">
                    <label>nombreimagen:</label>
                    <input type="text" class="form-control mb-3" name="nombreimagen1"  value="<?php echo $row['nombreimagen']?>"></input>
             
                    <label>Imagen: </label>
                    <input type="file" class="form-control mb-3" name="imagen1">
               
                    <br>
                    <button id="btnguardar<?php echo $row['ID_galeria']?>" class="btn btn-success">Guardar datos</button>
        </form>

 </div>




</div>
</div>
</div>






<script type="text/javascript">
	$(document).ready(function(){
    $("#frmajax<?php echo $row['ID_galeria']?>").on("submit", function (event) {

      event.preventDefault();
  
      var form = $('#frmajax<?php echo $row['ID_galeria']?>')[0]; 
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
                       window.location.replace("galeria.php");
					}else{
            window.location.replace("galeria.php");
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