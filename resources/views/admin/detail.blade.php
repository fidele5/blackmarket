@extends("layouts.app")
@section("content")
@include('admin.breadcumb')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ $article->nom }}</h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="white-box text-center"> 
                                            <img src="{{ asset('img/shop/products/'.$article->photo ) }}" width="100%" class="img-responsive"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-6">
                                        <h4 class="box-title mt-5">Product description</h4>
                                        <p>
                                            {{ $article->description }}
                                        </p>
                                        <h2 class="mt-5">${{ $article->prix }}</h2>
                                        <a class="btn btn-dark btn-rounded mr-1 delete" lien="{{ route('deleteProduit') }}" val="{{ $article->id }}"data-toggle="tooltip" title="" data-original-title="Supprimer"><i class="ti-trash"></i> </button>
                                        <a href="{{ route('editProduit', $article->id) }}" class="btn btn-primary btn-rounded" data-toggle="tooltip" title="" data-original-title="Modifier"> <i class="ti-pencil-alt"></i> </a>
                                        <h3 class="box-title mt-5">Key Highlights</h3>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success"></i> Sturdy structure</li>
                                            <li><i class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                                            <li><i class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection