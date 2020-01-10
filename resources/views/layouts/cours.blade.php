@extends('layouts.app')
@section('content')
        <div class="row ">
        <!-- Sidebar Widgets Column -->
            <div class="list_cat col-lg-3 topitem position-center">
                <!-- Categories Widget -->
                <div>
                    <div class="card my-4 row bd-example fixed-left" id="list">
                       @foreach($category as $category)
                            <div class="col-lg-12 col-sm-4 portfolio-item">
                                <div class="h-100">
                                    <h5 class="card-header text-center">
                                        {{$category->nom}}
                                    </h4>
                                    <div class="body">
                                            @foreach($cours as $cour)
                                                @if($cour->category_id == $category->id )
                                                    <p class="position-items-center text-decoration:yellow"> <a href="{{route('show',['slug'=>$cour->slug])}}">{{$cour->nom}}</a></p>
                                                @endif
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Post Content Column -->
            <div class="col-lg-9 topitem">
                <!-- Title -->
                @foreach($index_cour as $cour)
                        <div class="titre">
                            <h3 id="cour_nom" class="col-md-4 ">{{$cour->nom}}</h3>
                            <!-- Date/Time -->
                            <p col-md-4>{{$cour->updated_at}}</p>
                        </div>    
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
                                <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                                <input type="hidden" name="cour_id" value="{{$cour->id}}">
                                <div class="form-group">
                                    <textarea class="form-control" name="description" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                    <!-- Single Comment -->
                    @foreach($cour->comments as $key)  
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src=" http://placehold.it/50x50" alt="{{ Auth::user()->name }}">
                            <div class="media-body">
                              <p> {{$key->description}}</p> 
                            </div> 
                        </div>
                    @endforeach
                @endforeach
                {{--  <div>
                     <nav aria-label="..."> {{ $index_cour->appends(['sort' => 'votes'])->links()}}</nav>
                </div>--}}
                <!-- Comment with nested comments -->
            </div> 
        </div>
        <!-- /.row -->
@endsection