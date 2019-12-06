@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <a href="{{route('cour_index')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <table class="table table-striped">
            <tr>
                <th></th>
                <th>Nom cours</th>
                <th>type</th>
                <th>Description</th>
                <th></th>
            </tr>
            @foreach($cour as $nom)
                <tr>
                    <td></td>
                    <td>{{$nom->nom}}</td>
                    <td>{{$nom->type}}</td>
                    <td>{{$nom->description}}</td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
