
@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <div style="display: flex; justify-content: space-between;">
                            <h3 class="breadcrumb-header">Lotto Winners</h3>
                            
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
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>email</th>
                                                        <th>Game ID</th>
                                                        <th>Ticket ID</th>
                                                        <th>Status</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($winners as $winner)
                                                        <tr>
                                                            <td >{{$i++}}</td>
                                                            @php
                                                                $data = DB::table('users')->where('id',$winner->user_id)->first();
                                                                $lottoData= DB::table('lotteries')->where('id',$winner->game_id)->first();
                                                            @endphp
                                                            <td>{{$data->first_name}} {{$data->last_name}}</td>
                                                            <td>{{$data->phone}} </td>
                                                            <td>{{$data->email}} </td>
                                                            <td>{{$lottoData->code}} </td>
                                                            <td>{{$winner->ticket_id}}</td>
                                                    
                                                            <td>{!!($winner->status == 1) ? '<span class="btn-sm btn-success">Eligble</span>' : '<span class="btn-sm btn-danger">Not Eligible</span>'!!}</td>
                                                            <td>{{date("d, M Y", strtotime($winner->created_at))}}</td>
                                                            <td><button>Accept</button></td>
                                                        
                                                        
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            
                                            </table>
                                            <div class=" container mt-3 text-center">
                                                {!! $winners->links() !!}
                                    
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