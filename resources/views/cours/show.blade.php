@section('content')
    <div class="container mt-5" style="width: 60vw">
        <div class="row align-items-start my-5">
            <div class="col-lg-5">
                <h3 class="font-weight-light">{{$category->nom}}</h3>
                <hr>
                <div class="seller-div">
                    <h3>Infos du vendeur</h3>
                {{--   <strong>{{$cours->seller->user->name}}</strong><br><br>--}}
                    <strong><i class="fa fa-phone-alt"></i> Adresse:</strong>}<br>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-7">
                <p>{!!$category->nom!!}</p>
                <a class="btn btn-primary" href="/produit/{{$category->id}}/show">Call to Action!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>
@endsection
