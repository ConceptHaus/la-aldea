
@extends('layouts.app')
@section('content')
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset('video/video-aldea.mp4')}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="video-border"></div>
        </div>
    </header>

    <section class="jumbotron descripcion-home text-center">
        <div class="container container-text py-4">
            <img src="{{asset('img/aldea.gif')}}" class="mb-3" width="30">
            <p class="lead text-muted text-principal" 
                data-0="position: relative; opacity: 0.2; top: 20px;" 
                data-300="position: relative; opacity: 1; top: 0px;">
                La Aldea fue creada pensando en lo que tú necesitas para hacer de tu evento una
                <span>experiencia inigualable.</span>
            </p>
        </div>
    </section>

    <section id="contacto-home">
        <div class="row">
            <div class="col-md-6 overflow-hidden">
                <img src="{{asset('img/elementos/elemento1.svg')}}" class="img-hoja img1" data-0="left: -20px; top: -150px;" data-500="left: 50px; top: -5px;">
                <div class="content-contacto-left">
                    <div class="content-textos center-middle-table" data-300="opacity: 0;" data-700="opacity: 1;">
                        <p class="texto1">¿Quieres más informes ó deseas alguna cotización? </p>
                        <p class="texto2">Escríbenos.</p>
                    </div>
                </div>
                <img src="{{asset('img/elementos/elemento2.svg')}}" class="img-hoja img2" data-0="right: -30px; bottom: -150px;" data-700="right: 50px; bottom: -5px;">
            </div>
            <div class="col-md-6">
                <form id="contactoForm" name="contactoForm" data-300="opacity: 0;" data-700="opacity: 1;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nombre" name="nombre" ng-model="contacto.nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="apellido" name="apellido" ng-model="contacto.apellido" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="correo" name="correo" ng-model="contacto.correo" placeholder="Correo Electrónico">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="telefono" name="telefono" ng-model="contacto.telefono"  placeholder="Teléfono">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" id="empresa" name="empresa" ng-model="contacto.empresa" placeholder="Empresa">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="6" ng-model="contacto.mensaje" placeholder="Mensaje"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-enviar" ng-click="saveDataContacto(contacto, contactoForm)" ng-disabled="!(contacto.nombre) || !(contacto.apellido) || !(contacto.correo) || !(contacto.telefono) || !(contacto.empresa) || !(contacto.mensaje)">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection