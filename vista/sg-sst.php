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
    <link href="../estilos/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   
</head>

<body>

    <!--SIDEBAR-->
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
              <span class="fs-5 d-none d-sm-inline">Integrasig</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link align-middle px-0 link-danger">
                  <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
              </li>
              <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle link-danger">
                  <i class="fs-4 bi bi-grid-3x3"></i> <span class="ms-1 d-none d-sm-inline">Sistemas de gestión</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="sg-sst.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Seguridad y salud</span></a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Gestión ambiental</span></a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Gestión de calidad</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle link-danger">
                  <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
              </li>
              <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle link-danger ">
                  <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="#" class="nav-link px-0 link-danger"> <span class=" d-none d-sm-inline">Item</span> 1</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Item</span> 2</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle link-danger">
                  <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li class="w-100">
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Product</span> 1</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Product</span> 2</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Product</span> 3</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Product</span> 4</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle link-danger">
                  <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown pb-4">
              <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/logo2.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">User</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../modelo/cerrar_sesion.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>




    <div class="col py-3 bg-body rounded" id="content">
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
                    <a href="estandares/estandar-2items.php" class="text-dark"><h5 class="card-title">Estándar 2</h5></a>
                  
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
                    <a href="estandares/estandar-3items.php" class="text-dark"><h5 class="card-title">Estándar 3</h5></a>
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
                    <a href="estandares/estandar-4items.php" class="text-dark"><h5 class="card-title">Estándar 4</h5></a>
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
                      <a href="estandares/estandar-5items.php" class="text-dark"><h5 class="card-title">Estándar 5</h5></a>
                    
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
                      <a href="estandares/estandar-6items.php" class="text-dark"><h5 class="card-title">Estándar 6</h5></a>
                    
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
                      <a href="estandares/estandar-7items.php" class="text-dark"><h5 class="card-title">Estándar 7</h5></a>
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
       
    <script src="../estilos/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
    }
?>