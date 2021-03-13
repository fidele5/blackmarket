@extends('includes.template')
@section('content')
        <!-- Off-Canvas Wrapper-->
        <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
            <div class="column">
                <h1>Checkout</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                <li><a href="index.html">Home</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>Checkout</li>
                </ul>
            </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="card text-center">
            <div class="card-body padding-top-2x">
                <h3 class="card-title">Nous vous remercions de votre commande!</h3>
                <p class="card-text">Votre commande a été passée et sera traitée dans les plus brefs délais..</p>
                <p class="card-text">Vous recevrez sous peu la réponse du vendeur! 
                <u>Merci pour votre confiance:</u>
                </p>
                <div class="padding-top-1x padding-bottom-1x"><a class="btn btn-outline-secondary" href="{{ route('articles.index') }}">Voir Articles</a><a class="btn btn-outline-primary" href="/"><i class="icon-home"></i>&nbsp;Accueil</a></div>
            </div>
            </div>
        </div>
        <!-- Site Footer-->
@endsection