<?php
session_start();
$nit = $_SESSION['nit'];


if (!isset($nit)) {
    header("location:../../../login.html");
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Politica SG-SST</title>
        <link href="../../../../estilos/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


        <style>
            .estandar-tittulo {
                text-align: left;
                padding-left: 100px;
            }

            hr {
                background-color: black;
                border: 2px solid black;
                margin-left: 8%;
                margin-right: 9%;
            }


            .formu {

                margin-left: 20%;
                margin-right: 25%;
                margin-top: 5%;

            }

            .position-relative {


                left: 200px;

            }

            .boton1 {

                position: relative;
                right: 150px;

            }

            .boton2 {

                position: relative;
                left: 130px;

            }

            .eticVol {

                margin-left: 90px;
                position: relative;
                bottom: 15px;

            }


            .menuDesple {

                margin-left: 15px;
                margin-bottom: 10px;

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
                    transform: translateY(0rem);
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
                                <a href="../../crearDocumento.php" class="nav-link align-middle px-0 link-danger">
                                    <i class="fs-4 bi-arrow-left-short"></i> <span class="ms-1 d-none d-sm-inline">Volver</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle link-danger">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Estandares</span> </a>
                                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="../../estandar-1items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>1</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-2items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>2</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-3items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>3</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-4items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>4</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-5items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>5</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-6items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>6</a>
                                    </li>
                                    <li>
                                        <a href="../../estandar-7items.php" class="nav-link px-0 link-danger"> <span class="d-none d-sm-inline">Estandar</span>7</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../../../../img/logo2.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">User</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../../../../modelo/cerrar_sesion.php">Sign out</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!-- final NAVBAR VERTICAL-->


                <div class="col py-3" id="content">
            <h3 class="display-4 text-dark fw-bold estandar-tittulo">Responsable del SG-SST</h3>
            <hr>


            <div class="formu">

             <!-- comienzo formulario  responsable-->
                   <form>

                        <div class="mb-3">
                            <label for="" class="form-label">Nombre del Responsable :</label>
                            <input type="text" class="form-control" id="">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cedula :</label>
                            <input type="text" class="form-control" id="">
                        </div>

                        
                         <!-- comienzo lista plegable paises-->
                        <div class="mb-3">
                            <label for="" class="form-label">Lugar de Expedicion:</label>
                            <select class="form-select" aria-label="Disabled select example">

                                    <option value="" selected>Seleccionar Pais</option>
                                    <option value="AF">Afganist??n</option>
                                    <option value="AL">Albania</option>
                                    <option value="DE">Alemania</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Ant??rtida</option>
                                    <option value="AG">Antigua y Barbuda</option>
                                    <option value="AN">Antillas Holandesas</option>
                                    <option value="SA">Arabia Saud??</option>
                                    <option value="DZ">Argelia</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaiy??n</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrein</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BE">B??lgica</option>
                                    <option value="BZ">Belice</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermudas</option>
                                    <option value="BY">Bielorrusia</option>
                                    <option value="MM">Birmania</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia y Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brasil</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="BT">But??n</option>
                                    <option value="CV">Cabo Verde</option>
                                    <option value="KH">Camboya</option>
                                    <option value="CM">Camer??n</option>
                                    <option value="CA">Canad??</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CY">Chipre</option>
                                    <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comores</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, Rep??blica Democr??tica del</option>
                                    <option value="KR">Corea</option>
                                    <option value="KP">Corea del Norte</option>
                                    <option value="CI">Costa de Marf??l</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croacia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DK">Dinamarca</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egipto</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Emiratos ??rabes Unidos</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="SI">Eslovenia</option>
                                    <option value="ES">Espa??a</option>
                                    <option value="US">Estados Unidos</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Etiop??a</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="PH">Filipinas</option>
                                    <option value="FI">Finlandia</option>
                                    <option value="FR">Francia</option>
                                    <option value="GA">Gab??n</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GD">Granada</option>
                                    <option value="GR">Grecia</option>
                                    <option value="GL">Groenlandia</option>
                                    <option value="GP">Guadalupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GY">Guayana</option>
                                    <option value="GF">Guayana Francesa</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GQ">Guinea Ecuatorial</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="HT">Hait??</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HU">Hungr??a</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IQ">Irak</option>
                                    <option value="IR">Ir??n</option>
                                    <option value="IE">Irlanda</option>
                                    <option value="BV">Isla Bouvet</option>
                                    <option value="CX">Isla de Christmas</option>
                                    <option value="IS">Islandia</option>
                                    <option value="KY">Islas Caim??n</option>
                                    <option value="CK">Islas Cook</option>
                                    <option value="CC">Islas de Cocos o Keeling</option>
                                    <option value="FO">Islas Faroe</option>
                                    <option value="HM">Islas Heard y McDonald</option>
                                    <option value="FK">Islas Malvinas</option>
                                    <option value="MP">Islas Marianas del Norte</option>
                                    <option value="MH">Islas Marshall</option>
                                    <option value="UM">Islas menores de Estados Unidos</option>
                                    <option value="PW">Islas Palau</option>
                                    <option value="SB">Islas Salom??n</option>
                                    <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                    <option value="TK">Islas Tokelau</option>
                                    <option value="TC">Islas Turks y Caicos</option>
                                    <option value="VI">Islas V??rgenes (EEUU)</option>
                                    <option value="VG">Islas V??rgenes (Reino Unido)</option>
                                    <option value="WF">Islas Wallis y Futuna</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italia</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Jap??n</option>
                                    <option value="JO">Jordania</option>
                                    <option value="KZ">Kazajist??n</option>
                                    <option value="KE">Kenia</option>
                                    <option value="KG">Kirguizist??n</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="LA">Laos</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LV">Letonia</option>
                                    <option value="LB">L??bano</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libia</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituania</option>
                                    <option value="LU">Luxemburgo</option>
                                    <option value="MK">Macedonia, Ex-Rep??blica Yugoslava de</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malasia</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldivas</option>
                                    <option value="ML">Mal??</option>
                                    <option value="MT">Malta</option>
                                    <option value="MA">Marruecos</option>
                                    <option value="MQ">Martinica</option>
                                    <option value="MU">Mauricio</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">M??xico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldavia</option>
                                    <option value="MC">M??naco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">N??ger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk</option>
                                    <option value="NO">Noruega</option>
                                    <option value="NC">Nueva Caledonia</option>
                                    <option value="NZ">Nueva Zelanda</option>
                                    <option value="OM">Om??n</option>
                                    <option value="NL">Pa??ses Bajos</option>
                                    <option value="PA">Panam??</option>
                                    <option value="PG">Pap??a Nueva Guinea</option>
                                    <option value="PK">Paquist??n</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Per??</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PF">Polinesia Francesa</option>
                                    <option value="PL">Polonia</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="UK">Reino Unido</option>
                                    <option value="CF">Rep??blica Centroafricana</option>
                                    <option value="CZ">Rep??blica Checa</option>
                                    <option value="ZA">Rep??blica de Sud??frica</option>
                                    <option value="DO">Rep??blica Dominicana</option>
                                    <option value="SK">Rep??blica Eslovaca</option>
                                    <option value="RE">Reuni??n</option>
                                    <option value="RW">Ruanda</option>
                                    <option value="RO">Rumania</option>
                                    <option value="RU">Rusia</option>
                                    <option value="EH">Sahara Occidental</option>
                                    <option value="KN">Saint Kitts y Nevis</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa Americana</option>
                                    <option value="SM">San Marino</option>
                                    <option value="VC">San Vicente y Granadinas</option>
                                    <option value="SH">Santa Helena</option>
                                    <option value="LC">Santa Luc??a</option>
                                    <option value="ST">Santo Tom?? y Pr??ncipe</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leona</option>
                                    <option value="SG">Singapur</option>
                                    <option value="SY">Siria</option>
                                    <option value="SO">Somalia</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="PM">St Pierre y Miquelon</option>
                                    <option value="SZ">Suazilandia</option>
                                    <option value="SD">Sud??n</option>
                                    <option value="SE">Suecia</option>
                                    <option value="CH">Suiza</option>
                                    <option value="SR">Surinam</option>
                                    <option value="TH">Tailandia</option>
                                    <option value="TW">Taiw??n</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TJ">Tayikist??n</option>
                                    <option value="TF">Territorios franceses del Sur</option>
                                    <option value="TP">Timor Oriental</option>
                                    <option value="TG">Togo</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad y Tobago</option>
                                    <option value="TN">T??nez</option>
                                    <option value="TM">Turkmenist??n</option>
                                    <option value="TR">Turqu??a</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ucrania</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekist??n</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="YE">Yemen</option>
                                    <option value="YU">Yugoslavia</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabue</option>

                                                    </select>
                        </div>
                         <!-- final lista plegable paises-->


                        <div class="mb-3">
                            <label for="" class="form-label">Cargo :</label>
                            <input type="text" class="form-control" id="">
                        </div>



                        <div class="position-relative">

                        
                        <button  type="submit" class="btn btn-warning boton1">Crear</button>
                        
                        
                        <a href="../../estandar-1items.php" class="btn btn-primary boton2">Cancelar</a>
                        

                        </div>
                        

                        </form>
                         <!-- final formulario documento responsable-->
    


            <div/>


        </div>









    </body>

    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../../../estilos/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>

<?php
}
?>