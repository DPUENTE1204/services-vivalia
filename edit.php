<?php

include("db.php");

if(isset($_GET['idlogin'])){
    $idlogin = $_GET['idlogin'];
    $query = "SELECT * FROM usuarios WHERE idlogin = $idlogin";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1); {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $usuario = $row['usuario'];
        $contraseña = $row['contraseña'];
        $sucursal = $row['sucursal'];
       
    }
    
}

if (isset($_POST['update'])) {
    $idlogin = $_GET['idlogin'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $sucursal = $_POST['sucursal'];
    
    $query = "UPDATE usuarios set nombre = '$nombre', usuario = '$usuario', contraseña = '$contraseña', sucursal = '$sucursal' WHERE idlogin = $idlogin";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Usuario Actualizado';
    $_SESSION['message_type'] = 'warning';
    header("Location: crud.php");
}


?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">

            <form action="edit.php?idlogin=<?php echo $_GET['idlogin']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualizar Nombre">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control" placeholder="Actualizar Usuario">
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="contraseña" value="<?php echo $contraseña; ?>" class="form-control" placeholder="Actualizar Contraseña">
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="sucursal" value="<?php echo $sucursal; ?>" class="form-control" placeholder="Actualizar Sucursal">
                </div>
                <br>
                <input type="submit" class="btn btn-success btn-block" name="update" value="                      Actualizar Usuario                   ">
            </form>         

            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>