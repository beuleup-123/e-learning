@extends("layouts._navbar")
@section("content")
        <div class=" contenu ">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
                <!-- Icon Cards-->
                <div class="row content">
                    <div class="col-xl-4 col-sm-4 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <div class="mr-5"><i class="fas fa-fw fa-book"></i> {{$cours_count}} Cours</div>
                                </div>  
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
                                  <div class="mr-5"><i class="fas fa-fw fa-list"></i> {{$categories_count}} Categories</div>
                                </div> 
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
                                   <div class="mr-5"> <i class="fas fa-fw fa-users"></i>{{$profs_count}} Professeurs</div>
                                </div>  
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="/profs">
                                <span class="float-left">Liste des professeurs</span>
                                <span class="float-right"><i class="fas fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
@endsection


