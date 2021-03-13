@extends('includes.template')
@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>{{ $article->nom }}</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li><a href="{{ route('articles.index') }}">Articles</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>{{ $article->nom }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-1">
            <div class="row">
                <!-- Poduct Gallery-->
                <div class="col-md-6">
                    <div class="product-gallery"><span class="product-badge text-danger">30% Off</span>
                        <div class="gallery-wrapper">
                            <div class="gallery-item video-btn text-center"><a href="#" data-toggle="tooltip" data-type="video" data-video="&lt;div class=&quot;wrapper&quot;&gt;&lt;div class=&quot;video-wrapper&quot;&gt;&lt;iframe class=&quot;pswp__video&quot; width=&quot;960&quot; height=&quot;640&quot; src=_/www.youtube.com/embed/B81qd2v6alw438d.html?rel=0%22 frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/div&gt;" title="Watch video"></a></div>
                        </div>
                        <div class="product-carousel owl-carousel gallery-wrapper">
                            <div class="gallery-item" data-hash="one"><a href="{{ asset('img/shop/products/'.$article->photo) }}" data-size="1000x667"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="{{ $article->nom }}"></a></div>
                            <div class="gallery-item" data-hash="two"><a href="{{ asset('img/shop/products/'.$article->photo) }}" data-size="1000x667"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="{{ $article->nom }}"></a></div>
                            <div class="gallery-item" data-hash="three"><a href="{{ asset('img/shop/products/'.$article->photo) }}" data-size="1000x667"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="{{ $article->nom }}"></a></div>
                            <div class="gallery-item" data-hash="four"><a href="{{ asset('img/shop/products/'.$article->photo) }}" data-size="1000x667"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="{{ $article->nom }}"></a></div>
                            <div class="gallery-item" data-hash="five"><a href="{{ asset('img/shop/products/'.$article->photo) }}" data-size="1000x667"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="{{ $article->nom }}"></a></div>
                        </div>
                        <ul class="product-thumbnails">
                            <li class="active"><a href="#one"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="Product"></a></li>
                            <li><a href="#two"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="Product"></a></li>
                            <li><a href="#three"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="Product"></a></li>
                            <li><a href="#four"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="Product"></a></li>
                            <li><a href="#five"><img src="{{ asset('img/shop/products/'.$article->photo) }}" alt="Product"></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Product Info-->
                <div class="col-md-6">
                    <div class="padding-top-2x mt-2 hidden-md-up"></div>
                    <div class="rating-stars">
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star filled"></i>
                        <i class="icon-star"></i>
                    </div><span class="text-muted align-middle">&nbsp;&nbsp;4.2 | 3 customer reviews</span>
                    <h2 class="padding-top-1x text-normal">{{ $article->nom }}</h2>
                    <span class="h2 d-block">${{ $article->prix }}</span>
                    <p>{{ $article->description }}.</p>
                    <div class="pt-1 mb-2"><span class="text-medium">SKU:</span> #{{ $article->id }}</div>
                    <div class="padding-bottom-1x mb-2"><span class="text-medium">Categories:&nbsp;</span><a class="navi-link" href="{{ route('types.show', $article->type->id) }}">{{ $article->type->libelle }}</a></div>
                    <hr class="mb-3">
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="entry-share mt-2 mb-2"><span class="text-muted">Share:</span>
                            <div class="share-links"><a class="social-button shape-circle sb-facebook" href="{{ route('facebook') }}" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                        </div>
                        <div class="sp-buttons mt-2 mb-2">
                            <a href="{{ route("checkout", $article->id) }}" class="btn btn-primary" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-phone"></i> Contacter vendeur</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Products Carousel-->
            @if (isset($related))
                <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">Vous pourriez aussi aimer</h3>
                <!-- Carousel-->
                <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
                    <!-- Product-->
                    @foreach ($related as $item)
                    <div class="grid-item">
                        <div class="product-card">
                            <a class="product-thumb" href="{{ route('articles.show', $item->id) }}"><img src="{{ asset('img/shop/products/'.$item->photo) }}" alt="Product"></a>
                            <h3 class="product-title"><a href="{{ route('articles.show', $item->id) }}">{{ $item->nom }}</a></h3>
                            <h4 class="product-price">
                                {{ $item->prix }}
                            </h4>
                            <div class="product-buttons">
                                <a href="{{ route('articles.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            @endif
        </div>
@endsection