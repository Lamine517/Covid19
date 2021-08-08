@extends('layouts.login')

@section('content')


    <div class="container">
        <div class="box-container">
        
            <form action="{{ route('login')}}" class="formulaire" method="POST">
            @csrf
                <h4 class="form_title"> {{ __('Connexion') }}</h4>
    
                <div class="form_div">
                    <label for="">{{ __('E-Mail Address') }}</label>
                    <input type="text" class="form_input" placeholder="Adresse email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
    
                <div class="form_div">
                    <label for="">{{ __('Password') }}</label>
                    <input type="password" class="form_input" placeholder="Mot de passe" name="password"  required autocomplete="current-password">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
    
                <div class="form_div_check">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >{{ __('Se Souvenir de moi') }}
                </div>
                <br>
    
                <div class="form_div_btn">
                <button type="submit"  class="btn">
                    {{ __('Login') }}
                </button>
                    <!-- <input type="submit" value="Valider"> -->

                    <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                    @endif -->
                </div>
            </form>
        </div>
    </div>

@endsection
