<?php


include("db.php");

if (isset($_GET['idlogin'])) {
    $idlogin = $_GET['idlogin'];
    $query = "DELETE FROM usuarios WHERE idlogin = $idlogin";
    $result = mysqli_query($conn, $query);

    if (!result) {
        die("Query Failed");
    }
    

  

    $_SESSION['message'] = "Usuario Eliminado";
    $_SESSION['message_type'] = 'danger';
    header("Location: crud.php");
   

}

?>
