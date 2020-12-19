
@extends('layouts.app')

@section('content')

    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <div style="display: flex; justify-content: space-between;">
                <h3 class="breadcrumb-header">Payments</h3>
                
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
                                        <th>Full Name</th>
                                        <th>Acc Bal</th>
                                        <th>Payment Method</th>
                                        <th>Bank Name</th>
                                        <th>Amount</th>
                                        <th>Images</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($payments as $item)
                                  
                                        <tr>
                                            <th >{{$i++}}</th>
                                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                                            <td>{{$item->acc_bal}}</td>
                                            <td>{{$item->subscription}}</td>
                                            <td>{{$item->bank_name}}</td>
                                            <td>{{currency_format('NGN',$item->price)}}</td>
                                            <td><a href="{{url('images/tellers/'.$item->teller_img)}}" class="text-primary" target="_blank" rel="noopener noreferrer">{{($item->teller_img != null) ? 'View Teller' : ''}}</a> </td>
                                            <td>{{date("d, M Y", strtotime($item->created_at))}}</td>
                                            <td>{!!$item->status == 'Pending' ? '<span class="text-danger">Pending</span>' : '<span class="text-success">Success</span>'!!}</td>
                                            <td>
                                                @if ($item->status == 'Pending')
                                                
                                                    <form action="{{url('/admin/payment/confirm')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="userId" value="{{$item->user_id}}">
                                                        <input type="hidden" name="amount" value="{{$item->price}}">
                                                        <input type="hidden" name="payment_id" value="{{$item->id}}">
                                                        <button class="btn btn-sm btn-warning">Confirmed</button>
                                                    </form>
                                                @endif
                                            </td>
                                        
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                                
                            </table>
                            <div class=" container mt-3 text-center">
                                {!! $payments->links() !!}
                    
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