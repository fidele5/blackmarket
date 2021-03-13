@extends('includes.template')
@section('content')
    <!-- Page Content-->
      <!-- Main Slider-->
      <section class="hero-slider" style="background-image: url({{ asset('img/hero-slider/main-bg.jpg') }});">
        <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="{{ asset('img/hero-slider/logo02.png') }}" alt="Puma">
                    <div class="h2 text-body text-normal mb-2 pt-1">Puma Backpacks Collection</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">starting at <span class="text-bold">$37.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="{{ route('articles.index') }}">View Offers</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('img/hero-slider/02.png') }}" alt="Puma Backpack"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block w-200 mb-4" src="{{ asset('img/hero-slider/logo01.png') }}" alt="Converse">
                    <div class="h2 text-body text-normal mb-2 pt-1">Chuck Taylor All Star II</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$59.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="{{ route('articles.index') }}">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('img/hero-slider/01.png') }}" alt="Chuck Taylor All Star II"></div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="container padding-top-3x">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                  <div class="from-bottom"><img class="d-inline-block mb-4" src="{{ asset('img/hero-slider/logo03.png') }}" style="width: 125px;" alt="Motorola">
                    <div class="h2 text-body text-normal mb-2 pt-1">Smart Watch Moto 360 2nd</div>
                    <div class="h2 text-body text-normal mb-4 pb-1">for only <span class="text-bold">$299.99</span></div>
                  </div><a class="btn btn-primary scale-up delay-1" href="{{ route('articles.index') }}">Shop Now</a>
                </div>
                <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('img/hero-slider/03.png') }}" alt="Moto 360"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Top Categories-->
      <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Top Categories</h3>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="{{ route('articles.index') }}">
                <div class="inner">
                  <div class="main-img"><img src="{{ asset('img/shop/categories/01.jpg') }}" alt="Category"></div>
                  <div class="thumblist"><img src="{{ asset('img/shop/categories/02.jpg') }}" alt="Category"><img src="{{ asset('img/shop/categories/03.jpg') }}" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Clothing</h4>
                <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="{{ route('types.show', 'vetements') }}">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="{{ route('articles.index') }}">
                <div class="inner">
                  <div class="main-img"><img src="{{ asset('img/shop/categories/04.jpg') }}" alt="Category"></div>
                  <div class="thumblist"><img src="{{ asset('img/shop/categories/05.jpg') }}" alt="Category"><img src="{{ asset('img/shop/categories/06.jpg') }}" alt="Category"></div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Shoes</h4>
                <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="{{ route('types.show', 'chaussures') }}">View Products</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="{{ route('articles.index') }}">
                <div class="inner">
                  <div class="main-img">
                    <img src="{{ asset('img/shop/categories/07.jpg') }}" alt="Category">
                  </div>
                  <div class="thumblist">
                    <img src="{{ asset('img/shop/categories/08.jpg') }}" alt="Category">
                    <img src="{{ asset('img/shop/categories/09.jpg') }}" alt="Category">
                  </div>
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Bags</h4>
                <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="{{ route('types.show', 'sacs') }}">View Products</a>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center"><a class="btn btn-outline-secondary margin-top-none" href="{{ route('types.index') }}">All Categories</a></div>
      </section>
      @if (isset($articles))
        <section class="container padding-top-3x padding-bottom-3x">
          <h3 class="text-center mb-30">Featured Products</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <!-- Product-->
            @foreach ($articles as $item)
              <div class="grid-item">
                <div class="product-card">
                  <a class="product-thumb" href="{{ route('articles.show', $item->id) }}"><img class="card-image" src="{{ asset('img/shop/products/'.$item->photo) }}" alt="Product"></a>
                  <h3 class="product-title"><a href="{{ route('articles.show', $item->id) }}">{{ $item->nom }}</a></h3>
                  <h4 class="product-price">
                  ${{ $item->prix }}
                  </h4>
                  <div class="product-buttons">
                    <a href="{{ route('articles.show', $item->id) }}" class="btn btn-outline-primary btn-sm">Details</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </section>
      @endif
      <!-- Popular Brands-->
      <section class="bg-faded padding-top-3x padding-bottom-3x">
        <div class="container">
          <h3 class="text-center mb-30 pb-2">Popular Brands</h3>
          <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;470&quot;:{&quot;items&quot;:3},&quot;630&quot;:{&quot;items&quot;:4},&quot;991&quot;:{&quot;items&quot;:5},&quot;1200&quot;:{&quot;items&quot;:6}} }"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/01.png') }}" alt="Adidas"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/02.png') }}" alt="Brooks"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/03.png') }}" alt="Valentino"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/04.png') }}" alt="Nike"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/05.png') }}" alt="Puma"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/06.png') }}" alt="New Balance"><img class="d-block w-110 opacity-75 m-auto" src="{{ asset('img/brands/07.png') }}" alt="Dior"></div>
        </div>
      </section>
      <!-- Services-->
@endsection