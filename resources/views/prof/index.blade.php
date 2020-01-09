@extends('layouts._navbar')
@section('content')
<div id="wrapper">
    <div id="content-wrapper">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <div class="col-lg-4">
          <a href="{{route('prof_create')}}" class="btn btn-primary">Ajouter un Professeur</a>
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
