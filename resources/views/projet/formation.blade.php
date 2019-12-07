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
                <img class="card-img-top" src="../images/blake-connally-B3l0g6HLxr8-unsplash.jpg" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">HackWeb</h2>
                    <p class="card-text">HackWeb est site de formation en ligne.Il propose des cours en Web design,en HTML,en JavaScript,css et aussi des Tutorials</p>
                    <a href="#" class="btn btn-primary">Lire la suite &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Poster en Novembre 2, 2019 par
                    <a href="#">HackWeb</a>
                </div>
            </div>

            <!-- Blog Post -->
            <hr width="50"><div class="card mb-4">
                <img class="card-img-top" src="../e-learning-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Cours en JavaScript lecon1</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                    <a href="#" class="btn btn-primary">Lire la suite &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Poster en Octobre 30, 2019 par
                    <a href="#">HackWeb</a>
                </div>
            </div>

            <!-- Blog Post -->
            <div class="card mb-5">
                <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">Cours en HTML5</h2>
                    <p class="card-text">Le  but  premier  de  ce  cours  est  de  vous  apprendre  pas  à  pas  à  coder en  HTML5  et  en  CSS3.  Outre  cela,  je  vais  également  m’appliquer  à vous montrer la logique et les mécanismes derrière ces deux langages afin  que  vous  compreniez  ce  que  vous  faîtes  et  que  vous  deveniez vite autonomes. Ce cours est divisé en trois parties, progressives :  •Une première partie avec un peu de théorie dans laquelle nous poserons les bases pour un apprentissage solide ; •Une  deuxième  partie  dans  laquelle  nous  verrons  comment positionner  les  différents  éléments  de  notre  site  et  comment personnaliser nos textes ;  •Une  dernière  partie  où  nous  explorerons  les  fonctionnalités avancées   du   HTML5   et   du   CSS3   (insertion   de   vidéos, formulaires, responsive design, etc.). Au  fil  de  ce  cours,  nous  aborderons  également  d’autres  langages comme  le  XHTML  ou  le  PhP  lorsque  cela  justifié  et  afin  que  vous ayez une compréhension globale de ce que vous faîtes. A qui s’adresse ce livre ?  Les langages HTML et CSS sont, comme nous allons le voir, à</p>
                    <!--a href="#" class="btn btn-primary">Lire la suite &rarr;</a-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Inscription</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <!-- Side Widget -->
                                    <div class="card my-4">
                                        <!--h5 class="card-header">Inscription</h5-->
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email"
                                                       class="form-control"
                                                       id="exampleInputEmail1"
                                                       aria-describedby="emailHelp"
                                                       placeholder="Enter email">
                                                <small id="emailHelp"
                                                       class="form-text text-muted">Votre email ne sera jamais partage avec personne d'autre</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Passeword</label>
                                                <input type="password"
                                                       class="form-control"
                                                       id="exampleInputPassword1"
                                                       placeholder="Password">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox"
                                                       class="form-check-input"
                                                       id="exampleCheck1">
                                                <label class="form-check-label"
                                                       for="exampleCheck1">Check me out</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary" data-dismiss="modal">Inscrire</button>
                                        </form>
                                    </div>
                                    <!--/div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                               </div-->
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            Poster en Octobre 31, 2019 par
                            <a href="#">HackWeb</a>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item">
                            <a class="page-link" href="#">&larr; Plus Haut</a>
                        </li>
                        <li class="page-item disabled">
                            <!--a class="page-link" href="#">Plus Bas &rarr;</a-->
                        </li>
                    </ul>

                </div>
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
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
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
