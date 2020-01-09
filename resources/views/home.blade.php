@extends("layouts.app")
@section("content")

    <!-- Page Content -->
        <div class="row .bimg ">
           

<div class="col-lg-12">

<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid icon" src="{{asset('images/code.JPG')}}" height="250" width="250" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block img-fluid icon" src="{{asset('images/imagsider1.jpg')}}" height="250" width="250" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h3 class="text-ligth text-center"> Homedu est une application web qui vous propose des cours en 
          css, html, php eten JavaScript... </h3>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row ">

<div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <a href="{{route('css')}}"><img class="card-img-top" src="{{asset('images/css_code.png')}}" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">CSS</a>
        </h4>
        <p>CSS (Cascading Style Sheets), c'est cet autre langage qui vient compléter le HTML.</p>
      </div>
      <div class="card-footer">
      <a href="{{route('css')}}" class="tree-item_link">voir la formation <i class="fa fa-chevron-right"></i></a>   
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <a href="{{route('html')}}"><img class="card-img-top" src="{{asset('images/code_html1.jpeg')}}" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">HTML</a>
        </h4>
        <p>HTML signifie « HyperText Markup Language » qu'on peut traduire par 
                                    « langage de balises pour l'hypertexte ».</p>
      </div>
      <div class="card-footer">
      <a href="{{route('html')}}" class="tree-item_link">voir la formation <i class="fa fa-chevron-right"></i></a>   
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <a href="{{route('php')}}"><img class="card-img-top" src="{{asset('images/phpdesigner.png')}}" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">PHP</a>
        </h4>
        <p>PHP est un langage de programmation compilé à la volée très utilisé pour produire des pages Web dynamique.
                                     C'est un langage très abordables qui va vous permettre de créer vos premiers site web dynamiques.</p>
      </div>
      <div class="card-footer">
      <a href="{{route('php')}}" class="tree-item_link">voir la formation <i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="{{asset('images/code_Javascript.png')}}" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="{{route('java')}}">JavaScript</a>
        </h4>
        <p>Le JavaScript va vous permettre de rajouter des intéractions au niveau de vos
                                 éléments HTML et de modifier le DOM.</p>
      </div>
      <div class="card-footer">
      <a href="{{route('java')}}" class="tree-item_link"> voir la formation <i class="fa fa-chevron-right"></i> </a>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.col-lg-9 -->

            
       

    <!-- /.container -->
@endsection
