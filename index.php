<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVALUACION 2 FRONTEND JREYES</title>

    <!--Dependencia Bootstrap 5.3.0-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <!--Navbar superior-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <!--Bloque izquierdo-->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Falabella</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Viajes Falabella</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Seguros Falabella</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Sodimac</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Tottus</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Linio</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Fpay</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Ayuda y Contacto</a>
                    </li>
                    <li class="nav-item" t>
                        <a class="nav-link active" aria-current="page" href="#">Oficinas y Cajeros</a>
                    </li>
                </ul>
                <!--Bloque derecho-->
                <span class="navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" t>
                            <a class="nav-link active" aria-current="page" href="#">Ayuda y Contacto</a>
                        </li>
                        <li class="nav-item" t>
                            <a class="nav-link active" aria-current="page" href="#">Oficinas y Cajeros</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>

    <!--Login-->
    <nav class="navbar navbar-light bg-light px-2 py-4 bg-white">
        <div class="container-fluid">
            <img src="img/logo.686cc6de.svg">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="RUT" aria-label="Search">
                <input class="form-control me-2" type="search" placeholder="Clave Internet" aria-label="Search">
                <button type="button" class="btn btn-success">></button>
            </form>
        </div>
    </nav>

    <!--Navbar inferior-->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CUENTAS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">TARJETAS CMR</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">AVANCE Y SÚPER AVANCE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CRÉDITOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">INVERSIONES</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">SEGUROS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">OPORTUNIDADES ÚNICAS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">CMR PUNTOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">SOSTENIBILIDAD</a>
        </li>
    </ul>

    <!--Dile hola a tu Tarjeta de Crédito CMR Mastercard-->
    <div class="row mx-4 mt-4 pb-4">
        <div class="col-sm-6">
            <div class="card border-0">
                <div class="card-body">
                    <h1 class="card-title">Dile hola a tu Tarjeta de Crédito CMR Mastercard</h1>
                    <h4 class="card-text my-4">¡Obtenla ahora 100% online y únete al Banco de los Gennials!</h4>
                    <button class="btn btn-success rounded-pill py-2 my-4 px-4">¡Pedir Tarjeta CMR!</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card border-0">
                <div class="card-body">
                    <img class="card-img" src="img/cmr_background.png">
                </div>
            </div>
        </div>
    </div>

    <!--Conoce nuestras tarjetas de crédito CMR Mastercard-->
    <div class="container text-center">
        <h2 class="mt-4">Conoce nuestras tarjetas de crédito CMR Mastercard y todo lo que tenemos para ti
        </h2>
        <h4 class="text-secondary">Una Tarjeta de Crédito como ninguna otra, solo para Gennials 😎</h4>
        <button class="btn btn-secondary rounded-pill py-2 my-4 px-4">¡Compara todas las opciones!</a>
    </div>

    <!--Contenedor de cartas: tres tarjetas CMR-->
    <div class="container">
        <div class="card-group">
            <div class="card border-0">
                <img class="card-img" src="img/cmr_verde.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-4">CMR Mastercard</h4>
                    <p class="card-text">Descuentos, oportunidades únicas, 0% comisión en compras internacionales, tus
                        CMR puntos duran un año y mucho más.</p>
                </div>
            </div>
            <div class="card border-0">
                <img class="card-img-top" src="img/cmr_gris.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-4">CMR Mastercard Premium</h4>
                    <p class="card-text">Seguro de protección de precio, tus CMR puntos duran dos años y mucho más.
                    </p>
                </div>
            </div>
            <div class="card border-0">
                <img class="card-img-top" src="img/cmr_negra.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title mb-4">CMR Mastercard Elite</h4>
                    <p class="card-text">Ingreso a salones VIP aeropuertos en Chile, tus CMR puntos duran dos años, y
                        mucho más.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Una tarjeta fácil de usar-->
    <div class="container text-center">
        <h2 class="mt-4">Una tarjeta fácil de usar</h2>
        <h4 class="text-secondary">Una Tarjeta de Crédito como ninguna otra, solo para Gennials 😎</h4>
        <button class="btn btn-secondary rounded-pill py-2 my-4 px-4">¡Compara todas las opciones!</a>
    </div>

    <!--Descuentos en más de 100 comercios asociados-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title">Descuentos en más de 100 comercios asociados</h2>
                        <p class="card-text my-4">Podrás encontrar descuentos en lugares como McDonald's, Farmacias
                            ahumada, Dunkin’, Cinemark y muchos muchos más.</p>
                        <button class="btn btn-secondary rounded-pill my-4 px-4">¡Quiero la mía!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo01.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cientos de Oportunidades Únicas-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo02.png">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title">Cientos de Oportunidades Únicas</h2>
                        <p class="card-text my-4">Aprovecha todos los descuentos exclusivos con tu Tarjeta CMR en
                            Falabella.com</p>
                        <button class="btn btn-success rounded-pill py-2 my-4 px-4">¡Solicítala aquí!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cientos de Oportunidades Únicas-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title">Cientos de Oportunidades Únicas</h2>
                        <p class="card-text my-4">Aprovecha todos los descuentos exclusivos con tu Tarjeta CMR en
                            Falabella.com</p>
                        <button class="btn btn-secondary rounded-pill my-4 px-4">¡Ábrela ahora!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo03.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--¡Pide tu CMR a la puerta de tu Casa!-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo04.png">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title">¡Pide tu CMR a la puerta de tu Casa!</h2>
                        <p class="card-text my-4">Hazlo en 5 minutos desde la App Banco Falabella</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Haz todo desde tu App-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <h2 class="card-title">Haz todo desde tu App</h2>
                        <p class="card-text my-4">¡Los Gennials la tenemos fácil! Paga tu CMR, ve tu estado de cuenta,
                            revisa tus movimientos, ver lo datos de tu tarjeta y mucho más.</p>
                        <button class="btn btn-secondary rounded-pill my-4 px-4">¡La quiero ya!</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo05.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Promo 06-->
    <div class="container">
        <div class="row mx-4 mt-4 pb-4">
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <img class="img-fluid" src="img/promo06.png">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 my-auto">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="card-text my-4">¡Cambia tu CMR Visa a la nueva CMR Mastercad o renueva tu tarjeta que
                            esté a punto de vencer!</p>
                        <button class="btn btn-success rounded-pill py-2 my-4 px-4">Te lo explicamos en simple</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Pide tu tarjeta de crédito CMR de Banco Falabella y empieza a disfrutar hoy-->
    <div style="background-color:#F4F7F8">
        <div class="container text-center my-4 py-4" style="background-color:#F4F7F8">
            <h3 class="mt-4">Pide tu tarjeta de crédito <span style="color: green; text-decoration: none;">CMR de Banco Falabella</span> y empieza a disfrutar hoy</h3>
            <button class="btn btn-success rounded-pill py-2 my-4 px-4">¡Quiero mi CMR!</a>
        </div>
    </div>

    <!--¿Aún no te convencemos Sección Superior?-->
    <div class="container text-center py-4">
        <h3 class="mt-4">¿Aún no te convencemos?</h3>
        <h5 class="card-text text-secondary">Más beneficios de tu CMR de Banco Falabella 😎</h5>
    </div>

    <!--¿Aún no te convencemos Sección Inferior-->
    <div class="container my-4">
        <div class="card-group">
            <div class="card border-0 my-auto rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo01.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Usa tu CMR MasterCard en todas partes: en Chile, en el extranjero, en compras online y en Apps</p>
                </div>
            </div>
            <div class="card border-0 my-auto mx-4 rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo02.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Costo $0 en comisión en todas tus compras internacionales</p>
                </div>
            </div>
            <div class="card border-0 my-auto rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo03.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Puedes desembolsar un avance en efectivo directamente desde tu App Banco Falabella</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="container mt-4">
        <div class="card-group">
            <div class="card border-0 my-auto rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo04.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Realiza tus compras en cuotas con tu CMR</p>
                </div>
            </div>
            <div class="card border-0 my-auto mx-4 rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo05.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Todas tus compras acumulan CMR Puntos</p>
                </div>
            </div>
            <div class="card border-0 my-auto rounded" style="background-color:#F4F7F8">
                <div class="container text-center" style="height:150px;">
                    <img class="img-fluid" src="img/logo06.png">
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Puedes bloquear o desbloquear tu CMR desde tu APP Banco Falabella.</p>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bloque Superior-->
    <footer class="bg-dark mt-4 pt-4">
        <div class="container bg-dark text-light">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <ul class="adress" style="list-style-type: none;">
                        <h6 class="text-uppercase fw-bold mb-4 text-secondary">NUESTRO BANCO</h6>
                        <li>Quiénes somos</li>
                        <li>Directorio</li>
                        <li>Administración</li>
                        <li>Información institucional</li>
                        <li>Documentos legales</li>
                        <li>Tasas y Tarifas</li>
                        <li>Trabaja con nosotros</li>
                        <li>FATCA</li>
                        <li>Licitación Seguro Hipotecario</li>
                        <li>Canal de integridad</li>
                        <li>Portabilidad</li>
                        <li>Proveedores Portabilidad Financiera
                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <ul class="contact" style="list-style-type: none;">
                        <h6 class="text-uppercase fw-bold mb-4 text-secondary">SERVICIO AL CLIENTE</h6>
                        <li>Preguntas Frecuentes</li>
                        <li>Tutoriales Digitales</li>
                        <li>Oficinas y Cajeros</li>
                        <li>Protocolo COVID-19</li>
                        <li>Portal Empresas</li>
                        <li>Blog Gennials</li>
                    </ul>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <ul class="social">
                        <button class="btn btn-secondary rounded-pill py-2 my-4 px-4">BLOQUEAR MI TARJETA</a>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer Bloque Inferior-->
    <footer class="bg-dark pt-4 border-top border-secondary">
        <div class="container bg-dark text-light">
            <p class="text-center">
                Infórmese sobre las entidades autorizadas para emitir Tarjetas de Pago en el país, quienes se encuentran
                inscritas en los Registros de Emisores de Tarjetas que lleva la CMF, en
                <a href="https://www.cmfchile.cl/" style="color: green; text-decoration: none;">www.cmfchile.cl</a>.
            </p>
            <p class="text-center">
                Infórmese sobre la garantía estatal de los depósitos en su banco o en cmfchile.cl. © 2023 Banco
                Falabella. Todos los derechos reservados. Moneda 970, piso 7, Santiago.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>