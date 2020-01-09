@extends('layouts._navbar')
@section('content')

<div id="wrapper">
    <div id="content-wrapper">
        <div>
            <a href="{{route('category_create')}}" class="btn btn-primary">Ajouter des Cours</a>
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
</div>
@endsection
