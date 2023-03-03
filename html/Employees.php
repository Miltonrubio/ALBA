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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/style.css">
    <title>Alba Employees</title>
</head>

<body class="employees__body">
<?php
                                          
                                          while($row=mysqli_fetch_array($query)){
                                  ?>
    <div class="card-container">
        <img src="../img/usuarios/<?php  echo $row['foto']?>" alt="user" class="round">
        <h3 class="card-name"><?php echo $row['nombre']." ".$row['apellidos']?></h3>
        <h6 class="city">México</h6>
        <p class="job">Ing Programador<br>     <?php  echo $row['cargo'] ?></p>
        <div class="skills">
            <h6>Habilidades</h6>
            <ul>
                <li>Ionic</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>Angular</li>
            </ul>
        </div>
    </div>
    <?php } ?>

</body>

</html>