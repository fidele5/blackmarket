@extends('includes.template')
@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Checkout {{ $product->article  }}</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="route('home')">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
            <!-- Checkout Adress-->
            <div class="col-xl-9 col-lg-8">
                    <h4>Contacter le vendeur</h4>
                    <hr class="padding-bottom-1x">
                    <div class="table-responsive shopping-cart">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Designation</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                    <div class="product-item"><a class="product-thumb" href="{{ route('articles.show', $product->idart) }}"><img src="{{ asset('img/shop/products/'.$product->photo) }}" alt="Product"></a>
                                        <div class="product-info">
                                        <h4 class="product-title"><a href="{{ route('articles.show', $product->idart) }}">{{ $product->article }}<small>x 1</small></a></h4>
                                        <small><span>{{ $product->description }}</span></small>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="text-center text-lg text-medium">${{ $product->prix }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shopping-cart-footer">
                        <div class="column"></div>
                        <div class="column text-lg">Total: <span class="text-medium">${{ $product->prix }}</span></div>
                    </div>
                    <div class="row padding-top-1x mt-3">
                        <div class="col-sm-6">
                            <h5>Contacter le vendeur</h5>
                            <div class="alert alert-danger" id="error" style="display: none" role="alert">
                                Une erreur sest produite !! veuillez réessayer
                            </div>
                            <form id="contact" class="row" method="post">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="review_name">Nom </label>
                                    <input class="form-control form-control-rounded" name="nom" type="tel" id="review_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="review_email">Prenom </label>
                                    <input class="form-control form-control-rounded" name="prenom" type="email" id="review_email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="review_name">Numero de telephone</label>
                                    <input class="form-control form-control-rounded" name="telephone" type="tel" id="review_name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <label for="review_email">Votre adresse email</label>
                                    <input class="form-control form-control-rounded" name="email" type="email" id="review_email" required>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-group">
                                    <label for="review_text">Votre message </label>
                                    <textarea name="message" class="form-control form-control-rounded" id="review_text" rows="8" required></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="produit" value="{{ $product->idart }}"/>
                            </form>
                            <div class="btn-group" role="group" aria-label="Contact">
                                <button class="btn btn-success submit" route="{{ route('whatsap') }}" type="button">Whatsap</button>
                                <button class="btn btn-square btn-info submit" route="{{ route('telegram') }}" type="button">Telegram</button>
                                <button class="btn submit" route="{{ route('email') }}" style="border-radius: 0px 30px 30px 0px; background-color: #f44336; color:white;" type="button">
                                    Gmail</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5>Contacts </h5>
                            <div class="card mb-30">
                                <img class="card-img-top" src="/img/contacts/orlando.jpg" alt="Orlando">
                                <div class="card-body">
                                    <ul class="list-icon">
                                        <li> <i class="icon-user"></i> {{ $product->vendeur }}</li>
                                        <li> <i class="icon-map"></i>{{ $product->province }}, {{ $product->ville }}. {{ $product->commune }}, RDC</li>
                                        <li> <i class="icon-bell"></i>{{ $product->phone1 }}</li>
                                        <li> <i class="icon-mail"></i><a class="navi-link" href="mailto:{{ $product->email }}">orlando.store@unishop.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>   
            </div>
            <!-- Sidebar          -->
            <div class="col-xl-3 col-lg-4">
                <aside class="sidebar">
                    <div class="padding-top-2x hidden-lg-up"></div>
                    <!-- Order Summary Widget-->
                    <section class="widget widget-order-summary">
                        <h3 class="widget-title">resumé de la commande</h3>
                        <table class="table">
                            <tr>
                                <td>Total:</td>
                                <td class="text-medium">${{ $product->prix }}</td>
                            </tr>
                            <tr>
                                <td>Transport:</td>
                                <td class="text-medium">$0</td>
                            </tr>
                            <tr>
                                <td>Taxes:</td>
                                <td class="text-medium">$0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-lg text-medium">${{ $product->prix }}</td>
                            </tr>
                        </table>
                    </section>
                    <!-- Featured Products Widget-->
                    <!-- Entry-->
                    @if (session()->has('viewed'))
                    <section class="widget widget-featured-products">
                        <h3 class="widget-title">Vus récemment</h3>   
                        @foreach (session('viewed') as $item)
                            <div class="entry">
                                <div class="entry-thumb"><a href="{{ route('articles.show', $item->id) }}"><img src="{{ asset('img/shop/products/'.$item->photo) }}" alt="Product"></a></div>
                                <div class="entry-content">
                                    <h4 class="entry-title"><a href="{{ route('articles.show', $item->id) }}">{{ $item->nom }}</a></h4><span class="entry-meta">${{ $item->prix }}</span>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    @endif
                    <!-- Promo Banner-->
                    <section class="promo-box" style="background-image: url({{ asset('img/banners/02.jpg') }});"><span class="overlay-dark" style="opacity: .4;"></span>
                        <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                            <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                            <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-outline-white btn-sm" href="{{ route('articles.index') }}">Shop Now</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
    <!-- Site Footer-->
@endsection