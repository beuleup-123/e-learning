@extends('layouts._navbar')
@section('content')
<div id="wrapper">
    <!-- Sidebar -->
<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Tableau de bord</span>
        </a>
      </li>
      <li class="nav-item dropdown">
                @can('Administrateur')
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                @endcan
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="/login">Login</a>
                    <a class="dropdown-item" href="/register">Register</a>
                    <a class="dropdown-item" href="/forgot-password">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="/404">404 Page</a>
                    <a class="dropdown-item" href="/blank">Blank Page</a>
                </div>
      </li>
      <li class="nav-item">
                <a class="nav-link" href="/cours/index">
                    <i class="fas fa fa-book"></i>
                    <span>Cours</span></a>
            </li>
            <li class="nav-item">
            @can('Administrateur')
                <a class="nav-link" href="/categories/index">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Categories</span></a>
            @endcan        
            </li>
            <li class="nav-item">
            @can('Administrateur')
                <a class="nav-link" href="/prof/index">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Professeurs</span></a>
             @endcan       
    </li>
    </ul>
    
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Tableau de bord</a>
          </li>
          <li class="breadcrumb-item active">Aperçu</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
        
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-book"></i>
                </div>
                <div class="mr-5">{{$cours_count}} Cours</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/cours/index">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          @can('Administrateur')
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">{{$categories_count}} Categories</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/categories/index">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
         
          <div class="col-xl-4 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5"></i>{{$profs_count}} Professeurs</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/prof/index">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          @endcan
      {{--<div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Voir les détails</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>--}}
        </div>

      </div>
      <!-- /.container-fluid -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © E-learning 2019</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

@endsection