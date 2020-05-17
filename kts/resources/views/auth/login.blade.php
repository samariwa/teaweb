@extends('layouts.app')

@section('content')
<div class="container">
    <div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="opacity: 0.8">
               
        
                  <br>  
                <h4 style="text-align: center;">Login</h4>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                         <br><br>
                        <div class="form-group row" >
                            <label for="email"  class="offset-md-2 col-form-label text-md-right">Username:</label>

                            <div class="col-md-6 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row" >
                            <label for="password" class="  offset-md-2 col-form-label text-md-right">Password:</label>

                            <div class="col-md-6 ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><br><br>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <br><br>
            </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</div>
@endsection
