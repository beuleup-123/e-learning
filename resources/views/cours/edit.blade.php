@extends("layouts.app")
@section("content")
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <form action="{{route('cour_update',['id'=>$cours->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div>
                <input type="text" name="nom" class="form-control" placeholder="nom cours" value="{{$cours->nom}}">
            </div>
            <div>
                <input type="text" name="type" class="form-control" placeholder="type cours" value="{{$cours->type}}">
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>


            <div>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
                <div class="row">
                    <div class="col-6 text-right">
                        <img src="{{asset($cours->image)}}" alt="{{$cours->nom}}" width="50">
                    </div>
                    <div class="col-6">
                        <h3>Chargez une autre image pour remplacer celle-ci</h3>
                    </div>
                </div>
                <div>
                    <input type="file" name="cour_image" class="form-control">
                </div>
                <div>
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
        </form>
    </div>
@endsection
