
@extends('layouts.app')

@section('content')
                 
             
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <div style="display: flex; justify-content: space-between;">
                            <h3 class="breadcrumb-header">Users</h3>
                            <div style="margin: auto 0;">
                                <a href="{{url('/admin/user/add')}}" class="btn btn-primary">Add User</a>
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
                                                    <th>Username</th>
                                                    <th>Name</th>
                                                    <th>email</th>
                                                    <th>Phone</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($userslist as $users)
                                                    <tr>
                                                        <th >{{$i++}}</th>
                                                        <td>{{$users->username}}</td>
                                                        <td>{{$users->first_name}} {{$users->last_name}}</td>
                                                        <td>{{$users->email}}</td>
                                                        <td>{{$users->phone}}</td>
                                                        <td>{{date("d, M Y", strtotime($users->created_at))}}</td>
                                                        <td>{!!($users->status == 1) ? '<span class="btn-sm btn-success">Active</span>' : '<span class="btn-sm btn-danger">Banned</span>'!!}</td>
                                                        <td>
                                                            <span href="#" class="dropdown user-dropdown ">
                                                                <button  class="btn-sm btn v3 dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ion-android-delete "></i>
                                                                    Action
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="{{url('/impersonate')}}/{{$users->id}}"><i class="fa fa-refresh "></i>login</a></li>
                                                                    <li><a href="{{url('/admin/user/edit/')}}/{{$users->id}}"><i class="fa fa-note "></i>Edit</a></li>
                                                                    <li><a href="{{url('/admin/user/ban/')}}/{{$users->id}}"><i class="fa fa-refresh "></i>{!! $users->status == 2 ? 'Un-ban' : 'Ban' !!}</a></li>
                                                                    <li><a href="{{url('/admin/user/delete/')}}/{{$users->id}}"><i class="fa fa-trash "></i>Delete</a></li>
                                                                </ul>
                                                            </span>
                                                        </td>
                                                    
                                                    </tr>
                                                @endforeach
                                                
                                            </tbody>
                                           
                                        </table>
                                        <div class=" container mt-3 text-center">
                                            {!! $userslist->links() !!}
                                
                                        </div>
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