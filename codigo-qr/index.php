
<?php 
include("../php/conexion.php");
$con=conectar();


$id=$_GET['id'];

//$sql="SELECT *, date_format(fecha, '%d-%m-%Y') as fecha_formateada FROM blog JOIN usuarios USING(ID_usuario) WHERE ID_blog=$id";
$sql="SELECT * FROM usuarios WHERE usuario='$id'";

//http://localhost/realba/html/Employees.php?id=1

//"SELECT * FROM blog JOIN usuarios USING(ID_usuario) ORDER BY DESC "
$query=mysqli_query($con,$sql);



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Código QR con Javascript</title>
		

		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
		<script defer src="app.js"></script>
	</head>
	<body>
		<div class="contenedor">
			<form action="" id="formulario" class="formulario">
			<?php       while($row=mysqli_fetch_array($query)){
                                  ?>
				<input type="text" id="link" placeholder="Escribe el texto o URL" value="localhost/alba/html/Employees.php?id=<?php echo $row['usuario']?>" />

				<?php } ?>
				<button class="btn">Generar QR</button>
			</form>

			<div id="contenedorQR" class="contenedorQR"></div>
		</div>
	</body>
</html>
