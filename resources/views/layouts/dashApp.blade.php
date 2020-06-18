<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    
    <style type="text/css">
    #calendar {
    max-width: 900px;
    margin: 0 auto;
    margin-bottom: 100px;
    }
    </style>
    <link href="{{asset('packages/core/main.css')}}" rel='stylesheet' />
    <link href="{{asset('packages/daygrid/main.css')}}" rel='stylesheet' />
    <link href="{{asset('packages/timegrid/main.css')}}" rel='stylesheet' />
    <link href="{{asset('packages/list/main.css')}}" rel='stylesheet' />
    <script src="{{asset('packages/core/main.js')}}"></script>
    <script src="{{asset('packages/interaction/main.js')}}"></script>
    <script src="{{asset('packages/daygrid/main.js')}}"></script>
    <script src="{{asset('packages/timegrid/main.js')}}"></script>
    <script src="{{asset('packages/list/main.js')}}"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
    header: {
    left: 'prev,next today',
    center: 'title',
    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    defaultDate: '{{ Carbon\Carbon::now()}}',
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: true,
    events: [
    @if ($InfoTheme->note->count() > 0)
    @foreach($InfoTheme->note as $get)
    {
    title: '{{$get->title}}',
    start: '{{$get->dateJour}} {{$get->timeDebut}}',
    color: '#ff9f89',
    constraint: 'businessHours'
    },
    @endforeach
    @endif
    ]
    });
    calendar.render();
    });
    </script>
    <!-- Core -->
    <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('assets2/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="{{ asset('assets2/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets2/js/argon.js?v=1.0.0')}}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <!--  --><link href="{{ asset('assetsDashboard/css/argon-dashboard.css') }}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('assetsDashboard/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsDashboard/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">





 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!--  --><link href="{{ asset('assetsDashboard/css/argon-dashboard.css') }}" rel="stylesheet">

    <!-- Icons -->
  <link href="{{ asset('assetsDashboard/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset('assetsDashboard/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />


    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

   

  </head>
  <body>
    <div id="app">
      <!-- topbar -->
      @guest
      <div id="topbar">
        <div class="container">
          <button class="nav" onclick="document.getElementById('nav').classList.add('show');"></button>
          <!--  <img src="#" /> -->
          <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
          </a>
          <nav id="nav">
            <button class="nav" onclick="document.getElementById('nav').classList.remove('show');"></button>
            <a href="#" class="active">À propos</a>
            <a href="#">Contactez nous</a>
            <a href="#">Aide</a>
            |
            <button href="#" class="btn decouvrirAutoEcole">Trouver Auto-ecoles</button>
            <!--   <a href="#" class="btn">connexion</a> -->
            <a class="btn" href="{{ route('login') }}">{{ __('Connexion') }}</a>
            <!-- <a href="#" class="btn">Inscription</a> -->
            @if (Route::has('register'))
            <a class="btn" href="{{ route('register') }}">{{ __('Inscription') }}</a>
            @endif
          </nav>
        </div>
      </div>
      @endguest
      <!-- entète - header -->
      
      @guest
      @else
      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white"    id="sidenav-main">
        <div class="container-fluid">
          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-align-justify" style="color:black;"></i>
          </button>
          <!-- Brand -->
          <a class="navbar-brand pt-0" href="./index.html">
            <img src="upload/{{$InfoTheme->logo}}" class="navbar-brand-img" alt="...">
          </a>
          <!-- User -->
          <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder"  onerror="this.onerror=null;this.src='upload/{{$Info->picture}}'"  src="upload/{{$Info->picture}}
                    ">
                  </span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="{{url('/home')}}" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Dashboard</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="./examples/profile.html" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
          
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none" >
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="./index.html">
                    <img src="upload/{{$Info->picture}}" onerror="this.onerror=null;this.src='upload/{{$Info->picture}}'" >
                  </a>
                  <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item  active ">
                <a class="nav-link  active " href="./index.html">
                  <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
              </li>
              <li class="nav-item  active ">
                <a class="nav-link  active " href="./index.html">
                  <i class="ni ni-shop text-primary"></i> Stock
                </a>
              </li>
               <li class="nav-item  active ">
                <a class="nav-link  active " href="./index.html">
               <i class="fas fa-calendar text-primary"></i> Agenda
             </a>
           </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/parametre') }}">
                  <i class="ni ni-settings-gear-65 text-global"></i> Paramétre
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="dropdown-item">
                  <i class="ni ni-circle-08 text-pink"></i> Logout
                  
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="main-content" >
        
        <nav class="navbar navbar-top navbar-expand-md " id="navbar-main"  style="background-color: #5e72e4">
          <div class="container-fluid" >
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">{{$InfoTheme->name}}</a>
            
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex" >
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder" onerror="this.onerror=null;this.src='upload/{{$Info->picture}}'" src="uploads/{{$Info->picture}}">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  text-white font-weight-bold">{{ Auth::user()->name }}</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="{{url('/home')}}" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>Dahboard</span>
                  </a>
                  <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                  </a>
                  <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                  </a>
                  <a href="./examples/profile.html" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout </span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        
        
        
        @endguest
        <main>
          
          @yield('content')
          
        </main>
        
      </div>
    </div>
  </body>
</html>