
@extends('layouts.app')

@section('content')
                 
             
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <div style="display: flex; justify-content: space-between;">
                            <h3 class="breadcrumb-header">Add User</h3>
                            <div style="margin: auto 0;">
                                <a href="{{url('/add_property')}}" class="btn btn-primary">Add User</a>
                            </div>
                        </div>
                    </div>
                    
                <div id="main-wrapper"  >
                    <div class="row" >
                        <div class="col-md-6" >
                            <div class="panel panel-white" style="margin:0 auto">
                                <div class="panel-body">
                                    <form method="POST" action="{{ url('admin/user/add') }}"  style="font-size: 14px !important">
                                        @csrf
                        
                                        <div class="form-group ">
                                            <label for="name" >{{ __('Full name') }}</label>
                        
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full name" required autocomplete="name" autofocus>
                        
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                        
                                        <div class="form-group ">
                                            <label for="email" >{{ __('E-Mail Address') }}</label>
                        
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                        
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group ">
                                            <label for="phone" >{{ __('Phone') }}</label>
                        
                                            <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone number" required autocomplete="phone">
                        
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                        
                                        <div class="form-group ">
                                            <label for="password" >{{ __('Password') }}</label>
                        
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                           
                                        </div>
                        
                                      
                                        <div class="form-group ">
                                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                        
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                  
                </div><!-- Main Wrapper -->
               
                </div><!-- /Page Inner -->
            
         
        
        @endsection