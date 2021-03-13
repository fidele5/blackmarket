@extends('includes.template')
@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Categories</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>Categories</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-2x mb-2">
            <div class="row">
                <!-- Sidebar          -->
                @include('includes.side')
                <!-- Categories-->
                <div class="col-lg-9">
                    <!-- Promo banner-->
                    <div class="alert alert-image-bg alert-dismissible fade show text-center mb-4" style="background-image: url(img/banners/alert-bg.jpg)"><span class="alert-close text-white" data-dismiss="alert"></span>
                        <div class="h3 text-medium text-white padding-top-1x padding-bottom-1x"><i class="icon-clock" style="font-size: 33px; margin-top: -5px;"></i>&nbsp;&nbsp;Check our Limited Offers. Save up to 50%&nbsp;&nbsp;&nbsp;
                            <div class="mt-3 hidden-xl-up"></div><a class="btn btn-primary" href="{{ route('articles.index') }}">View Offers</a>
                        </div>
                    </div>
                    <div class="row">
                    <?php
                        $categories = Helper::getCategories()
                    ?>
                    @foreach ($categories as $item)
                        <div class="col-sm-6">
                            <div class="card mb-30"><a class="card-img-tiles" href="{{ route('types.show', strtolower($item->id)) }}">
                                <div class="inner">
                                    <div class="main-img"><img src="img/shop/categories/01.jpg" alt="Category"></div>
                                    <div class="thumblist"><img src="img/shop/categories/02.jpg" alt="Category"><img src="img/shop/categories/03.jpg" alt="Category"></div>
                                </div></a>
                                <div class="card-body text-center">
                                    <h4 class="card-title">{{ $item->libelle }}</h4>
                                    <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="{{ route('types.show', strtolower($item->id)) }}">Voir les produits</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Site Footer-->
@endsection