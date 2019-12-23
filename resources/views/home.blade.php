@extends("layouts.app")
@section("content")
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class=" col-md-8 mb-5">
                <h2 class="text-center text-dark">Nouveaux</h2>
                <div class="row bd-example">
                   <!-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{--asset('images/imag3.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Cours en JavaScript</h3>
                                    <p>Des cours et des tutoriel detaillees en JavaScript</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/imag2.jpg')}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Cours en HTML</h3>
                                    <p>Des cours et des tutoriel detaillees en html.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/imag1.jpg')-}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Cours en PHP</h3>
                                    <p>Des cours et des tutoriel detaillees en PHP.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/imag1.jpg')--}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>Cours en CSS</h3>
                                    <p>Des cours et des tutoriel detaillees en CSS.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->
                       <div class="col-md-8-lg-4 card" style="width: 100% ; heigth:100em;">
                           <div class="card-header">
                               HTML
                           </div>
                           <table class="table table-borderless">
                               {{--
                               @foreach($cours as $cours)
                                   <tr>
                                       <td></td>
                                       <a href=""></a>
                                       <td> <a href="">{{$cours->nom}}</a> </td>
                                       <td>{{$cours->type}}</td>
                                       <td>{{$cours->updated_at}}</td>
                                   </tr>
                               @endforeach--}}
                           </table>
                       </div>
                       @foreach($category as $category)
                           <div class="col-lg-4 col-sm-6 portfolio-item">
                               <div class="card h-100">
                                   <a href="#"><img class="card-img-top" src="{{$category->nom ?? asset('uploads/images/default.png')}}" height="250" width="250" alt=""></a>
                                   <div class="card-body">
                                       <h4 class="card-title">
                                           <a href="/cours/{{$category->id}}/show">{{$category->nom}}</a>
                                       </h4>
                                       <p class="card-text">{!! \Illuminate\Support\Str::words($category->nom, 25,'....')  !!}</p>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                </div>
            </div>
            <div class="col-md-4 mb-5">
             <h2 class="text-center">Nos Contacts</h2>
                <hr>
                <address class="text-center">
                    <strong style=" text-decoration=blue;">HOMEdu</strong>
                    <br>
                    <abbr title="Adress">Adress:</abbr>
                    linguere
                    <br>
                </address>
                <address class="text-center">
                    <abbr title="Phone">P:</abbr>
                    774857172
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">home.edu@edu.com</a>
                </address>
            </div>
        </div>
        {{--
        <div class="row">
            <div class="col-md-5 mb-3">
                <a href="/login" class="btn btn-success btn-lg active" role="button" aria-pressed="true">connecter</a>
            </div>
            <div class="col-md-2 mb-2">

            </div>
            <div class="col-md-5 mb-3" >
                <a href="/register" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">S'inscrire</a>
            </div>
        </div>
        <!-- /.row -->
        --}}
    </div>

    <!-- /.container -->
@endsection
