@extends('includes.template')
@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Categorie {{ $type }} </h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>{{ $type }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-1">
            <div class="row">
            <!-- Products-->
            <div class="col-xl-9 col-lg-8">
                @if (isset($articles))
                    <!-- Products Grid-->
                    <div class="isotope-grid cols-3 mb-2">
                        <div class="gutter-sizer"></div>
                        <div class="grid-sizer"></div>
                        @foreach ($articles as $article)
                            <!-- Product-->
                            <div class="grid-item">
                                <div class="product-card">
                                    <a class="product-thumb" href="{{ route('articles.show', $article->id) }}"><img src="{{ asset('img/shop/products/'.$article->photo ) }}" alt="Product"></a>
                                    <h3 class="product-title"><a href="{{ route('articles.show', $article->id) }}">{{ $article->nom }}</a></h3>
                                    <h4 class="product-price">
                                        ${{ $article->prix }}
                                    </h4>
                                    <div class="product-buttons">
                                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary btn-sm" >Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination-->
                @else
                    <div class="alert alert-info mt-4" role="alert">
                        {{ $message }}
                    </div>
                @endif    
            </div>
            @include('includes.side')
        </div>
    </div>
    <!-- Site Footer-->
    
@endsection