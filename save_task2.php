<?php


if(isset($_REQUEST['save_task2'])) {

    include("db.php");

    $usuario=$_POST['usuario'];
    $sucursal=$_POST['sucursal'];
    $servicio=$_POST['servicio'];
    $concluido=$_POST['concluido'];
    $observaciones=$_POST['observaciones'];
    $tecnico=$_POST['tecnico'];
    


    $sql="INSERT INTO servicios (usuario, sucursal, servicio, concluido, observaciones, tecnico) VALUES('$usuario', '$sucursal', '$servicio', '$concluido', '$observaciones', '$tecnico')";
    $ejecutar=mysqli_query($conn, $sql);

    if ($ejecutar) {
        header("Location:solicitud.php");
    }

}


?>