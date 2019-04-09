@extends('layouts.app')
@section('content')

    <section class="seccion-header header-contacto">
        <div class="container h-100">
            <div class="container-border text-center">
                <h5 class="color-white">CONTACTO</h5>
                <p>¿Te interesa? <br> Ponte en contacto con nosotros.</p>
            </div>
        </div>
    </section>

    <section class="seccion-contacto jumbotron text-center">
        <form action="https://laaldea.kiper.io/api/v1/forms/register?token=r5qDTeMwN112O7q12xOx2uJ6r77D9l51" method ="POST">
            <div class="form-row">
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="email" class="form-control form-control-input" id="correo" placeholder="Correo Electrónico">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="text" class="form-control form-control-input" id="origen" placeholder="Ciudad de origen">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6 py-2 px-4">
                    <select class="form-control form-control-input">
                        <option value="">Tipo de Evento</option>
                        <option value="Boda">Boda</option>
                        <option value="XV años">XV años</option>
                        <option value="Bautizos">Bautizos</option>
                        <option value="Graduación">Graduación</option>
                        <option value="Evento corporativo">Evento corporativo</option>
                        <option value="Exposición">Exposición</option>
                        <option value="Evento masivo">Evento masivo</option>
                    </select>
                </div>
                <div class="form-group col-md-6 py-2 px-4">
                    <input type="date" class="form-control form-control-input" id="start" name="trip-start" value="">
                    <!-- min="2018-01-01" max="2018-12-31" -->
                </div>
            </div>
            <div class="form-group py-2 px-4">
                <textarea class="form-control" id="mensaje" rows="6" placeholder="Mensaje"></textarea>
            </div>
        </form>
    </section>

    <section class="seccion-mapa">
        <iframe src="https://snazzymaps.com/embed/144411" width="100%" height="500px" style="border:none;"></iframe>
    </section>

    <section class="seccion-info-contacto jumbotron">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="container-info">
                    <img src="{{asset('img/iconos/ubication.svg')}}" class="mb-4" width="60"/>
                    <h5>UBICACIÓN</h5>
                    <p>Camino a Corralejo s/n Entre la deportiva y Cbtis. Cortazar, Gto.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="container-info">
                    <img src="{{asset('img/iconos/phone.svg')}}" class="mb-4" width="60"/>
                    <h5>TELÉFONOS</h5>
                    <p class="mb-0"><a href="tel:+5539964541">(044)55-39-96-45-41</a></p>
                    <p class=""><a href="tel:+5533995110">(044)55-33-99-51-10</a></p>    
                </div>
            </div>
        </div>
    </section>
@endsection
