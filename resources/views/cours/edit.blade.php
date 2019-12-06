@extends("layouts.app")
@section("content")
    <div>
        <form action="{{route('cour_update',['id'=>$cours->id])}}" method="post">
        @csrf
            @method('patch')
            <div>
                <a href="{{route('cour_store')}}" class="btn btn-primary">Ajouter des Cours</a>
            </div>
            <div>
                <input type="text" name="nom" class="form-control" placeholder="nom cours" value="{{$cours->nom}}">
            </div>
            <div>
                <input type="text" name="type" class="form-control" placeholder="type cours">
            </div>
            <div>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
