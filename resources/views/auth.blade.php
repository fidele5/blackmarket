@extends('includes.template')
@section('content')
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
        <!-- Page Title-->
        <div class="page-title">
            <div class="container">
                <div class="column">
                    <h1>Connexion / Authentification</h1>
                </div>
                <div class="column">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <li class="separator">&nbsp;</li>
                        <li><a href="account/profile">Account</a></li>
                        <li class="separator">&nbsp;</li>
                        <li>Login / Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <div class="container padding-bottom-3x mb-2">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="margin-bottom-1x">Authentification</h3>
                    @isset($error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div> 
                    @endisset
                    
                    <form class="login-box" method="post" action="{{ route('login') }}">
                        <div class="row margin-bottom-1x">
                            <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block facebook-btn" href="login/facebook"><i class="socicon-facebook"></i>&nbsp;Facebook</a></div>
                            <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block twitter-btn" href="login/google"><i class="socicon-twitter"></i>&nbsp;Twitter</a></div>
                            <div class="col-xl-4 col-md-6 col-sm-4"><a class="btn btn-sm btn-block google-btn" href="login/google"><i class="socicon-googleplus"></i>&nbsp;Google+</a></div>
                        </div>
                        <h4 class="margin-bottom-1x">Or using form below</h4>
                        @csrf
                        <div class="form-group input-group">
                            <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="Email" required><span class="input-group-addon"><i class="icon-mail"></i></span>
                            @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group input-group">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required><span class="input-group-addon"><i class="icon-lock"></i></span>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-wrap justify-content-between padding-bottom-1x">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember_me" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember_me">Remember me</label>
                            </div><a class="navi-link" href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                        <div class="text-center text-sm-right">
                            <button class="btn btn-primary margin-bottom-none" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="padding-top-3x hidden-md-up"></div>
                    
                    <h3 class="margin-bottom-1x">No Account? Register</h3>
                    <form class="row" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-fn">Nom</label>
                                <input class="form-control {{ $errors->has('nom')?'is-invalid':'' }}" type="text" name="nom" id="reg-fn" value="{{ old("nom") }}">
                                @error("nom")
                                    <div class="{{ $errors->has('nom')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('nom') }}
                                    </div>
                                @enderror
                               
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-ln">Prenom</label>
                                <input class="form-control {{ $errors->has('prenom')?'is-invalid':'' }}" type="text" name="prenom" id="reg-ln" value="{{ old("prenom") }}">
                                @error("prenom")
                                    <div class="{{ $errors->has('prenom')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('prenom') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-user">Login</label>
                                <input class="form-control {{ $errors->has('username')?'is-invalid':'' }}" type="text" name="username" id="reg-user" value="{{ old("username") }}">
                                @error("username")
                                    <div class="{{ $errors->has('username')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('username') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-email">E-mail Address</label>
                                <input class="form-control {{ $errors->has('email')?'is-invalid':'' }}" type="email" name="email" id="reg-email" value="{{ old('email') }}">
                                @error("email")
                                    <div class="{{ $errors->has('email')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('email') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Numero de telephone</label>
                                <input class="form-control {{ $errors->has('telephone1')?'is-invalid':'' }}" type="tel" id="reg-phone" name="telephone1" {{ old('telephone1') }}>
                                @error("telephone1")
                                    <div class="{{ $errors->has('telephone1')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('telephone1') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone2">Numero de telephone</label>
                                <input class="form-control" type="tel" id="reg-phone2" name="telephone2" value="{{ old('telephone2') }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass">Mot de passe</label>
                                <input class="form-control {{ $errors->has('password')?'is-invalid':'' }}" name="password" type="password" id="passwword" id="reg-pass" >
                                @error("password")
                                    <div class="{{ $errors->has('password')?'invalid-feedback':'valid-feedback' }}">
                                        {{ $errors->first('password') }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-pass-confirm">Confirmer mot de passe</label>
                                <input class="form-control  {{ $errors->has('password')?'is-invalid':'' }}" type="password" name="password_confirmation" id="reg-pass-confirm">
                            </div>
                        </div>
                        <div class="col-12 text-center text-sm-right">
                            <button class="btn btn-primary margin-bottom-none" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection