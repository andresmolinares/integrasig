<?php
    session_start();
    $nit = $_SESSION['nit'];

    if(!isset($nit)){
        header("location:../vista/login.html");
    }else{
        
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
    
    <link href="../estilos/sidebar-style.css" rel="stylesheet">
</head>
<!--NAVBAR VERTICAL-->
<div class="vertical-nav bg-dark" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-dark">
      <div class="media d-flex align-items-center">
        <img src="../img/logo-unisinu-cartagena-rojo.png" alt="..." width="200" class="mr-3 shadow-sm bg-dark">
 
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>
  
    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic bg-gradient">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  Inicio
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  About
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  Services
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Gallery
              </a>
      </li>
    </ul>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Sistemas de gestión</p>
  
    <ul class="nav flex-column bg-dark mb-0">
      <li class="nav-item">
        <a href="sg-sst.php" class="nav-link text-light font-italic">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  Seguridad y salud del trabajo
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Gestión ambiental
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light font-italic">
                  <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                  Gestión de calidad
              </a>
      </li>
      
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-2 mb-0">Más</p>
    <ul class="nav flex-column bg-dark mb-0">
        <li class="nav-item">
            <a href="../modelo/cerrar_sesion.php" class="nav-link text-light font-italic">
                <button class="btn btn-danger">Cerrar sesión</button></br></br>  
            </a>
            
        </li>
        <li class="nav-item">
         <a class="nav-link text-light font-italic">Todos los derechos reservados.</a>     
        </li>
    </ul>

  </div>
  <!-- End vertical navbar-->

  
  <!-- Page content holder -->

    
<body>  

<!--SIDEBAR-->

<div class="page-content p-5" id="content">
 <!-- Demo content -->
 <h2 class="display-5 text-dark fw-bold">¡Bienvenido a INTEGRASIG!</h2>
 <p class="lead text-dark mb-0">Centro de gestión para seguimiento de implementación de los sistemas de gestión integrados.</p>

 <div class="separator"></div>

</div>
<script src="../estilos/sidebars.js"></script>
<script src="../estilos/js/bootstrap.bundle.js"></script>
</body>
</html>
<?php
    }

?>