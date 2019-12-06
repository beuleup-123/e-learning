@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <a href="{{route('cour_index')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <div class="table table-striped">
            <tr>
                <th> </th>
                <th> nom</th>
                <th> type</th>
                <th> description</th>
                <th> </th>
            </tr>
            @foreach($cour as $cle)
                <tr>
                    <td></td>
                    <td>{{$cle->nom}}</td>
                    <td>{{$cle->type}}</td>
                    <td>{{$cle->description}}-{{$cle->category->name ?? "n'existe pas"}}</td>
                    <td></td>
                </tr>
            @endforeach
        </div>
    </div>
@endsection
