@extends("layouts.app")
@section("content")
    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                              <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card my-4">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            Autres cours
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($all as $c )
                                <a href="{{$c->description}}">{{$c->nom}}</a>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Side Widget -->
            </div>
            <div class="col-md-8">
                <h1 class="my-4">E-learning <br>
                    <small>Formation en ligne</small>
                </h1>
                <hr width="50">
                <div class="card my-2">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        @foreach($cours as $cour)
                            <div class="card-body">
                                <p>{!! $cour->description !!}</p>
                                <!--<a href="#" class="btn btn-primary">Lire la suite &rarr;</a>-->
                            </div>
                            <div class=" row card-footer text-muted ">
                                <div class="col-8"><p>{{$cour->updated_at}}</p></div>
                                <div class="col-5"> <a href="#">HOMEdu</a></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item">
                        <a class="page-link" href="#">&larr; Plus Haut</a>
                    </li>
                    <li class="page-item disabled">
                        <!--a class="page-link" href="#">Plus Bas &rarr;</a-->
                    </li>
                </ul>
                <div>
                    <nav aria-label="..."> {{$cours->links()}}</nav>
                </div>
            </div>
            <!-- Sidebar Widgets Column -->

                <!-- Categories Widget -->
                {{--
                <div class="card my-4">
                     <h5 class="card-header">Categories</h5>
                     <div class="card-body">
                         <div class="row">
                             <div class="col-lg-6">
                                 <ul class="list-unstyled mb-0">
                                     <li>
                                         <a href="{{route('php')}}">PHP</a>
                                     </li>
                                     <li>
                                         <a href="{{route('html')}}">HTML</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="col-lg-6">
                                 <ul class="list-unstyled mb-0">
                                     <li>
                                         <a href="{{route('php')}}">JavaScript</a>
                                     </li>
                                     <li>
                                         <a href="{{route('css')}}">CSS</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>--}}
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
