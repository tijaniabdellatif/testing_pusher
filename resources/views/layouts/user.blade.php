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

  </head>
<body>
  
 
 
  
   
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
                            
                              </ul>
                      
                            </div>
                        </nav>
                    </div>
                   

                     <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                         @yield('content')
                     </main>
                </div>
            </div>
      
         
            
                  
</body>
</html>
