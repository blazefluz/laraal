
@extends('layouts.app')

@section('content')
                 
             
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <div style="display: flex; justify-content: space-between;">
                            <h3 class="breadcrumb-header">Dashboard</h3>
                            
                        </div>
                       
                    </div>
                    
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-white stats-widget">
                                <div class="panel-body">
                                    <div class="pull-left">
                                        <span class="stats-number">{{$user->count()}}</span>
                                        <p class="stats-info">Total Users</p>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fas fa fa-user-o stats-icon text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-white stats-widget">
                                <div class="panel-body">
                                    <div class="pull-left">
                                        <span class="stats-number">{{$lottery->count()}}</span>
                                        <p class="stats-info">Lottery Count</p>
                                    </div>
                                    <div class="pull-right">
                                        <i class="fas fa fa-building-o stats-icon text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                  
                </div><!-- Main Wrapper -->
               
                </div><!-- /Page Inner -->
            
         
        
        @endsection