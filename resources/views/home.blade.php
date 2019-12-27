@extends("layouts.app")
@section("content")
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class=" col-md-8 mb-5">
                <h2 class="text-center text-dark">Nouveaux</h2>
                <div class="row bd-example">
                       @foreach($category as $category)
                           <div class="col-lg-6 col-sm-4 portfolio-item">
                               <div class="card h-100">
                                   <h4 class="card-title">
                                       {{$category->nom}}
                                   </h4>
                                   <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')?? $category->nom}}" height="250" width="250" alt=""></a>
                                   <div class="card-body">
                                       <table class="table table-borderless">
                                           @foreach($cours as $cour)
                                               @if($cour->category_id == $category->id)
                                                   <tr>
                                                        <td> <a href="{{route('show',['slug'=>$cour->slug])}}">{{$cour->nom}}</a><br> </td>
                                                         <td>{{$cour->updated_at}}</td>
                                                   </tr>
                                               @endif
                                           @endforeach
                                       </table>
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
    </div>

    <!-- /.container -->
@endsection
