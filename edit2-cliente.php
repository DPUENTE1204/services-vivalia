<?php

include("db.php");

if(isset($_GET['idservicio'])){
    $idservicio = $_GET['idservicio'];
    $query = "SELECT * FROM servicios WHERE idservicio = $idservicio";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1); {
        $row = mysqli_fetch_array($result);
        $usuario = $row['usuario'];
        $sucursal = $row['sucursal'];
        $servicio = $row['servicio'];
        $concluido = $row['concluido'];
        $observaciones = $row['observaciones'];
        $tecnico = $row['tecnico'];
       
    }
    
}

if (isset($_POST['update'])) {
    $idservicio = $_GET['idservicio'];
    $usuario = $_POST['usuario'];
    $sucursal = $_POST['sucursal'];
    $servicio = $_POST['servicio'];
    $concluido = $_POST['concluido'];
    $observaciones = $_POST['observaciones'];
    $tecnico = $_POST['tecnico'];
    
    $query = "UPDATE servicios set usuario = '$usuario', sucursal = '$sucursal', servicio = '$servicio', concluido = '$concluido', observaciones = '$observaciones', tecnico = '$tecnico' WHERE idservicio = $idservicio";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Usuario Actualizado';
    $_SESSION['message_type'] = 'warning';
    header("Location: servicio-cliente.php");
}


?>

<?php include("includes/header9.php")?>

<div class="card card-body">
            
<form action="edit2-cliente.php?idservicio=<?php echo $_GET['idservicio']; ?>" method="POST">

                 
                <div class="form-group">
                    <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control" placeholder="Usuario" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="sucursal" value="<?php echo $sucursal; ?>" class="form-control" placeholder="Sucursal" autofocus>
                </div>
                <br>
                <div class="form-group">
                <textarea name="servicio" rows="3" value="<?php echo $servicio; ?>" class="form-control" placeholder="Servicio"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="concluido" value="<?php echo $concluido; ?>" class="form-control" placeholder="Hora Concluido" autofocus>
                </div>
                <br>
                <div class="form-group">
                  <textarea name="observaciones" rows="3" value="<?php echo $observaciones; ?>" class="form-control" placeholder="Observaciones"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="tecnico" value="<?php echo $tecnico; ?>" class="form-control" placeholder="Tecnico" autofocus>
                </div>
                <br>
                <input type="submit" class="btn btn-success btn-block" name="update" value="                         Resolver Solicitud                   ">

            </form>

            </div>
        </div>


<?php include("includes/footer.php") ?>