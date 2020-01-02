@extends("layouts.app")
@section("content")

    <!-- Page Content -->
        <div class="row content">
            <div class=" col-md-9 mb-5 py-3">
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
            <div class="col-md-3 mb-5 py-3">
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
