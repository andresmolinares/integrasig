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
        <link rel="stylesheet" href="../../estilos/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../estilos/sidebar-style.css">


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

            margin-left:30%;
            margin-right:15%;

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

    <!--NAVBAR VERTICAL-->
    <div class="vertical-nav bg-dark" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-dark">
            <div class="media d-flex align-items-center">
                <img src="../../img/logo-unisinu-cartagena-rojo.png" alt="..." width="200" class="mr-3 shadow-sm bg-dark">

            </div>
        </div>

        

        <div class="eticVol">
        <ul class="nav flex-column bg-dark mb-0">
            <li class="nav-item">
                <a href="estandar-1items.php" class="nav-link text-light font-italic">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Volver
                </a>
            </li>
        </div>
    
        <div class="mitadnavbar">

        <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Seguridad y salud en el trabajo</p>

        <!-- inicio menu desplegable-->
                <div class="menuDesple">

                 <ul class="navbar-nav ml-auto">

                 <li class="nav-item dropdown">
                 

                 <a class="nav-link dropdown-toggle text-light" href="#"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Elegir Estandar
                 </a>
                 
                 <div class="dropdown-menu dropdown-menu-left animate slideIn" aria-labelledby="navbarDropdown">
                    
                 <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 1
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 2
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 3
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 4
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 5
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 6
                </a>

                <a href="#" class="dropdown-item text-black font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                    Estandar - 7
                </a>

                </div>

                 </li>

              </ul>

        </div>

        </div>
        <!-- fin menu desplegable-->

              
              

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
        <div class="page-content p-5  p-3 mb-5 bg-body rounded" id="content">
            <h3 class="display-4 text-dark fw-bold estandar-tittulo">Crear Documento</h3>
            <hr>
        </div>


            <div class="formu">

                   <form>

                        <div class="mb-3">
                            <label for="" class="form-label">Nit:</label>
                            <input type="text" class="form-control" id="">
                        </div>

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


                        <div class="position-relative">

                        
                        <button  type="submit" class="btn btn-warning boton1">Siguiente</button>
                        
                        
                        <a href="estandar-1items.php" class="btn btn-primary boton2">Atras</a>
                        

                        </div>
                        

                        </form>
    


            <div/>

      




    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>

<?php
}
?>