
<?php include("db.php") ?>

<?php include("includes/header5.php")?>



<table class="table table-bordered">
             <thead>
                         <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Sucursal</th>
                            <th>Servicio</th>
                            <th>Hora Solicitado</th>
                            <th>Hora Concluido</th>
                            <th>Observaciones</th>
                            <th>Tecnico</th>
                            <th>Acciones</th>
                         </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT * FROM servicios";
            $result_usuarios = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_usuarios)){ ?>

            <tr>    
                <td><?php echo $row['idservicio'] ?></td>
                <td><?php echo $row['usuario'] ?></td>
                <td><?php echo $row['sucursal'] ?></td>
                <td><?php echo $row['servicio'] ?></td>
                <td><?php echo $row['solicitado'] ?></td>
                <td><?php echo $row['concluido'] ?></td>
                <td><?php echo $row['observaciones'] ?></td>
                <td><?php echo $row['tecnico'] ?></td>
                <td>
               
                <br>
                <a href="delete_task2cliente.php?idservicio=<?php echo $row['idservicio']?>" class="btn btn-danger">
                     <i class="far fa-trash-alt"></i>
                </a>
                </td>
            </tr>
        
        

            <?php }?>
        </tbody>
            </table>
        </div>
    </div>
</div>  





<?php include("includes/footer.php")?>