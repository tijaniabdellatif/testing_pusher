<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous" defer></script>
    <script src="{{asset('js/script.js')}}" defer></script>
   


    {{-- @toastr_css --}}
    @notifyCss
  
  </head>
<body>
  
 
 
  
        <x:notify-messages />
        @notifyJs


        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          @if(Auth::check())
          <div class="utils">
            <img width="30" height="30" class="rounded" src="{{Storage::url(Auth::user()->user_image)}}" />
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{ Str::upper(Auth::user()->firstname) }}</a>
          </div>
         
            @else
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">{{ '' }}</a>
            @endif
            
          
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Sign out') }}
             </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                    </form>
              </div>
            </div>
          </header>
  
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-lg-2 d-md-block bg-light">
                        <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse">
                            <div class="position-sticky pt-3">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                                    <span data-feather="home"></span>
                                    Dashboard
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.categories.index')}}">
                                    <span data-feather="file"></span>
                                    Categories
                                  </a>
                                </li>

                                <li class="nav-item">
                                  <a class="nav-link" href="{{route('admin.categories.create')}}">
                                    <span data-feather="file"></span>
                                    Create Categories
                                  </a>
                                </li>

                                <li class="nav-item">
                                  <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Products
                                  </a>
                                </li>
                            
                              </ul>
                      
                            </div>
                        </nav>
                    </div>
                   

                     <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                         @yield('content')
                     </main>
                </div>
            </div>
      
         
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
            <script src="{{asset('js/setup.js')}}"></script>    
            
         
</body>
</html>
