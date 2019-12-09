@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif


    <div>
        <a href="{{route('cour_store')}}" class="btn btn-primary">Ajouter des Cours</a>
    </div>

    <table class="table table-striped">
        <tr>
            <th></th>
            <th>Nom cours</th>
            <th>type</th>
            <th>Description</th>
            <th>category</th>
            <th>Editer</th>
        </tr>

        @foreach($cours as $cours)
            <tr>
                <td></td>
                <td>{{$cours->nom}} </td>
                <td>{{$cours->type}}</td>
                <td>{{$cours->description}}</td>
                <td>{{$cours->category_id}}</td>
                <!-- <td><a href="" class="byn btn-primary">Editer</a></td> -->
                <td>
                    <p> <a href ="{{route('cour_edit',['id'=>$cours->id])}}">Editer</a> </p>

            </tr>
            @endforeach
    </table>
</div>
@endsection
