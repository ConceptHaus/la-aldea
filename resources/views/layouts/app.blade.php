<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Aldea</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon-la-aldea.png') }}"/>

    <!-- CSS  -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
</head>

<body ng-app="app" id="skrollr-body">
    <div id="mySidenav" class="sidenav text-center">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{url('/')}}" class="mb-5">
            <img src="{{asset('img/logo-aldea.svg')}}" width="170">
        </a>
        <a href="{{url('/')}}">NOSOTROS</a>
        <a href="{{url('/servicios')}}">SERVICIOS</a>
        <a href="{{url('/galeria')}}">GALERÍA</a>
        <a href="{{url('/contacto')}}">CONTACTO</a>
        <img src="{{asset('img/isotipo-aldea.png')}}" class="img-isotipo mb-3" width="40">
    </div>

    <ul class="nav justify-content-center wow slideInDown" data-wow-duration="1.5s">
        <!-- data-wow-delay="5s" -->
        <li class="nav-item nav-item-text">
            @if(Request::path() === '/')
                <a class="nav-link active" href="{{url('/')}}">NOSOTROS</a>
            @else
                <a class="nav-link" href="{{url('/')}}">NOSOTROS</a>
            @endif
        </li>
        <li class="nav-item nav-item-text">
            @if(Request::path() === 'servicios')
                <a class="nav-link active" href="{{url('/servicios')}}">SERVICIOS</a>
            @else
                <a class="nav-link" href="{{url('/servicios')}}">SERVICIOS</a>
            @endif
        </li>
        <li class="nav-item mx-5">
            <a class="nav-link" href="{{url('/')}}">
                <img src="{{asset('img/logo-aldea.svg')}}" width="170">
            </a>
        </li>
        <li class="nav-item nav-item-text">
            @if(Request::path() === 'galeria')
                <a class="nav-link active" href="{{url('/galeria')}}">GALERÍA</a>
            @else
                <a class="nav-link" href="{{url('/galeria')}}">GALERÍA</a>
            @endif
        </li>
        <li class="nav-item nav-item-text">
            @if(Request::path() === 'contacto')
                <a class="nav-link active" href="{{url('/contacto')}}">CONTACTO</a>
            @else
                <a class="nav-link" href="{{url('/contacto')}}">CONTACTO</a>
            @endif
        </li>
        <span class="btn-responsive" onclick="openNav()">&#9776;</span>
    </ul>

    <section ng-controller="ContactoController as contacto">
        @yield('content')
    </section>

    @if(Request::path() === 'gracias')
    <div style="position: fixed; bottom: 0; width: 100%;">
    @endif
        <div class="divider"></div>
        <footer class="px-3">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="center-middle-table">
                        <a><img src="{{asset('img/iconos/facebook.svg')}}" class="mr-2" width="18"></a>
                        <a><img src="{{asset('img/iconos/instagram.svg')}}" width="18"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 text-center">
                    <div class="center-middle-table color-gray">
                        LaAldea©2019
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 text-right copyright">
                    <div class="center-middle-table">
                        <a href="https://concepthaus.mx" target="_blank"><img src="{{asset('img/logo-concepthaus.svg')}}"
                                width="120"></a>
                    </div>
                </div>
            </div>
        </footer>
    @if(Request::path() === 'gracias')
        </div>
    @endif

    <!-- JS -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>

    <!-- Angular -->
    <script src="https://code.angularjs.org/1.4.0/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-resource/1.3.15/angular-resource.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-messages.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-route.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-cookies.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/danialfarid-angular-file-upload/12.2.13/ng-file-upload.min.js"></script>

    <script src="{{asset('js/angular-app/angular-app.js')}}"></script>
    <script src="{{asset('js/angular-app/controllers/ContactoController.js')}}"></script>
    <script src="{{asset('js/angular-app/services/ContactoService.js')}}"></script>

    <!-- Wow - Animaciones -->
    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Skrollr - Animaciones -->
    <script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
    <script type="text/javascript">
	    var s = skrollr.init();
	</script>

    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "80%";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>