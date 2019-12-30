@extends("layouts._navbar")
@section("content")
        <div id="col-md-9 ">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-4 col-sm-4 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">{{$cours_count}} Cours</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="/cours">
                                <span class="float-left">Liste des cours</span>
                                <span class="float-right"><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">{{$categories_count}} Categories</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="/categories">
                                <span class="float-left">Liste des categories</span>
                                <span class="float-right"><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-4 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">{{$profs_count}} Professeurs</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="/profs">
                                <span class="float-left">Liste des professeurs</span>
                                <span class="float-right"><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


