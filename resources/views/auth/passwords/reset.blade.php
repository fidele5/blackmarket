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
                        <li><a href="index.html">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li><a href="account-orders.html">Account</a></li>
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
                    <form method="POST" action="{{ route('password.update') }}">
                        <div class="card-body">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Site Footer-->
@endsection
