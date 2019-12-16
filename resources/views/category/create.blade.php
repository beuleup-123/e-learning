@extends("layouts.app")
@section("content")
    <div>
        <form action="{{route('category_store')}}" method="post">
            @csrf
            <div>
                <input type="text" name="nom" class="form-control" placeholder="nom category">
            </div>
            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
