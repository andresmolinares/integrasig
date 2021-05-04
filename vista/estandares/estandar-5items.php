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
        <script src="../../modelo/descargar.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />



        <style>
            .titulo-items {
                padding-bottom: 4px;
                text-align: center;

            }

            .btns-cre-su {
                padding-bottom: 4px;
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
    <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Integrasig</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="../sg-sst.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-arrow-left-short"></i> <span class="ms-1 d-none d-sm-inline">Volver</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Estandares</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                        <a href="estandar-1items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>1</a>
                                    </li>
                                    <li>
                                        <a href="estandar-2items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>2</a>
                                    </li>
                                    <li>
                                        <a href="estandar-3items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>3</a>
                                    </li>
                                    <li>
                                        <a href="estandar-4items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>4</a>
                                    </li>
                                    <li>
                                        <a href="estandar-5items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>5</a>
                                    </li>
                                    <li>
                                        <a href="estandar-6items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>6</a>
                                    </li>
                                    <li>
                                        <a href="estandar-7items.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Estandar</span>7</a>
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


            <div class="col py-3" id="content">
            <h3 class="display-3 text-dark fw-bold titulo-items">Estandar 5 - Items</h3>
            <h4 class="display-5 text-dark fw-bold">Documentos</h4>
            <div class="btns-cre-su">
                <tr>

                    <td>

                        <a href="crearDocumento5.php" class="btn btn-warning">Crear Documento</a>
                        |
                        <button onclick="subirDocumento()" class="btn btn-primary" id="btn1">Subir documento</button>
                        <script>
                            function subirDocumento() {
                                Swal.fire({
                                    title: 'Subir documento',
                                    html: 'Estandar:<select id="swal-input1" class="swal2-input"> <option value="estandar1">Estandar 1</option> <option value="Estandar2">Estandar 2</option> <option value="Estandar3">Estandar 3</option> <option value="Estandar4">Estandar 4</option> <option value="Estandar5">Estandar 5</option> <option value="Estandar6">Estandar 6</option> <option value="Estandar7">Estandar 7</option></select>'
                                        +'Item:<select id="swal-input2" class="swal2-input"> <option value="item1">Item 1.1.2</option> <option value="item2">Item 1.2.3</option></select>' +
                                        'Archivo:<input type="file" id="swal-input3" class="swal2-input">'
                                        ,
                                    focusConfirm: false,
                                    showCancelButton: true,
                                    preConfirm: () => {
                                        return [
                                            document.getElementById('swal-input1').value,
                                            document.getElementById('swal-input2').value,
                                            document.getElementById('swal-input3').value
                                        ]
                                    }
                                })

                                if (formValues) {
                                    Swal.fire(JSON.stringify(formValues))
                                }
                            }
                        </script>
                    </td>

                </tr>
            </div>
            <table class="table table-striped table-hover">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Item</th>
                        <th>Documento</th>
                        <th>Progreso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Inicio de item-->
                    <tr>
                        <td>1.1.1</td>
                        <td>Acta de nombramiento</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>
                    <!--Fin de Item-->

                    <!--Inicio de item-->
                    <tr>
                        <td>1.1.6</td>
                        <td>Acta nombreamiento del vigia</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>
                    <!--Fin de Item-->

                    <tr>
                        <td>1.1.7</td>
                        <td>Acta Mensual del vigia</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1.1.8</td>
                        <td>Acta de Conformacion</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                </tbody>

            </table>


            <!--tabla 2 matrices-->

            <h4 class="display-5 text-dark fw-bold">Matrices</h4>
            <div class="btns-cre-su">
                <tr>

                    <td>

                        <a href="crearMatrices5.php" class="btn btn-warning">Crear Matriz</a>
                        |
                        <button onclick="subirMatriz()" class="btn btn-primary" id="btn2">Subir matriz</button>
                        <script>
                            function subirMatriz(){
                                Swal.fire({
                                    title: 'Subir matriz',
                                    html: 'Estandar:<select id="swal-input1" class="swal2-input"> <option value="estandar1">Estandar 1</option> <option value="Estandar2">Estandar 2</option> <option value="Estandar3">Estandar 3</option> <option value="Estandar4">Estandar 4</option> <option value="Estandar5">Estandar 5</option> <option value="Estandar6">Estandar 6</option> <option value="Estandar7">Estandar 7</option></select>'
                                        +'Item:<select id="swal-input2" class="swal2-input"> <option value="item1">Item 1.1.2</option> <option value="item2">Item 1.2.3</option></select>' +
                                        'Archivo:<input type="file" id="swal-input3" class="swal2-input">'
                                        ,
                                    focusConfirm: false,
                                    showCancelButton: true,
                                    preConfirm: () => {
                                        return [
                                            document.getElementById('swal-input1').value,
                                            document.getElementById('swal-input2').value,
                                            document.getElementById('swal-input3').value
                                        ]
                                    }
                                })

                                if (formValues) {
                                    Swal.fire(JSON.stringify(formValues))
                                }
                            }
                        </script>


                    </td>

                </tr>
            </div>
            <table class="table table-striped table-hover">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Item</th>
                        <th>Documento</th>
                        <th>Progreso</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Inicio de item-->
                    <tr>
                        <td>1.1.2</td>
                        <td>Matriz de responsabilidad</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>
                    <!--Fin de Item-->

                    <!--Inicio de item-->
                    <tr>
                        <td>1.1.3</td>
                        <td>Presupuesto Anual</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1.1.5</td>
                        <td>Actividades de Riesgo, listado trabajadores</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1.2.1</td>
                        <td>Programa capacitacion anual</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>



                    <tr>
                        <td>1.2.2</td>
                        <td>Induccion y reinduccion</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1.2.3</td>
                        <td>Responsable del SG-SST con curso de 50 Horas.</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                            </div>
                        </td>
                        <td>

                        <button onclick="descargarDocumento()" class="btn btn-primary">Descargar Documento</button>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <!--Fin de Item-->

                </tbody>

            </table>





        </div>


        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../estilos/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>

    </html>

<?php
}
?>