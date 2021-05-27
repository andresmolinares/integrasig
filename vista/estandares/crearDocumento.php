<?php
session_start();
$nit = $_SESSION['nit'];

if (!isset($nit)) {
    header("location:../login.html");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estandar 1</title>
        <link href="../../estilos/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


        <style>

        .estandar-tittulo{
            text-align:left;
            padding-left:100px;
        }

        hr{
            background-color:black;
            border: 2px solid black;
            margin-left:8%;
            margin-right:9%;
            }


            .formu{

            margin-left:20%;
            margin-right:25%;
            margin-top:5%;

            }

            .position-relative{

            
            left:325px;

            }

            .boton1{

            position:relative;
            right:150px;

            }

            .boton2{

            position:relative;
            left:130px;

            }

            .eticVol{

             margin-left:90px;  
             position:relative;
             bottom:15px;

            }


            .menuDesple{

            margin-left:15px;
            margin-bottom:10px;

            }



            @media (min-width: 992px) {
            .animate {
                animation-duration: 0.3s;
                -webkit-animation-duration: 0.3s;
                animation-fill-mode: both;
                -webkit-animation-fill-mode: both;
            }
            }

            @keyframes slideIn {
            0% {
                transform: translateY(1rem);
                opacity: 0;
            }
            100% {
                transform:translateY(0rem);
                opacity: 1;
            }
            0% {
                transform: translateY(1rem);
                opacity: 0;
            }
            }

            @-webkit-keyframes slideIn {
            0% {
                -webkit-transform: transform;
                -webkit-opacity: 0;
            }
            100% {
                -webkit-transform: translateY(0);
                -webkit-opacity: 1;
            }
            0% {
                -webkit-transform: translateY(1rem);
                -webkit-opacity: 0;
            }
            }

            .slideIn {
            -webkit-animation-name: slideIn;
            animation-name: slideIn;
            }



        </style>


    </head>

    


    <body>

    <!--NAVBAR VERTICAL-->
    <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Integrasig</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="estandar-1items.php" class="nav-link align-middle px-0 link-danger">
                                <i class="fs-4 bi-arrow-left-short"></i> <span class="ms-1 d-none d-sm-inline">Volver</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle link-danger">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Estandares</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                        <a href="estandar-1items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>1</a>
                                    </li>
                                    <li>
                                        <a href="estandar-2items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>2</a>
                                    </li>
                                    <li>
                                        <a href="estandar-3items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>3</a>
                                    </li>
                                    <li>
                                        <a href="estandar-4items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>4</a>
                                    </li>
                                    <li>
                                        <a href="estandar-5items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>5</a>
                                    </li>
                                    <li>
                                        <a href="estandar-6items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>6</a>
                                    </li>
                                    <li>
                                        <a href="estandar-7items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>7</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../img/logo2.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">User</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../../modelo/cerrar_sesion.php">Sign out</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- final vertical navbar-->

            <div class="col py-3" id="content">
            <h3 class="display-4 text-dark fw-bold estandar-tittulo">Crear Documento</h3>
            <hr>


            <div class="formu">

                   <form>

                        <div class="mb-3">
                            <label for="" class="form-label">Nit:</label>
                            <input type="text" class="form-control" id="nit" value=<?php echo $_SESSION['nit']; ?> disabled>
                        </div>
                        
                        <!-- lista desplegable estandares-->
                        <div class="mb-3">
                            <label for="" class="form-label">Estandar:</label>
                            <select class="form-select" aria-label="Disabled select example" disabled>
                                                    <option>Seleccionar</option>
                                                    <option selected>Estandar - 1</option>
                                                    <option value="">Estandar - 2</option>
                                                    <option value="">Estandar - 3</option>
                                                    <option value="">Estandar - 4</option>
                                                    <option value="">Estandar - 5</option>
                                                    <option value="">Estandar - 6</option>
                                                    <option value="">Estandar - 7</option>

                                                    </select>
                        </div>
                        <!-- final lista desplegable estandares-->

                        <!-- lista desplegable items-->
                        <div class="mb-3">
                            <label for="" class="form-label">Item:</label>
                            <select class="form-select" aria-label="Disabled select example">

                                                    <option selected>Seleccionar</option>

                                                    <option value="">1.1.1</option>

                                                    <option value="">1.1.2</option>

                                                    <option value="">1.1.3</option>

                                                    <option value="">1.1.5</option>

                                                    <option value="">1.1.6</option>

                                                    <option value="">1.1.7</option>

                                                    <option value="">1.1.8</option>

                                                    <option value="">1.2.1</option>

                                                    <option value="">1.2.2</option>

                                                    <option value="">1.2.3</option>

                                                    </select>
                        </div>
                        <!-- final lista desplegable items-->


                        <!-- comienzo lista desplegable documentos-->
                        <div class="mb-3">
                            <label for="" class="form-label">Documento a crear:</label>
                            <select class="form-select" aria-label="Disabled select example">

                                                    <option selected>Seleccionar</option>

                                                    <option value="">Acta de nombramiento</option>

                                                    <option value="">Acta conformacion</option>

                                                    <option value="">Matriz de responsabilidad</option>

                                                    <option v>Actividades de Riesgo, listado trabajadores</option>

                                                    <option value="">Acta Mensual del vigia</option>

                                                    <option value="">Programa capacitacion anual</option>

                                                    <option value="">Induccion y reinduccion</option>

                                                    <option value="">Responsable del SG-SST con curso de 50 Horas.</option>

                                                    </select>
                        </div>
                        <!-- final lista desplegable documentos-->


                        <div class="position-relative">

                        
                        <a href="formularios/estandar1/responsable-SGSST.php" class="btn btn-warning boton1">Siguiente</a>
                        
                        
                        <a href="estandar-1items.php" class="btn btn-primary boton2">Atras</a>
                        

                        </div>
                        

                        </form>
    


            <div/>


        </div>


            

      




    </body>

    <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../estilos/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>

<?php
}
?>