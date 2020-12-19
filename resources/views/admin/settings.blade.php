@extends('layouts.app')

@section('content')
<div class="page-inner ">
    <div class="page-title">
        <h3 class="breadcrumb-header">Settings</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active"><a href="#tab21" role="tab" data-toggle="tab" aria-expanded="false">Personal details</a></li>
                                <li role="presentation" class=""><a href="#tab22" role="tab" data-toggle="tab" aria-expanded="false">Payment Settings</a></li>
                                <li role="presentation" class=""><a href="#tab23" role="tab" data-toggle="tab" aria-expanded="true">Change password</a></li>
                            </ul>
                            <!-- Tab panes -->
                           
                            <div class="tab-content">
                            
                                <div role="tabpanel" class="tab-pane fade active in" id="tab21">
                                <form action="/profile-update" method="post">
                                        @csrf
                                    <div class="col-md-12">
                                            <div class="form-group col-md-6">
                                              <label for="name">Contact Name *</label>
                                              <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" placeholder="Contact Name *">
                                            </div>

                                            <div class="form-group col-md-6">
                                              <label for="email">Email Address *</label>
                                              <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email Address *">
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label for="phone">Phone Number *</label>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}" placeholder="0800000000">
                                            </div>

                                           
                                           
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="tab22">
                                
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="tab23">
                                    <div class="col-md-6">
                                            <form method="POST" action="{{ route('change.password') }}">
                                                @csrf 
                           
                                                 @foreach ($errors->all() as $error)
                                                    <p class="text-danger">{{ $error }}</p>
                                                 @endforeach 
                          
                                                <div class="form-group row">
                                                    <label for="password" >Current Password</label>
                          
                                                        <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                                </div>
                          
                                                <div class="form-group row">
                                                    <label for="password" >New Password</label>
                          
                                                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                                </div>
                          
                                                <div class="form-group row">
                                                    <label for="password" >New Confirm Password</label>
                            
                                                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                                    
                                                </div>
                           
                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            Update Password
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                               
                            </div>
                           
                        </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
  
    </div>
    
    @endsection