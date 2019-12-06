@extends("layouts.app")
@section("content")
<div>
    <form action="{{route('cour_store')}}" method="post">
        @csrf
        <div>
            <a href="{{route('cour_store')}}" class="btn btn-primary">Ajouter des Cours</a>
        </div>
        <div>
            <input type="text" name="nom" class="form-control" placeholder="nom cours">
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
