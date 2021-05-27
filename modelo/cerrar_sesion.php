<?php
// Se identifica la sesion queesta iniciada
session_start();


session_destroy();
// Se borra la sesión

//Redireccionamientol a login
header("location:../vista/login.html");
exit();


?>