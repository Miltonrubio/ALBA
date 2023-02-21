<?php 
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM galeria ";
//"SELECT * FROM blog JOIN usuarios USING(ID_usuario) ORDER BY DESC "
$query=mysqli_query($con,$sql);

?>

<!doctype html>
<html lang="en">

<head>
    
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>



<body>

    <div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-sm-12">
            <table id="ejemplo" class="table table-striped" style="width:100%">
                    <h1 class="titulo2">Galeria</h1>
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>imagen</th>
                            <th>Mostrar</th>
                            <th>Borrar</th>  
                            <th>Ver</th>
                            <th>Publicar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                        <tr>
                            <th>
                                <?php  echo $row['ID_galeria']?>
                            </th>
                            <th>
                                <?php  echo $row['nombreimagen']?>
                            </th>
                            <th>
                                <?php  echo $row['mostrar']?>
                            </th>
                      
                        
                            <th> <a   class="btn btn-danger" data-toggle="modal" data-target="#ModalDelete<?php echo $row['ID_galeria'] ?>"><i class="bi bi-trash"></i></a></th>    
                            <th><a  class="btn btn-info" data-toggle="modal" data-target="#ModalVer<?php echo $row['ID_galeria'] ?>" ><i class="bi bi-eye-fill"></i></a> </th>
                            <th><a   class="btn btn-success" data-toggle="modal" data-target="#ModalConfir<?php echo $row['ID_galeria'] ?>" ><i class="bi bi-check"></i></a></th>    
                            
                            <th><a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $row['ID_galeria'] ?>"><i class="bi bi-pencil-square"></i></a></th>      
                                                             
                          
                        </tr>



  <!-- Modal -->
  <div class="modal fade" id="ModalDelete<?php echo $row['ID_galeria'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">  ¿Seguro quieres eliminar la imagen: <?php echo $row['nombreimagen'] ?> ?</h5>
        
        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <a  class="btn btn-danger" href="cruds/galeria/eliminarGaleria.php?id=<?php echo $row['ID_galeria'] ?>">Eliminar</a>
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


<form  enctype="multipart/form-data" id="frmajax<?php echo $row['ID_galeria'] ?>" method="POST" action="cruds/galeria/actualizarGaleria.php">
                    
                    <input type="hidden" name="ID_galeria1" value="<?php echo $row['ID_galeria']  ?>">
                    <label>nombreimagen:</label>
                    <input type="text" class="form-control mb-3" name="nombreimagen1"  value="<?php echo $row['nombreimagen']  ?>"></input>
             
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
                                            }
                                        ?>
                    </tbody>
                </table>

                <a type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary text-center"
                    value="AGREGAR BLOG" href="cruds/galeria/agregarImagen.php">AGREGAR IMAGEN</a>
            </div>


            <div class="col-md-"></div>
        </div>

    </div>

</body>

</html>







<!-- Option 1: Bootstrap Bundle with Popper -->


<script src="../css/assets/popper.min.js"></script>
<script src="../css/assets/bootstrap.min.js"></script>


<script  src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></script>
<script  src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="../js/app.js"></script>

    </script>


</body>

</html>