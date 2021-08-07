<?php




$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;


include('db.php');


$conexion=mysqli_connect("localhost","root","D-antonio1204","vivalia");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";


$resultado=mysqli_query($conexion,$consulta);   

$filas=mysqli_fetch_array($resultado);



if($filas['idRol']==1){// ROL ADMINISTRADOR
    header("location:alerta.html");
}else

if($filas['idRol']==2){// ROL CLIENTES
    header("location:alert-cliente.html");
}

else{
    echo'<script type="text/javascript">
    alert("La contraseña es incorrecta. Vuelve a intentarlo. ");
    window.location.href="index.php";
    </script>';
}



mysqli_free_result($resultado);
mysqli_close($conexion);