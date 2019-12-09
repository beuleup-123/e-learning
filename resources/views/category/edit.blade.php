@extends("layouts.app")
@section("content")
    <div>
        <form action="{{route('category_update',['id'=>$categories->id])}}" method="post">
            @csrf
            @method('patch')
            <div>
                <input type="text" name="nom" class="form-control" placeholder="nom cours" value="{{$categories->nom}}">
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
