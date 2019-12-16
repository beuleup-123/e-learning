@extends("layouts.app")
@section("content")
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">E-learning <br>
                <small>Formation en ligne</small>
            </h1>

            <!-- Blog Post -->
            <div class="card mb-4">

                <div class="card-body">
                    <h2 class="card-title">Homedu</h2>
                    <p class="card-text">Homedu est site de formation en ligne.Il propose des cours en Web design,en HTML,en JavaScript,css et aussi des Tutorials</p>
                    <a href="#" class="btn btn-primary">Lire la suite &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    <a href="#">Homedu</a>
                </div>
            </div>

            <!-- Blog Post -->
            <hr width="50">
            <div class="card mb-4">
                <table class="table ">
                    <tr>
                    </tr>

                    @foreach($cours as $cours)
                        <tr>
                            <td></td>
                            <td>
                                <!--a href="{{$cours->image ? asset($cours->image) : asset('uploads/cours/Apprendre le CSS.pdf')}}">{{$cours->nom}}</a-->
                                 <a href="{{$cours->description ? asset($cours->description) : asset('uploads/cours/Apprendre le CSS.pdf')}}">{{$cours->nom}}</a>
                            </td>
                            <td>{{$cours->description}}</td>
                            <td>{{$cours->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <!-- Blog Post -->
            <div class="card mb-5">
            </div>
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
<!-- /.container -->
 @endsection
