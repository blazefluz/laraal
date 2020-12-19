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
                  <h3 class="text-center"><i class="icofont-money"></i> Checkout</h3>
                  <hr>
                <div class="row d-flex justify-content-center ">
                  <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-4" ><Strong>Game Title:</Strong></div>
                        <div class="col-md-8" >{{$game_data->title}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Game Code:</Strong></div>
                        <div class="col-md-8" >{{$game_data->code}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Amount:</Strong></div>
                        <div class="col-md-8" >{{currency_format('NGN', $game_data->price)}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Draw Date:</Strong></div>
                        <div class="col-md-8" >{{datetime($game_data->enddate)}}</div>
                    </div>
                   
                    <div class="row mt-5">
                        
                        <div class="col-md-12" >
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                                    
                                <input type="hidden" name="email" value="{{$user->email}}"> {{-- required --}}
                                {{-- <input type="hidden" name="orderID" value="$plan->price"> --}}
                                <input type="hidden" name="amount" value="{{currency_format2($game_data->price)}}"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['game_id' => $game_data->id, 'game_name' => $game_data->title, ]) }}" > 
                                <input type="hidden" name="reference" value="{{ paystack()->genTranxRef() }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                    
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                  <i class="icofont-credit-card"></i> Pay With Credit Card!
                                    </button> 
                                
                            </form>
                        </div>
                    </div>
                    <div class="row mt-2">
                       
                        <div class="col-md-12" >
                          <a href="{{url('/payment/method/bank/'.$game_data->code)}}" class="btn btn-warning btn-lg btn-block">
                            <i class="icofont-bank-alt"></i> Pay With Bank Transfer!
                                    </a> 
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

                                 
