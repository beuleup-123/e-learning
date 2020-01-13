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
        <div>
            <a href="{{route('cour_create')}}" class="btn btn-primary">Nouveau</a>
        </div>
        <table class="table table-striped ">
            <tr>
                <th></th>
                <th>Nom cours</th>
                <th>Type</th>
                <th>Category</th>
                <th>Commantaire</th>
                <th>Fichier</th>
                <th>Editer</th>
                <th>Suprimer</th>
            </tr>
            @foreach($cours as $cour)
                <tr>
                    <td></td>
                    <td>{{$cour->nom}} </td>
                    <td>{{$cour->type}}</td>
                    <td>{{$cour->category_id}}</td>
                    <td class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-fw fa-comment"></i>
                                <span>comments</span>
                            </a>
                            <table class="table table-borderless dropdown-menu " aria-labelledby="pagesDropdown ">
                                    @foreach($cour->comments as $key)  
                                            <tr>
                                                <td></td>
                                                <td> 
                                                    <div class="media-body">
                                                        <p> {{$key->description}}</p> 
                                                    </div> 
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href ="{{route('comment_delete',['id'=>$key->id])}}" ><i class="fa fa-trash-alt"></i> <small>Suprimer</small> </a>
                                                </td>
                                            </tr>   
                                    @endforeach
                            </table>
                    </td>
                    <td> {{$cour->nom}} </td>
                    <td>
                        <a class="btn btn-warning" href ="{{route('cour_edit',['id'=>$cour->id])}}"><i class="fa fa-pencil-alt"></i><small>Editer</small> </a>
                    </td>
                    <td>
                        <a  class="btn btn-danger" href ="{{route('cour_delete',['id'=>$cour->id])}}" ><i class="fa fa-trash-alt"></i> <small>Suprimer</small></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
