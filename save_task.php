<?php


if(isset($_REQUEST['save_task'])) {

    include("db.php");

    $nombre=$_POST['nombre'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $sucursal=$_POST['sucursal'];
    $Fecha=$_POST['Fecha'];
    $idRol=$_POST['idRol'];


    $sql="INSERT INTO usuarios (nombre, usuario, contraseña, sucursal, Fecha, idRol) VALUES('$nombre', '$usuario', '$contraseña', '$sucursal', '$Fecha', '$idRol')";
    $ejecutar=mysqli_query($conn, $sql);

    if ($ejecutar) {
        header("Location:crud.php");
      
    }

}


?>