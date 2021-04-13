<?php
    $nit=$_POST['nit'];
    $contrasena=$_POST['contraseña'];
    session_start();
    $_SESSION['nit']=$nit;

    include('../conexion/conexion.php');

    $consulta="SELECT * FROM usuario WHERE nit='$nit' AND contrasena='$contrasena'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location:../vista/dashboard.html");
    }else{
        ?>
        <?php
        include("../vista/dashboard.html");
        ?>
        <h1 class="bad">Error en la autenticación</h1>
        <?php
    }
mysqli_free_result($resultado);
mysqli_close($conexion);