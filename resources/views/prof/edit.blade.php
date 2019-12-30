@extends("layouts._navbar")
@section("content")
<div class="col-md-9 container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('prof_update',['id'=>$profs->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus value="{{$profs->name}}">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$profs->email}}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{$profs->password}}">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                                <div class="col-md-6">
                                    <select name="status" id="status" class="form-control" placeholder="status" value="{{$profs->status}}">
                                        <option value="Administrateur">Administrateur</option>
                                        <option value="Etudiant">Etudiant</option>
                                        <option value="Professeur">Professeur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <a href="{{route('prof_index')}}" class="btn btn-secondary">Annuler</a>
                                </div>
                                <div class="col-md-2 lg-2">
                                    <button class="btn btn-primary">Enregistrer</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
