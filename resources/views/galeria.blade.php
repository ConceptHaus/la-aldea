@extends('layouts.app')
@section('content')

<section class="seccion-header header-galeria">
    <div class="container h-100">
        <div class="container-border text-center">
            <h5 class="color-white">GALERÍA</h5>
            <p><img src="{{asset('img/isotipo-aldea.png')}}" class="mb-3" width="40"></p>
        </div>
        
    </div>
</section>

<section class="mt-5 pt-5">
    <div class="container-text pl-5">
        <p class="lead text-muted text-principal text-left">
            Es el único lugar donde la naturaleza marca el diseño de cada rincón, por eso
            nos especializamos en crear escenarios para que ningún evento sea igual,
            convirtiéndolo en único e irrepetible.
        </p>
    </div>
</section>

<section class="container-galeria mb-sm-4 mb-md-5">
    <div class="row">
        <div class="col-md-5 p-0 container-galeria-text">
            <div>
                <p class="text-experiencia text-principal text-left p-3 pl-4">Vive una experiencia <br> <span>inigualable.</span></p>
            </div>
        </div>

        <div class="col-md-7 p-0">
            <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                <div class='carousel-inner'>
                    <div class='carousel-item active'>
                        <img src="{{asset('img/galeria/1.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/2.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/3.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/4.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/5.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/6.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/7.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/8.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/9.jpg')}}" class="img-fluid" />
                    </div>
                    <div class='carousel-item'>
                        <img src="{{asset('img/galeria/10.jpg')}}" class="img-fluid" />
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
                    <li data-target='#carousel-custom' data-slide-to='0' class='active'><img
                            src="{{asset('img/galeria/1.jpg')}}" alt='' width="53"/></li>
                    <li data-target='#carousel-custom' data-slide-to='1'><img src="{{asset('img/galeria/2.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='2'><img src="{{asset('img/galeria/3.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='3'><img src="{{asset('img/galeria/4.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='4'><img src="{{asset('img/galeria/5.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='5'><img src="{{asset('img/galeria/6.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='6'><img src="{{asset('img/galeria/7.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='7'><img src="{{asset('img/galeria/8.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='8'><img src="{{asset('img/galeria/9.jpg')}}"
                        alt='' class="img-fluid" /></li>
                    <li data-target='#carousel-custom' data-slide-to='9'><img src="{{asset('img/galeria/10.jpg')}}"
                        alt='' class="img-fluid" /></li>
                </ol>
            </div>
        </div>

    </div>
</section>





@endsection
