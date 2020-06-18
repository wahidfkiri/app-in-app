<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Mypp') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/liste.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset ('assets1/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets1/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav id="topbar" class="navbar navbar-expand-lg navbar-dark" style="padding-top:26px;">
        <div class="container">
          <a class="navbar-brand text-primary" href="{{ url('/') }}">{{ config('app.name', 'MyApp') }}</a>
          <button class="navbar-toggler" style="border:1px solid black;" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-align-justify" style="color:black;"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbar-primary">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img alt="image" src="{{asset('img/logo.png')}}">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav ml-lg-auto">
              <li class="nav-item">
                <a class="navUrl" href="{{ url('/') }}" id="navUrl">Acceuil</a>
              </li>
              <li class="nav-item" id="registerLi" style="margin-top: 10px;">
                <a class="btn btn-lg text-white bg-global mt-5" id="connexion" href="{{ route('login') }}">{{ __('mon espace') }}</a>
              </li>
              <li class="nav-item"  style="margin-top: 10px;">
                @if (Route::has('register'))
                <a class="btn btn-lg text-global border-global" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                @endif
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <main>
        @yield('content')
      </main>
      <footer>
        <div class="container">
          <div class="column">
            <img class="logo" />
          </div>
          <div class="column">
            <span class="title">A propos</span>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <a href="#" class="btn btn-lg text-white bg-global mt-5">plus d'informations</a>
          </div>
          <div class="column">
            <span class="title">Contactez-nous</span>
            <span class="info"><img class="icone" /> 50 507 290</span>
            <span class="info"><img class="icone" /> rabii.kahlaouiii@gmail.com</span>
            <span class="info"><img class="icone" /> fb.me/lien_page_fb</span>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <span>&copy;  <script type = "text/javascript">
         var dt = new Date();
         document.write( dt.getFullYear() ); 
      </script> by Wahid Fkiri. All Rights Reserved</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- Core -->
    <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/headroom/headroom.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('js/vendor/onscreen/onscreen.min.js') }}"></script>
    <script src="{{ asset('js/vendor/nouislider/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.1.0') }}"></script> 
      <script type="text/javascript">
     $(document).ready(function () {
  $('.services').click(function() {
  $('html, body').animate({
    scrollTop: $("$services").offset().top
  }, 1000)
}),   
});
    </script>
  </body>
</html>
