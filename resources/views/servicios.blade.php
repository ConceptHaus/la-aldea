
@extends('layouts.app')
@section('content')
    <section class="seccion-header header-servicios border-white">
        <div class="container h-100">
            <div class="container-border text-center">
                <h5 class="color-white">SERVICIOS</h5>
                <p><img src="{{asset('img/aldea.gif')}}" class="mb-3" width="30"></p>
            </div>
            
        </div>
    </section>

    <section class="jumbotron text-center">
        <div class="container container-text-big">
            <p class="lead text-muted text-principal text-justify"
                data-0="position: relative; opacity: 0.2; top: 20px;" 
                data-300="position: relative; opacity: 1; top: 0px;">
                La Aldea cuenta con jardines en <span>varios tamaños y áreas </span>
                para cualquier tipo de evento, como bodas, XV 
                años, bautizos, graduaciones, eventos corporativos, 
                exposiciones, eventos masivos, entre otros.</span>
            </p>
        </div>
    </section>

    <section class="container-pleca border-white text-center py-5">
        <p>Contamos con <span class="span-bold">paquetes todo incluido</span> y proveedores para todo tipo de eventos.</p>
        <img src="{{asset('img/elementos/elemento2.svg')}}" class="img-hoja img2" data-0="right: -100px; bottom: -155px;" data-500="right: 50px; bottom: -25px;">
    </section>

    <section class="container-servicios">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 servicio-imagen" data-300="opacity: 0;" data-700="opacity: 1;">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 servicio-descripcion">
                <div class="row">
                    <!-- 01 / 02 Servicios -->
                    <div class="col-xs-12 col-sm-6 col-md-6" data-300="opacity: 0;" data-350="opacity: 1;">
                        <div>
                            <h2>01</h2>
                            <p class="pt-2 pb-3">INSTALACIONES <br> ELÉCTRICAS</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6" data-350="opacity: 0;" data-400="opacity: 1;">
                        <div>
                            <h2>02</h2>
                            <p class="pt-2 pb-3">ESTACIONAMIENTO <br> AMPLIO</p>
                        </div>
                    </div>
                    <!-- 03 / 04 Servicios -->
                    <div class="col-xs-12 col-sm-6 col-md-6" data-400="opacity: 0;" data-450="opacity: 1;">
                        <div>
                            <h2>03</h2>
                            <p class="pt-2 pb-3">ÁREA DE COCINA <br> Y BANQUETES</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6" data-450="opacity: 0;" data-500="opacity: 1;">
                        <div>
                            <h2>04</h2>
                            <p class="pt-2 pb-3">ACCESO PARA <br> PROVEEDORES</p>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-6 col-md-6" data-550="opacity: 0;" data-600="opacity: 1;">
                        <div>
                            <h2>05</h2>
                            <p class="pt-2 pb-3">SESIONES DE <br> FOTOS</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6" data-600="opacity: 0;" data-650="opacity: 1;">
                        <div>
                            <h2>06</h2>
                            <p class="pt-2 pb-3">ESPACIO SEGURO <br> PARA INFLABLES</p>
                        </div>
                    </div>
                    <!-- 07 / 08 Servicios -->
                    <div class="col-xs-12 col-sm-6 col-md-6" data-650="opacity: 0;" data-700="opacity: 1;">
                        <div>
                            <h2>07</h2>
                            <p class="pt-2 pb-3">PERSONAL PARA <br> LIMPIEZA DE <br> SANITARIOS</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6" data-700="opacity: 0;" data-750="opacity: 1;">
                        <div>
                            <h2>08</h2>
                            <p class="pt-2 pb-3"> VIGILANCIA <br> DURANTE EL <br> EVENTO</p>
                        </div>
                    </div>
                    <!-- 00 / 09 Servicios -->
                    <div class="col-xs-12 col-sm-6 col-md-6"></div>
                    <div class="col-xs-12 col-sm-6 col-md-6" data-750="opacity: 0;" data-800="opacity: 1;">
                        <div>
                            <h2>09</h2>
                            <p class="pt-2 pb-3"> HOSPEDAJE PARA <br> HASTA 24 PERSONAS</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- <section class="jumbotron text-center">
        <div class="container container-text">
            
            <p class="lead text-muted text-home">La Aldea fue creada pensando en lo que tú
                necesitas para hacer de tu evento una
                <span>experiencia inigualable.</span>
            </p>
        </div>
    </section> -->
@endsection