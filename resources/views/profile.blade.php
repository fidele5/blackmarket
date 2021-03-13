@extends('includes.template')
@section('content')
<!-- Off-Canvas Wrapper-->
        <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Mon Compte</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li><a href="account">Account</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="loading" style="display: none">Loading&#8230;</div>
            <div class="row">
                @include('user.nav')
                <div id="content" class="col-lg-8">
                    <div class="detroit" style="display: none">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Site Footer-->
@endsection