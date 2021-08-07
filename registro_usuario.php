

<?php include("db.php") ?>

<?php

date_default_timezone_set("America/Mexico_City");
$fecha_actual=date("Y-m-d H:i:s");

?>


<?php include("includes/header.php")?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
        <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>  
      
     
            <div class="card card-body">
                
          


                     <form action="save_task.php" method="POST">

                 <div class="form-group">
                    <input type="text" name="Fecha" value="<?php echo $fecha_actual?>" placeholder="" autofocus>
                 </div>
                 <br>
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="sucursal" class="form-control" placeholder="Sucursal" autofocus>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="idRol" class="form-control" placeholder="Rol" autofocus>
                </div>
                <br>
                <input type="submit" class="btn btn-success btn-block" name="save_task" value="                         Agregar Usuario                    ">

                </form>
          

            </div>
        </div>

        <div class="col-md-8">
        <?php

        $busqueda = $_REQUEST['busqueda'];
        if(empty($busqueda))
        {
            header("location: crud.php");
        }

        ?>
     
    
        <table class="table table-bordered">
             <thead>
                         <tr>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Sucursal</th>
                            <th>Fecha</th>
                            <th>Rol</th>
                            <th>Acciones</th>
                         </tr>
            </thead>
            

        <tbody>
            <?php
            $query = "SELECT * FROM usuarios";
            $result_usuarios = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_usuarios)){ ?>

            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td><?php echo $row['contraseña'] ?></td>
                <td><?php echo $row['sucursal'] ?></td>
                <td><?php echo $row['Fecha'] ?></td>
                <td><?php echo $row['idRol'] ?></td>
                <td>
                <a href="edit.php?idlogin=<?php echo $row['idlogin']?>" class="btn btn-secondary">
                    <i class="fas fa-marker"></i>
                </a>
                <br>
                <br>
                <a href="delete_task.php?idlogin=<?php echo $row['idlogin']?>" class="btn btn-danger">
                     <i class="far fa-trash-alt"></i>
                </a>
                </td>
            </tr>
        
        

            <?php }?>
        </tbody>
            </table>
            </form>
        </div>
    </div>
</div>  
<?php include("includes/footer.php")?>