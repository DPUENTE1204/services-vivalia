<?php include("includes/header6.php")?>



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
            
            <form action="save_task2cliente.php" method="POST">

                 
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
                </div>
                <br>  
                <div class="form-group">
                    <input type="text" name="sucursal" class="form-control" placeholder="Sucursal" autofocus>
                </div>
                <br>
                <div class="form-group">
                <textarea name="servicio" rows="3" class="form-control" placeholder="Servicio"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="concluido" class="form-control" placeholder="Hora Concluido" autofocus>
                </div>
                <br>
                <div class="form-group">
                  <textarea name="observaciones" rows="3" class="form-control" placeholder="Observaciones"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="tecnico" class="form-control" placeholder="Tecnico" autofocus>
                </div>
                <br>
                <input type="submit" class="btn btn-success btn-block" name="save_task2cliente" value="                         Enviar Solicitud                    ">

            </form>

            </div>
        </div>
        <div class="col-md-8">
         
            <div align="center"> <img src="tecnico2.png" width="400px" heigth="400px" class="col-md-8">
        <div>



<?php include("includes/footer.php")?>