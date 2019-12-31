@extends("layouts.app")
@section("content")

    <!-- Page Content -->
        <div class="row content">
            <div class=" col-md-9 mb-5">
                <!-- Header -->
                        <header class=" mb-3 ">
                        <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner"> 
                            <div class="carousel-item active">
                            <img src="{{asset('images/IMG_2972.JPG')}}" class="img d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{asset('images/css.jpg')}}" class="img d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img src="{{asset('images/el2.jpg')}}" class="img d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
                        </div>
                        </div>
                    </header>
                <h2 class="text-center text-dark">Nouveaux</h2>
                <div class="row catego">
                    <div class="col-lg-12 col-sm-4 portfolio-item">
                        <div class="row content">
                            <div class="col-7 h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-5 h-100 bg-danger">
                                <h3 class="text-center text-dark ">Apprendre HTML</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4 portfolio-item">
                        <div class="row content">
                            <div class="col-7 h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-5 h-100">
                                <p class="text-center text-dark">Apprendre HTML</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4 portfolio-item">
                        <div class="row content">
                            <div class="col-7 h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-5 h-100">
                                <p class="text-center text-dark">Apprendre HTML</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-5">
             <h3 class="text-center">Nos Contacts</h2>
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

    <!-- /.container -->
@endsection
