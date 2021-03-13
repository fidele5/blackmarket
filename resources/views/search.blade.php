@extends('includes.template')
@section('content')
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        @if (isset($query))
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Search Results for: {{ $query }}</h1>
                </div>
                <div class="column"></div>
            </div>
        </div>
        @endif
      
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
                <!-- Results-->
                <div class="col-xl-9 col-lg-8">
                    @if(isset($articles))
                    <div class="isotope-grid cols-3 mb-2">
                        <div class="gutter-sizer"></div>
                        <div class="grid-sizer"></div>
                        @foreach ($articles as $article)
                            <!-- Product-->
                            <div class="grid-item">
                                <div class="product-card">
                                    <a class="product-thumb" href="{{ route('articles.show', $article->id) }}"><img src="{{ asset('img/shop/products/'.$article->photo ) }}" alt="Product"></a>
                                    <h3 class="product-title"><a href="{{ route('articles.show', $article->id) }}"><?= highlightKeywords($article->nom, $query) ?></a></h3>
                                    <h4 class="product-price">
                                        ${{ $article->prix }}
                                    </h4> 
                                    
                                    <p class="text-muted text-center">
                                        <?= highlightKeywords($article->description, $query) ?>
                                    </p>
                                    <div class="product-buttons">
                                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-outline-primary btn-sm" >Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination-->
                    {{ $articles->links("vendor.pagination.simple-tailwind") }}
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

      
        <?php 
            function highlightKeywords($text, $keyword) {
                $wordsAry = explode(" ", $keyword);
                $wordsCount = count($wordsAry);
                
                for($i=0;$i<$wordsCount;$i++) {
                    $highlighted_text = "<span class='text-highlighted'>$wordsAry[$i]</span>";
                    $text = str_ireplace($wordsAry[$i], $highlighted_text, $text);
                }

                return $text;
            }
      ?>
    
@endsection