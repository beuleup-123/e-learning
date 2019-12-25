@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                @foreach($index_cour as $cour)
                    <h1 class="mt-4">{{$cour->nom}}</h1>
                    <hr>

                    <!-- Date/Time -->
                    <p>{{$cour->updated_at}}</p>
                    <hr>
                    <div class="card-body">
                        <p>{!! $cour->description !!}</p>
                    </div>
                    <hr>

                    <!-- Comments Form -->

                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form action="{{route('comment_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>

                    <!-- Single Comment -->
                    @foreach($comment as $commentaire)
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <p> {{$commentaire->description}}</p>
                        </div>
                    </div>
                    @endforeach
                @endforeach
                <div>
                   {{-- <nav aria-label="..."> {{ $index_cour->appends(['sort' => 'votes'])->links()}}</nav>--}}
                </div>
                <!-- Comment with nested comments -->
            </div>

            <!-- Sidebar Widgets Column -->
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

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Autres cours</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                @foreach($autre_cour as $cc)
                                    <a href="{{route('show',['slug'=>$cc->slug])}}"><ol>{{$cc->nom}}</ol></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Side Widget</h5>
                    <div class="card-body">
                        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
@endsection
