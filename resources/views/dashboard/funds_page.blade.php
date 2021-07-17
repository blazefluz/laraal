@extends('layouts.main')

@section('head')
  <style>.embed-container {  display: flex; justify-content: center; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
  <style>
      .lotto-price{
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          font-weight: 800;
          font-size: 3.9rem;
          color: #ffd000;

      }
      .lotto-title{
          font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
          font-weight: 600;
          font-size: 2.3rem;
          color: #050505;
          text-transform: capitalize;
          background-color: #35a004;
          padding: 5px;
          border-radius: 10px;
          color: white;
          text-align: center;
      }

    .lotto ul {
        width:100%;
        display:table;
        text-align:center;
       
    }

    .lotto li {
        color:white;
        display:table-cell;
        padding:2px 20px;
        width:25%;
        text-align:center;
    }

    .lotto span {
        font-size:1.5rem;

        display:block;
    }

    </style>
  @endsection
@section('content')
 

  <section id="main" >
  
    <section class="pt-3 pb-3">
        <div class="container">
          <div class="row text-white">
            <h2></h2>
          </div>
            <div class="card mt-3" >
              <div class="card-body">
                <h3 class="text-center"><i class="icofont-money"></i> Billings</h3>
                <hr>
                <div class="row d-flex justify-content-center ">
                  <div class="card alert">Your account will reflect the amount you paid once your payment is verified</div>
                  <div class="col-md-10 ">
                    <h5>Account Bal:</h5>
                    <div class="row" >
                      <div class="col-md-4">
                        <h2 class="p-2 " style="background-color: rgba(197, 193, 193, 0.774)">₦<span>{{$user->acc_bal == null ? '0.00': $user->acc_bal}}</span> </h2> 
                      </div>
                      <div class="col-md-8">
                          <a href="{{url('/account/payment/verify')}}" class="btn btn-primary">Upload Bank Teller</a>
                      </div>
                    </div>
     
          
                    <div class="row mt-5 justify-content-center">
                      <h4>Payment History</h4>
                      <div class="col-md-12 justify-content-center">
                        <div class=" table-responsive">

                          <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Payment Date</th>
                                    <th>Payment Method</th>
                                    <th>Price</th>
                                    <th>reference</th>
                                    <th>Status</th>
                                </tr>
                           
                            </thead>
                            <tbody>
                              @php
                                  $i = 1;
                              @endphp
                              @foreach ($payments as $item)
                                <tr>
                                  <td>{{$i++}}</td>
                                  <td>{{datetime($item->created_at)}}</td>
                                  <td>{{$item->subscription}}</td>
                                  <td>{{currency_format('NGN',$item->price)}}</td>
                                  <td>{{$item->reference}}</td>
                                  <td>{{$item->status}}</td>
                                  {{-- <td><a class="btn btn-danger btn-sm" href="">Upload Teller</a></td> --}}
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
      </div>
    </section>
  
  </section><!-- End #main -->
@endsection
@section('head')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
@endsection
@section('script')

<script>

</script>
@endsection

                                 
