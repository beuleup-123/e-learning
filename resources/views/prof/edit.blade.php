@extends("layouts.app")
@section("content")

        <form action="{{route('user_update',['id'=>$user->id])}}" method="post">
            @csrf
            <div>
                 <input type="text" name="name" class="form-control" placeholder="nom">
            </div>
            <div>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div>
                <input type="text" name="password" class="form-control" placeholder="mots de passe">
            </div>
            <div>
                <select name="status" id="status" class="form-control" placeholder="status">
                    <option value="Adiministrateur">Adiministrateur</option>
                    <option value="Etudiant">Etudiant</option>
                    <option value="Professeur">Professeur</option>
                </select>
            </div>

            <div>
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>

@endsection
