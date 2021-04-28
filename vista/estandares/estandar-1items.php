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
            .titulo-items {
                padding-bottom: 4px;
                text-align: center;

            }

            .btns-cre-su {
                padding-bottom: 4px;
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

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Principal</p>

        <ul class="nav flex-column bg-dark mb-0">
            <li class="nav-item">
                <a href="../dashboard.php" class="nav-link text-light font-italic">
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
        <div class="page-content p-5  p-3 mb-5 bg-body rounded" id="content">
            <h3 class="display-3 text-dark fw-bold titulo-items">Items</h3>
            <h4 class="display-5 text-dark fw-bold">Documentos</h4>
            <div class="btns-cre-su">
                <tr>

                    <td>

                        <a href="crearDocumento.php" class="btn btn-warning">Crear Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                        <a href="crearDocumento.php" class="btn btn-warning">Crear Matriz</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
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

                            <a href="#" class="btn btn-primary">Descargar Documento</a>
                            |
                            <a href="#" class="btn btn-primary">Archivos Subidos</a>
                        </td>
                    </tr>

                    <!--Fin de Item-->

                </tbody>

            </table>





        </div>


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="../../js/jquery-3.6.0.min.js"></script>
        <script src="../../estilos/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>

<?php
}
?>