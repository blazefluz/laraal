@extends('layouts.auth')

@section('content')
<div id="main-wrapper" class="container-fluid">
    @if (session('confirmation'))
    <div class="alert alert-info" role="alert">
        {!! session('confirmation') !!}
    </div>
    @endif

    @if ($errors->has('confirmation') > 0 )
        <div class="alert alert-danger" role="alert">
            {!! $errors->first('confirmation') !!}
        </div>
    @endif
    <div class="row ">
       
        <div class="col-md-4 card"  style="margin:0 auto">
            <div class=" card-body ">
                <h4 class="card-title">Sign in to your account</h4>
              
                <form method="POST" action="{{ route('login') }}" style="font-size: 14px !important">
                    @csrf
                    <div class="form-group ">
                        <label for="email" >{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
    
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
    
                    <div class="form-group row">
                        <div class="col-md-12 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
    
                    <div class="form-group text-center">
                        <div class="col-md-12  ">
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                     <div class="form-group row text-center">
                        <div class="col-md-12  ">
                            Not yet registered? <a href="/register" >
                                {{ __('Sign Up') }}
                            </a>
                            <br>
                            @if (Route::has('password.request'))
                                <a class=" btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
