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
    <title>SG-SST</title>
    <link rel="stylesheet" href="../estilos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../estilos/sidebar-style.css">
   
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
        <a href="dashboard.php" class="nav-link text-light font-italic">
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
        <a href="#" class="nav-link text-light font-italic  bg-gradient">
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
  <!-- End vertical navbar -->



<body>
    <div class="page-content p-5 shadow-lg p-3 mb-5 bg-body rounded" id="content">
        <!-- Demo content -->
        <h2 class="display-4 text-dark fw-bold">Seguridad y salud en el trabajo</h2>
        <hr style="border:5px; width:100%;"><br/>
        <!--Cards-->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            
            <div class="col">
              <div class="card shadow p-3 mb-5 bg-body rounded">
                
                <div class="card-body">
                    <a href="estandares/estandar-1items.php" class="text-dark"><h5 class="card-title">Estándar 1</h5></a>
                  
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow p-3 mb-5 bg-body rounded">
                
                <div class="card-body">
                    <a href="#" class="text-dark"><h5 class="card-title">Estándar 2</h5></a>
                  
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow p-3 mb-5 bg-body rounded">
                
                <div class="card-body">
                    <a href="#" class="text-dark"><h5 class="card-title">Estándar 3</h5></a>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
              </div>
            

            <div class="col">
              <div class="card shadow p-3 mb-5 bg-body rounded">
                
                <div class="card-body">
                    <a href="#" class="text-dark"><h5 class="card-title">Estándar 4</h5></a>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              </div>
              </div>

              <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                  
                  <div class="card-body">
                      <a href="#" class="text-dark"><h5 class="card-title">Estándar 5</h5></a>
                    
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                      <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
              </div>
  
              <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                  
                  <div class="card-body">
                      <a href="#" class="text-dark"><h5 class="card-title">Estándar 6</h5></a>
                    
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                      <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
              </div>
  
              <div class="col">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                  
                  <div class="card-body">
                      <a href="#" class="text-dark"><h5 class="card-title">Estándar 7</h5></a>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-footer">
                      <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                </div>         
            </div>           
          </div>
          <!--End CARDS-->

    </div>
       

</body>
</html>

<?php
    }
?>