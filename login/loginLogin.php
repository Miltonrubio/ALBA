<?php



//Linea de conexion a la bd
$mysqli=new mysqli('localhost','root','','pruebaenvelope');
if ($mysqli->connect_errno) {
  //Si hay un error, se muestr un mensaje con el error
  echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
};


session_start();
//pide el email
$usu=$_POST['usuario'];

//pide el password
$pass=$_POST['clave'];
//indica el rol del correo y la clave tales como instalador, administrador etc.
$usuarios=$mysqli->query("Select Nombre,Rol,celular, usuario, correo, ID_usuario, Clave usuario from usuarios Where usuario='".$usu."' AND Clave='".$pass."'");
if ($usuarios->num_rows==1):
  /*valida que si hay un usuario que coincidan sus datos, ejecute la consulta 
  y guarde los resultados en la variable datos*/
  $datos= $usuarios->fetch_assoc();
  
  //toma los datros de la consulta y los guarda en la sesion "usuario
  $_SESSION['usuario']= $datos;
  //Si se ejecuta, manda que no hay error, y te muestra el rol tomado
    echo json_encode(array('error'=>false,'Rol'=>$datos['Rol']));
else:
    echo json_encode(array('error'=>true));
    //si no se ejecuta, te muestra que hay un error
endif;

$mysqli->close();






 ?>
