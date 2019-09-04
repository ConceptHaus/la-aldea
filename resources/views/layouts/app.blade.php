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
    <!-- <link href="{{asset('css/animate.css')}}" rel="stylesheet" /> -->
    <link href="{{asset('css/aos.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-ML7RP2G');</script>
    <!-- End Google Tag Manager -->
    
</head>

<body ng-app="app" id="skrollr-body">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML7RP2G"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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

    <ul class="nav justify-content-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">

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
    <a href="#" data-target=".modal-contact" data-toggle="modal"  class="float" target="_blank">
        <p class="text-center">Contáctanos</p>
    </a>
<div id="modal-contact" class="modal fade bottom modal-contact" tabindex="-1" role="dialog" aria-labelledby="ModalContactLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Contáctanos vía</h5>
        <button type="button" class="close close-m" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <a href="https://api.whatsapp.com/send?phone=+525539964541&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20La%20Aldea."
                    target="_blank">
                  <img class="img-fluid icon-contacto wa" 
                    src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="Whatsapp">(55) 3996 4541
                  </a>
                  </div>
                  
                <div class="col-12">
                  <a href="https://m.me/456682224869554" target="_blank">
                  <img class="img-fluid icon-contacto"
                    src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Facebook_Messenger_logo.svg" alt="Messenger">Messenger
                  </a>
                </div>
                <div class="col-12">
                  <a href="tel:+52">
                  <img class="img-fluid icon-contacto" 
                    src="https://kiper.app/assets/img/iconos/call.svg" alt="Telefono">(55) 3996 4541
                  </a>
                </div>
                <div class="col-12 last">
                  <a href="/contacto">
                  <img class="img-fluid icon-contacto" 
                    src="https://kiper.app/assets/img/iconos/mail.svg" alt="Correo electrónico">Correo
                  </a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
    <!-- <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script> -->
    <!-- Skrollr - Animaciones -->
    <!-- <script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
    <script type="text/javascript">
	    var s = skrollr.init(
            {smoothScrolling: false}
        );
	</script> -->

    <!-- AOS - Animaciones -->
    <script type="text/javascript" src="{{asset('js/aos.js')}}"></script>
    <script>
        // AOS.init({
        //     offset: 200,
        //     delay: 650,
        // });
        AOS.init({
            easing: 'ease-out-back',
            duration: 1000
        });
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
