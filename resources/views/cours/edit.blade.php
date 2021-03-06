@extends("layouts._navbar")
@section("content")
<div id="wrapper">
    <div id="content-wrapper"
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <form action="{{route('cour_update',['id'=>$cours->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div>
                <input type="text" name="nom" class="col-md-12 container form-control" placeholder="nom cours" value="{{$cours->nom}}">
            </div>
            <div>
                <input type="text" name="type" class="col-md-12 container form-control" placeholder="type cours" value="{{$cours->type}}">
            </div>
            <div>
                <select name="category_id" id="category_id" class="col-md-12 container form-control">
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="text col-md-12 container form-control" ><p>{{$cours->description}}</p> </textarea>
                <div>
                    <input type="file" name="cour_fichier">
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <a href="{{route('cour_index')}}" class="btn btn-secondary">Annuler</a>
                    </div>
                    <div class="col-md-2 lg-2">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection
