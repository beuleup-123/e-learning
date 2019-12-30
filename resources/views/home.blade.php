@extends("layouts.app")
@section("content")
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class=" col-md-8 mb-5">
                <h2 class="text-center text-dark">Nouveaux</h2>
                <div class="row bd-example" id="catego">
                    <div class="col-lg-9 col-sm-4 portfolio-item">
                        <div class="row card">
                            <div class="h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class=" h-100">
                                <p>Apprendre HTML</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-4 portfolio-item">
                        <div class="row card">
                            <div class="h-100">
                                <a href="#"><img class="card-img-top" src="{{asset('images/imag1.jpg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class=" h-100">
                                <p>Apprendre HTML</p>
                            </div>
                        </div>
                    </div>
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
