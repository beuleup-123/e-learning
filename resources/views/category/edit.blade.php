@extends("layouts._navbar")
@section("content")
    <div>
        <form action="{{route('category_update',['id'=>$categories->id])}}" method="post">
            @csrf
            @method('patch')
            <div>
                <input type="text" name="nom" class="form-control" placeholder="nom cours" value="{{$categories->nom}}">
            </div>
            <div class="row">
                <div class="col-md-10">
                    <a href="{{route('backoffice')}}" class="btn btn-secondary">Annuler</a>
                </div>
                <div class="col-md-2 lg-2">
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
