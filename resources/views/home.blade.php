@extends("layouts.app")
@section("content")

    <!-- Page Content -->
        <div class="row content ">
            <div class=" col-md-9 mb-5 py-3 greyitem">
                <h2 class="text-center text-dark">Nos formations</h2>
                <div class="row catego ">
                    <div class="col-lg-12 col-sm-4 portfolio-item">
                        <div class="row content border">
                            <div class="col-6 h-100">
                                <a href="{{route('html')}}"><img class="card-img-top" src="{{asset('images/code_html1.jpeg')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-6 h-100">
                                <h5 class="text-center text-dark ">Bloc HTML</h5>
                                <p>HTML signifie « HyperText Markup Language » qu'on peut traduire par 
                                    « langage de balises pour l'hypertexte ».</p>
                                    <div class="row titre">
                                        <div class="col-md-6 icon" >
                                            <img class="icon" src="{{asset('images/logo_HTML.jpeg')}}" height="250" width="250" alt="">
                                        </div>
                                        <div class="col-md-6">
                                             <a href="{{route('html')}}" class="tree-item_link">voir la formation</a>   
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-4 portfolio-item">
                        <div class="row content border">
                            <div class="col-6 h-100">
                                <a href="{{route('css')}}"><img class="card-img-top" src="{{asset('images/css_code.png')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-6 h-100">
                                <h5 class="text-center text-dark">Bloc CSS</h5>
                                <p>CSS (Cascading Style Sheets), c'est cet autre langage qui vient compléter le HTML.</p>
                                <div class="row titre">
                                        <div class="col-md-6">
                                            <img class=" icon" src="{{asset('images/logo_css.png')}}" height="250" width="250" alt="">
                                        </div>
                                        <div class="col-md-6">
                                             <a href="{{route('css')}}" class="tree-item_link">voir la formation</a>   
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-4 portfolio-item">
                        <div class="row content border">
                            <div class="col-6 h-100">
                                <h5 class="text-center text-dark">Bloc PHP</h5>
                                <p>PHP est un langage de programmation compilé à la volée très utilisé pour produire des pages Web dynamique.
                                     C'est un langage très abordables qui va vous permettre de créer vos premiers site web dynamiques.</p>
                                     <div class="row titre">
                                        <div class="col-md-6">
                                            <img class=" icon" src="{{asset('images/logo_php.jpeg')}}" height="250" width="250" alt="">
                                        </div>
                                        <div class="col-md-6">
                                             <a href="{{route('php')}}" class="tree-item_link"><small>voir la formation</small></a>   
                                        </div>
                                    </div>
                            </div>
                            <div class="col-6 h-100">
                                <a href="{{route('php')}}"><img class="card-img-top" src="{{asset('images/phpdesigner.png')}}" height="250" width="250" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-4 portfolio-item">
                        <div class="row content border">
                            <div class="col-6 h-100">
                                <a href="{{route('java')}}"><img class="card-img-top" src="{{asset('images/code_Javascript.png')}}" height="250" width="250" alt=""></a>
                            </div>
                            <div class="col-6 h-100">
                                <h5 class="text-center text-dark ">Bloc Java script</h5>
                                <p>Le JavaScript va vous permettre de rajouter des intéractions au niveau de vos
                                 éléments HTML et de modifier le DOM.</p>
                                 <div class="row titre">
                                        <div class="col-md-6">
                                            <img class=" icon" src="{{asset('images/logo_JS.png')}}" height="250" width="250" alt="">
                                        </div>
                                        <div class="col-md-6">
                                             <a href="{{route('java')}}" class="tree-item_link"> <span>voir la formation</span> </a>   
                                        </div>
                                    </div>
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
