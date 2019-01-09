@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <!--<div class="container">
        <div class="row justify-content-center" id="fond-login">
            <div class="col-md-8">
                <div class="card" id="fond-login">
                    <div class="card-header">{{ __('Connexion') }}</div>
                            <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Adresse e-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                <br>
                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                <br>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se Souvenir De Moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Connexion') }}
                                    </button>
                                    <br>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" id="oubli-mdp" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class='login'>
        <div class='login_inner'>
            <div class='login_inner__avatar'></div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus placeholder='Votre Email'>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder='Votre Mot De Passe'>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Se Souvenir De Moi') }}
                    </label>
                </div>
                <input type='submit' value='Se Connecter'>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"><input type="button" id="rememberbtn" placeholder="MDP Oublié ?"></a>
                    @endif
            </form>
        </div>
    </div>

@endsection
