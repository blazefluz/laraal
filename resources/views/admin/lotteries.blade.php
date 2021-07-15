
@extends('layouts.app')

@section('content')
                 
             
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <div style="display: flex; justify-content: space-between;">
                            <h3 class="breadcrumb-header">Lotteries</h3>
                            <div style="margin: auto 0;">
                                <a href="{{url('/admin/lottery/add')}}" class="btn btn-primary">Add Lottery</a>
                            </div>
                        </div>
                    </div>
                    
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th>Code</th>
                                                    <th>Category</th>
                                                    <th>price</th>
                                                    <th>Max Play</th>
                                                    <th>No Winners</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($lotteries as $lotto)
                                                    <tr>
                                                        <th >{{$i++}}</th>
                                                        <td>{{$lotto->title}}</td>
                                                        <td>{{$lotto->code}}</td>
                                                        <td>{{$lotto->category}}</td>
                                                        <td>{{$lotto->price}}</td>
                                                        <td>{{$lotto->max_play}}</td>
                                                        <td>{{$lotto->no_winners}}</td>
                                                        <td>{{date("d, M Y", strtotime($lotto->startdate))}}</td>
                                                        <td>{{date("d, M Y", strtotime($lotto->enddate))}}</td>
                                                        <td>{!!($lotto->status == 1) ? '<span class="btn-sm btn-success">Active</span>' : '<span class="btn-sm btn-danger">Banned</span>'!!}</td>
                                                        <td>
                                                            <span href="#" class="dropdown user-dropdown ">
                                                                <button  class="btn-sm btn v3 dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ion-android-delete "></i>
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                   
                                                                    <li><a href="{{url('/admin/lottery/edit/')}}/{{$lotto->id}}"><i class="fa fa-note "></i>Edit</a></li>
                                                                    <li><a href="{{url('/admin/lottery/ban/')}}/{{$lotto->id}}"><i class="fa fa-refresh "></i>{!! $lotto->status == 2 ? 'Un-ban' : 'Ban' !!}</a></li>
                                                                    <li><a href="{{url('/admin/lottery/delete/')}}/{{$lotto->id}}"><i class="fa fa-trash "></i>Delete</a></li>
                                                                </ul>
                                                            </span>
                                                        </td>
                                                    
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                           
                                        </table>
                                        <br>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div><!-- Main Wrapper -->
               
                </div><!-- /Page Inner -->
            
         
        
        @endsection