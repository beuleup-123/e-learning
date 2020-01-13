@extends('layouts._navbar')
@section('content')
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
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
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div >
          <a href="{{route('prof_create')}}" class="btn btn-primary">Nouveau</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom </th>
                <th>email</th>
                <th>Editer</th>
                <th>suprimer</th>
            </tr>

            @foreach($profs as $user)
                <tr>
                    <td></td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <!-- <td><a href="" class="byn btn-primary">Editer</a></td> -->
                    <td>
                        <p class="btn btn-warning"> <a href ="{{route('prof_edit',['id'=>$user->id])}}" >Editer</a> </p>
                    </td>
                    <td>
                        <p class="btn btn-danger"> <a href ="{{route('prof_delete',['id'=>$user->id])}}" >Suprimer</a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
