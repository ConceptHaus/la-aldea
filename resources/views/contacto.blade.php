@extends('layouts.app')
@section('content')

    <section class="seccion-header header-contacto border-white">
        <div class="container h-100">
            <div class="container-border text-center">
                <h5 class="color-white" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-duration="1000" data-aos-delay="1000">CONTACTO</h5>
                <p>¿Te interesa? <br> Ponte en contacto con <span class="span-bold">nosotros</span>.</p>
            </div>
        </div>
    </section>

    <section class="seccion-contacto jumbotron text-center">

        <form id="contactoForm" name="contactoForm" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="800" data-aos-delay="1500">
            <div class="form-row">
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="nombre" name="nombre" ng-model="contacto.nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="apellido" name="apellido" ng-model="contacto.apellido" placeholder="Apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="email" class="form-control form-control-input" id="correo" name="correo" ng-model="contacto.correo" placeholder="Correo Electrónico">
                </div>
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="telefono" name="telefono" ng-model="contacto.telefono"  placeholder="Teléfono">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="empresa" name="empresa" ng-model="contacto.empresa" placeholder="Empresa">
                </div>
            </div>

            <div class="form-group py-2 px-4">
                <textarea class="form-control" id="mensaje" name="mensaje" rows="6" ng-model="contacto.mensaje" placeholder="Mensaje"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-enviar" ng-click="saveDataContacto(contacto, contactoForm)" ng-disabled="!(contacto.nombre) || !(contacto.apellido) || !(contacto.correo) || !(contacto.telefono) || !(contacto.empresa) || !(contacto.mensaje)">Enviar</button>
            </div>
        </form>

    </section>

    <section class="seccion-mapa border-white">
        <iframe src="https://snazzymaps.com/embed/144411" width="100%" height="450px" style="border:none;"></iframe>
    </section>

    <section class="seccion-info-contacto jumbotron">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="container-info container-info-left float-right" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{asset('img/iconos/ubication.gif')}}" class="mb-4" width="60"/>
                    <h6>UBICACIÓN </h6>
                    <p class="address"><a href="https://www.google.com/maps/@20.492564,-100.968681,18z" target="_blank">Camino a Corralejo s/n Entre la deportiva y Cbtis. Cortazar, Gto.</a></p>
                </div>
            </div>
            {{-- <div class="col-sm-6 col-md-6">
                <div class="container-info container-info-right float-left" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{asset('img/iconos/phone.gif')}}" class="mb-4" width="60"/>
                    <h6>TELÉFONOS</h6>
                    <p class="mb-0"><a href="tel:+5539964541">(044)55-39-96-45-41</a></p>
                    <p class=""><a href="tel:+5533995110">(044)55-33-99-51-10</a></p>    
                </div>
            </div> --}}
        </div>
    </section>
@endsection
