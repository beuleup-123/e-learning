@extends('layouts.app')
@section('content')
    @section('categ')
    <aside class="navcat">
     <ul class=" nav  nav-fill  bgitem">
        <li class="nav-item">
            <a class="nav-link textcolor" href="{{route('html')}}">HTML</a>
        </li>
        <li class="nav-item textcolor">
            <a class="nav-link textcolor" href="{{route('php')}}">PHP</a>
        </li>
        <li class="nav-item">
            <a class="nav-link textcolor" href="{{route('css')}}">CSS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link textcolor " href="{{route('java')}}" >Javascript</a>
        </li>
     </ul>
     </aside>
    @endsection
    <!-- Sidebar Widgets Column -->
    <div class="list_cat sidebar topitem ">
        <div class="row topitem">
            @foreach($category as $category)
                <div class="col-lg-12 col-sm-4 portfolio-item">
                    <div class="h-100">
                        <h5 class="header text-center bgitem">
                            {{$category->nom}}
                        </h4>
                        <div class="body">
                            @foreach($cours as $cour)
                                @if($cour->category_id == $category->id )
                                     <a href="{{route('show',['slug'=>$cour->slug])}}"><p class="textcolor">{{$cour->nom}}</p></a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Post Content Column -->
    <div id="content-wrapper" class="topitem contenu">
        <div class=" contenu"> 
            <!-- Title -->
            @foreach($index_cour as $cour)
                <div class="titre  ">
                    <h3 id="cour_nom" class="col-md-4 ">{{$cour->nom}}</h3>
                    <!-- Date/Time -->
                    <h3 class="col-md-4">{{$cour->updated_at}}</h3>
                </div>    
                <div class="contenu">
                    <p>{!! $cour->description !!}</p>
                </div>
                <hr>
                <!-- Comments Form -->
                <div class=" my-4 ">
                    <h4 class="header"> Votre commentaire:</h4>
                    <div class="card-body">
                        <form action="{{route('comment_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!--input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}"-->
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
                    <div class="media mb-4 ">
                        <img class="d-flex mr-3 rounded-circle" src=" http://placehold.it/50x50" alt="{{--Auth::user()->name --}}">
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