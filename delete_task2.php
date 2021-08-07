<?php


include("db.php");

if (isset($_GET['idservicio'])) {
    $idservicio = $_GET['idservicio'];
    $query = "DELETE FROM servicios WHERE idservicio = $idservicio";
    $result = mysqli_query($conn, $query);

    if (!result) {
        die("Query Failed");
    }

  

    $_SESSION['message'] = "Usuario Eliminado";
    $_SESSION['message_type'] = 'danger';
    header("Location: servicio.php");
   

}

?>
