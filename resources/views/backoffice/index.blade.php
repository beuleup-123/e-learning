@extends("layouts.app")
@section("content")
    <div class="container user">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div>
            <a href="{{'register'}}" class="btn btn-primary">Ajouter user</a>
        </div>

        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom </th>
                <th>email</th>
                <th>Mots de passe</th>
                <th>Status</th>
                <th>Editer</th>
                <th>suprimer</th>
            </tr>

            @foreach($user as $user)
                <tr>
                    <td></td>
                    <td>{{$user->name}} </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->status}}</td>
                    <!-- <td><a href="" class="byn btn-primary">Editer</a></td> -->
                    <td>
                        <p class="btn btn-warning"> <a href ="{{route('user_edit',['id'=>$user->id])}}" >Editer</a> </p>
                    </td>
                    <td>
                        <p class="btn btn-danger"> <a href ="{{route('user_delete',['id'=>$user->id])}}" >Suprimer</a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container cours">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div>
            <a href="{{route('cour_create')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom cours</th>
                <th>Type</th>
                <th>Category</th>
                <th>Fichier</th>
                <th>Editer</th>
                <th>Suprimer</th>
            </tr>
            @foreach($cours as $cours)
                <tr>
                    <td></td>
                    <td>{{$cours->nom}} </td>
                    <td>{{$cours->type}}</td>
                    <td>{{$cours->category_id}}</td>
                    <td>
                        <p>{{$cours->nom}}</p>
                    </td>
                    <td>
                        <a class="btn btn-warning" href ="{{route('cour_edit',['id'=>$cours->id])}}">Editer</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href ="{{route('cour_delete',['id'=>$cours->id])}}" >Suprimer</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div class="container category">
        <div>
            <a href="{{route('category_create')}}" class="btn btn-primary">Ajout Category</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom category</th>
                <th>Editer</th>
                <th>Suprimer</th>
            </tr>
            @foreach($categories as $nom)
                <tr>
                    <td></td>
                    <td>{{$nom->nom}}</td>
                    <td>
                        <p> <a class="btn btn-warning" href="{{route('category_edit',['id'=>$nom->id])}}">Editer</a> </p>
                    </td>
                    <td>
                        <p > <a class="btn btn-danger" href ="{{route('category_delete',['id'=>$nom->id])}}" >Suprimer</a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
