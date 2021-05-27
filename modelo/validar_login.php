<?php
// Se traen los datos ingresados por el usuario a la sesión
    $nit=$_POST['nit'];
    $contrasena=$_POST['contraseña'];
    session_start();
    $_SESSION['nit']=$nit;

    //Incluyendo clase conexion de la BD
    include('../conexion/conexion.php');

    // Query para validar el usuario
    $consulta="SELECT COUNT(*) as contar FROM usuario WHERE nit='$nit' AND contrasena='$contrasena'";
    $resultado=mysqli_query($conexion, $consulta);

    $filas = mysqli_fetch_array($resultado);
    //$filas = mysqli_num_rows($resultado);

    //Si son correctos los datos, pasa a la vista dashboard
    if($filas['contar']>0){
        $_SESSION['nit']= $nit;
        header("location:../vista/dashboard.php");
    }
    // Si no son correctos, manda una alerta SweetAlert2
    else{
        ?>
        <?php
        include("../vista/login.html");
        ?>
        <!--Inicia Alerta SweetAlert2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            Swal.fire({
            title: 'Error',
            text: 'Nit y/o contraseña inválidos',
            icon: 'warning',
            });
        </script>
        <!--Fin Alerta SweetAlert2-->
        <?php
    }

// Se hace la consulta
mysqli_free_result($resultado);
// Se cierra la consulta
mysqli_close($conexion);