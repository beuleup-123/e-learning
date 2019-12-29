<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Le site de vente en ligne N 1" />
    <meta name="author" content="" />

    <title>HOMedu - backoffice @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,900&display=swap"
        rel="stylesheet"
    />
</head>
<body id="page-top" style="padding: 0">
@include('layouts._navbar'){{--le men est inclus apartir du fichier _navbarre.blade.php--}}
<div id="wrapper">
    {{-- les side barre n'est visible que si le user est connecte--}}
    @auth
        @include('layouts._adminSidebar'){{-- le side barre est inclus a partir du fichier _adminSidebarre.blade.php --}}
    @endauth
    <div id="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2019</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
