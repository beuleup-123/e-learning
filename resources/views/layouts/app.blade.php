<!DOCTYPE html>
<html lang="en">
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOMEdu</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,900&display=swap"
      rel="stylesheet">
</head>
<body>
<!-- Navigation -->
    <div class="menu">
        <nav class="navbar navbar-expand-xl navbar-toggler navbar-dark bg-info fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><h3 > HOM<small style="text-decoration: #00ff80">Edu</small></h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}"><i class="fa fa-home"></i>Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('formation')}}" >Formations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html" src="contact.html">Contact</a>
                        </li>
                        <li class="nav-link">{{_('|')}}</li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connecter') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscrire') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                              <!-- Navbar Search -->
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                                </div>
                            </div>
                            </form>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                            @can('Administrateur')
                              <a class="dropdown-item" href="/admin/backoffice">
                                  <i class="fas fa-bars"></i>
                              <span>back-office</span></a>
                             @endcan
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">Logout</a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
               
            </div>
        </nav>
        <div>
         @yield('categ')
        </div>
    </div>
    <!-- Header 
    <header class=" py-3 mb-3 bg-dark">
        <div class=" container h-100">
            <div class="row h-100 align-items-center">
                <div class="text col-lg-7">
                    <h1 class="display-4  mt-5 mb-2 text-white">Cours en ligne</h1>
                    p class="lead mb-6 ">ce site vous offre des cours en developpement comme le JavaScript,html.</p
                </div>
                <div class="col-5">
                    <img src="{{asset('images/IMG_2972.JPG')}}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </header>
    -->
    <div>
        @yield("content")
    </div>
<!-- /.container -->
    <footer class="bg-ligth">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; E-learning 2019</p>
        </div>
        <!-- /.container -->
    </footer>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.slim.min.js')}}"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
</body>
</html>
