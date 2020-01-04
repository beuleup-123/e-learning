@extends('layouts._navbar')
@section('content')
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div>
            <a href="{{route('cour_create')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <table class="table table-striped contenu">
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
