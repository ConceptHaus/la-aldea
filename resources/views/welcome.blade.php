<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>La Aldea</title>
    <!-- <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" /> -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
</head>

<body>
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset('video/video-home.mp4')}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <ul class="nav justify-content-center">
                <li class="nav-item nav-item-text text-left">
                    <a class="nav-link active" href="#">Video</a>
                </li>
                <li class="nav-item nav-item-text text-left">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item mx-5">
                    <a class="nav-link" href="#">
                        <img src="{{asset('img/logo-aldea.png')}}" width="200">
                    </a>
                </li>
                <li class="nav-item nav-item-text text-right">
                    <a class="nav-link" href="#">Galería</a>
                </li>
                <li class="nav-item nav-item-text text-right">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
            <div class="video-border"></div>
        </div>
    </header>

    <section class="jumbotron text-center">
        <div class="container">
            <img src="{{asset('img/isotipo-aldea.png')}}" width="40">
            <p class="lead text-muted text-home">La Aldea fue creada pensando en lo que tú 
            necesitas para hacer de tu evento una 
            experiencia inigualable.</p>
        </div>
    </section>

    <!-- <main>
        <img src="{{asset('img/isotipo-aldea.png')}}">
        <h5>La Aldea fue creada pensando en lo que tú 
            necesitas para hacer de tu evento una 
            experiencia inigualable.</h5>
    </main> -->

    <!-- <main role="main" class="container">
        <div class="starter-template">
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text
                and a mostly barebones HTML document.</p>
        </div>

    </main> -->

    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script> -->

</body>

</html>
