@extends('layouts.app')
@section('content')
<section class="seccion-header header-servicios border-white">
    <div class="container h-100">
        <div class="container-border text-center">
            <h5 class="color-white" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000"
                data-aos-delay="1000">SERVICIOS</h5>
            <p><img src="{{asset('img/aldea.gif')}}" class="mb-3" width="30"></p>
        </div>
    </div>
</section>

<section class="jumbotron text-center">
    <div class="container container-text-servicios container-text-big">
        <p class="lead text-muted text-principal text-justify" data-aos="zoom-in-up" data-aos-easing="linear"
            data-aos-duration="1000" data-aos-delay="1000">
            La Aldea cuenta con jardines en <span>varios tamaños y áreas </span>
            para cualquier tipo de evento, como bodas, XV
            años, bautizos, graduaciones, eventos corporativos,
            exposiciones, eventos masivos, entre otros.</span>
        </p>
    </div>
</section>

<section class="container-pleca border-white text-center py-5">
    <p>Contamos con <span class="span-bold">paquetes todo incluido</span> y proveedores para todo tipo de eventos.</p>
    <img src="{{asset('img/elementos/elemento2.svg')}}" class="img-hoja img2" data-aos="fade-up-left"
        data-aos-easing="ease" data-aos-duration="2000">
</section>

<section class="container-servicios">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 servicio-imagen" data-aos="zoom-in-right" data-aos-easing="ease"
            data-aos-duration="2000"></div>
        <div class="col-sm-12 col-md-12 col-lg-6 servicio-descripcion">
            <div class="row">
                <!-- 01 / 02 Servicios -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <h2>01</h2>
                        <p class="pt-2 pb-3">INSTALACIONES <br> ELÉCTRICAS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="300">
                    <div>
                        <h2>02</h2>
                        <p class="pt-2 pb-3">ESTACIONAMIENTO <br> AMPLIO</p>
                    </div>
                </div>
                <!-- 03 / 04 Servicios -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="600">
                    <div>
                        <h2>03</h2>
                        <p class="pt-2 pb-3">ÁREA DE COCINA <br> Y BANQUETES</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="900">
                    <div>
                        <h2>04</h2>
                        <p class="pt-2 pb-3">ACCESO PARA <br> PROVEEDORES</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1200">
                    <div>
                        <h2>05</h2>
                        <p class="pt-2 pb-3">SESIONES DE <br> FOTOS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1500">
                    <div>
                        <h2>06</h2>
                        <p class="pt-2 pb-3">ESPACIO SEGURO <br> PARA INFLABLES</p>
                    </div>
                </div>
                <!-- 07 / 08 Servicios -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1800">
                    <div>
                        <h2>07</h2>
                        <p class="pt-2 pb-3">PERSONAL PARA <br> LIMPIEZA DE <br> SANITARIOS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="2100">
                    <div>
                        <h2>08</h2>
                        <p class="pt-2 pb-3"> VIGILANCIA <br> DURANTE EL <br> EVENTO</p>
                    </div>
                </div>
                <!-- 00 / 09 Servicios -->
                <div class="col-xs-12 col-sm-6 col-md-6"></div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="2400">
                    <div>
                        <h2>09</h2>
                        <p class="pt-2 pb-3"> HOSPEDAJE PARA <br> HASTA 24 PERSONAS</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- HOSPEDAJE -->
<section class="seccion-header header-hospedaje border-white">
    <div class="container h-100">
        <div class="container-border text-center">
            <h5 class="color-white" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000"
                data-aos-delay="1000">HOSPEDAJE</h5>
            <p><img src="{{asset('img/aldea.gif')}}" class="mb-3" width="30"></p>
        </div>
    </div>
</section>

<section class="jumbotron text-center">
    <div class="container container-text-servicios container-text-big">
        <p class="lead text-muted text-principal text-justify" data-aos="zoom-in-up" data-aos-easing="linear"
            data-aos-duration="1000" data-aos-delay="1000">
             
            <span>¿Necesitas hospedaje?</span> La Aldea te ofrece una cabaña para hacer tu experiencia más acogedora e inolvidable.
        </p>
    </div>
</section>

<section class="container-servicios">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 servicio-descripcion">
            <div class="row">
                <!-- 01 / 02 Hospedaje -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div>
                        <h2>01</h2>
                        <p class="pt-2 pb-3">6 HERMOSAS HABITACIONES<br> CON 2 CAMAS <br> MATRIMONIALES <br> CADA UNA</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="300">
                    <div>
                        <h2>02</h2>
                        <p class="pt-2 pb-3">5 1/2 BAÑOS <br> PARA LA COMODIDAD <br> DE LOS HUÉSPEDES</p>
                    </div>
                </div>
                <!-- 03 / 04 Hospedaje -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="600">
                    <div>
                        <h2>03</h2>
                        <p class="pt-2 pb-3">SERVICIO DE <br> ALIMENTOS</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="900">
                    <div>
                        <h2>04</h2>
                        <p class="pt-2 pb-3">BAR-ROOM <br> SERVICE</p>
                    </div>
                </div>
                <!-- 05 Hospedaje -->
                <div class="col-xs-12 col-sm-6 col-md-6" data-aos="zoom-in" data-aos-duration="1000"
                    data-aos-delay="1200">
                    <div>
                        <h2>05</h2>
                        <p class="pt-2 pb-3">WIFI</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-8">
        <!-- data-aos="zoom-in-right" data-aos-easing="ease" data-aos-duration="2000" -->
            <div id='carousel-custom' class='carousel slide' data-ride='carousel' data-aos="zoom-in-left" data-aos-easing="linear" data-aos-duration="800" >
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <img src="{{asset('img/galeria_hospedaje/01-cabana.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/02_habitacion_doble.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/03_habitacion_master.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/04_habitacion_master.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/05_interior_banio.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/06_interior_banio.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/07_interior_cabana.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/08_terraza.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/09_terraza.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria_hospedaje/10_estancia.jpg')}}" class="img-fluid" />
                    </div>

                    <!-- Controls -->
                    <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                        <span class='glyphicon glyphicon-chevron-left'></span>
                    </a>
                    <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                        <span class='glyphicon glyphicon-chevron-right'></span>
                    </a>
                </div>

                <!-- Indicators -->
                <ol class='carousel-indicators'>
                    <li data-target='#carousel-custom' data-slide-to='0' class='active'>
                        <img src="{{asset('img/galeria_hospedaje/01-cabana.jpg')}}" alt='' class="img-fluid" />
                    </li>
                    <li data-target='#carousel-custom' data-slide-to='1'><img
                            src="{{asset('img/galeria_hospedaje/02_habitacion_doble.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='2'><img
                            src="{{asset('img/galeria_hospedaje/03_habitacion_master.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='3'><img
                            src="{{asset('img/galeria_hospedaje/04_habitacion_master.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='4'><img
                            src="{{asset('img/galeria_hospedaje/05_interior_banio.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='5'><img
                            src="{{asset('img/galeria_hospedaje/06_interior_banio.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='6'><img
                            src="{{asset('img/galeria_hospedaje/07_interior_cabana.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='7'><img
                            src="{{asset('img/galeria_hospedaje/08_terraza.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='8'><img
                            src="{{asset('img/galeria_hospedaje/09_terraza.jpg')}}" alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='9'><img
                            src="{{asset('img/galeria_hospedaje/10_estancia.jpg')}}" alt='' class="img-fluid" /></li>
                </ol>
            </div>
        </div>

    </div>

    </div>
</section>
@endsection
