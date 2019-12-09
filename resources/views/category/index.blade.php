@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <a href="{{route('category_create')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom category</th>
                <th></th>
            </tr>
            @foreach($categories as $nom)
                <tr>
                    <td></td>
                    <td>{{$nom->nom}}</td>
                    <td>
                        <p> <a href="{{route('category_edit',['id'=>$nom->id])}}">Editer</a> </p>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
