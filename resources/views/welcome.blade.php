
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

    <section class="jumbotron text-center">
        <div class="container container-text">
            <img src="{{asset('img/isotipo-aldea.png')}}" class="mb-3" width="40">
            <p class="lead text-muted text-principal">La Aldea fue creada pensando en lo que tú
                necesitas para hacer de tu evento una
                <span>experiencia inigualable.</span>
            </p>
        </div>
    </section>

    <section id="contacto-home">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/elementos/elemento1.svg')}}" class="img-hoja img1">
                <div class="content-contacto-left">
                    <div class="content-textos center-middle-table pt-5">
                        <p class="texto1">¿Quieres más informes ó deseas alguna cotización? </p>
                        <p class="texto2">Escríbenos.</p>
                    </div>
                </div>
                <img src="{{asset('img/elementos/elemento2.svg')}}" class="img-hoja img2">
            </div>
            <div class="col-md-6">
                <form action="https://laaldea.kiper.io/api/v1/forms/register?token=r5qDTeMwN112O7q12xOx2uJ6r77D9l51" method ="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="origen" placeholder="Ciudad de origen">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <!-- <input type="text" class="form-control" id="telefono" placeholder="Teléfono"> -->
                            <select class="form-control">
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
                        <div class="form-group col-md-6">
                            <input type="date" class="form-control" id="start" name="trip-start" value="">
                            <!-- min="2018-01-01" max="2018-12-31" -->
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="mensaje" rows="6" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection