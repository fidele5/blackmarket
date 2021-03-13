@extends('includes.template')

@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Password Recovery</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li><a href="/account">Account</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>Password Recovery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2>Forgot your password?</h2>
                    <p>Change your password in three easy steps. This helps to keep your new password secure.</p>
                    <ol class="list-unstyled">
                        <li><span class="text-primary text-medium">1. </span>Fill in your email address below.</li>
                        <li><span class="text-primary text-medium">2. </span>We'll email you a temporary code.</li>
                        <li><span class="text-primary text-medium">3. </span>Use the code to change your password on our secure website.</li>
                    </ol>
                    <form class="card mt-4" method="POST" action="{{ route('password.confirm') }}">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email-for-pass">Enter your email address</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="text" id="email-for-pass" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                    </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
@endsection
