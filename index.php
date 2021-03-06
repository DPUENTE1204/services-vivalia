

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>SOPORTE TECNICO VIVALIA</title>
        <link rel="stylesheet" href="./assets/css/estilos.css">
        <link rel="stylesheet" href="./assets/css/estilos-mensaje.css">
   

    </head>

    <body>


        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <dic class="col-lg-5">
                        <img src="images/pantalla.jpg" class="img-fluid" alt="">
                    </dic>
                    <div class="col-lg-7 px-5 pt-5">
                        <h1 class="font-weight-bold py-3">SOPORTE TECNICO</h1>
                        <h4>Vivalia</h4>
                    

                        <form action="validar.php" method="POST">
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="text" name="usuario" placeholder="Usuario" class="form-control my-3 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <input type="password" name="contraseña" placeholder="******" class="form-control my-3 p-2">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-7">
                                    <button type="submit" class="btn1 mt-3 mb-5">Iniciar Sesión</button>
                                </div>
                            </div>
                           
                            <p>¿No tienes cuenta?  <br>
                               <center> <img src="images/contactosoporte.jpeg"></center><br>
                                <center>Escanea el siguiente QR y solicita tu usuario</center></a></p>
                        
                        </form>
                        <?php
                                    include("validar-form.php");
                                    ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    </body>

    </html>