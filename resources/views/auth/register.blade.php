@extends('layouts.auth')

@section('content')
<div id="main-wrapper" class="container-fluid">
    <div class="row ">
    
        <div class="col-md-5 card"  style="margin:0 auto">
            <div class="card-body">
                <h4 class="card-title">Sign Up</h4>
              
                <form method="POST" action="{{ route('register') }}"  style="font-size: 14px !important">
                    @csrf
    
                    <div class="form-group ">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username" autofocus>
    
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
    
                    <div class="form-group ">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
    
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   
    
                    <div class="form-group ">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
                    </div>
    
                  
                    <div class="form-group ">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                 
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agree" required>
                            <label class="form-check-label" for="agree">
                                <small> By submitting, I accept cmpetas's terms of use.</small>
                            </label>
                        </div>
                    </div>
                    <div class="form-group ">   
                        <div class="col-md-12 ">
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
