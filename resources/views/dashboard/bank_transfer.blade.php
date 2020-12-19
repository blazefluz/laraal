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
                  <h3 class="text-center"><i class="icofont-bank-alt"></i> Bank Transfer</h3>
                  <hr>
                  <div class="row d-flex justify-content-center ">
                    <div class="col-md-6 ">
                     
                      <h5>Current Account Bal:</h5>
                    <div class="row" >
                      <div class="col-md-4">
                        <h2 class="p-2 " style="background-color: rgba(197, 193, 193, 0.774)">₦<span>{{$user->acc_bal == null ? '0.00': $user->acc_bal}}</span> </h2> 
                      </div>
                      <div class="col-md-8">
                         {!!$user->acc_bal == null ? '' : ' <a href='.url('/account/payment/bank/pay/'.$game_data->code).' class="btn btn-primary">Pay Now</a>'!!}
                      </div>
                    </div>
                    
                    <div class="row mt-5">
                        <div class="col-md-4" ><Strong>Bank Name:</Strong></div>
                        <div class="col-md-8" >GT bank</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Account Number:</Strong></div>
                        <div class="col-md-8" >1058884962</div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4" ><Strong>Account Name</Strong></div>
                        <div class="col-md-8" >CMPetas Global Services Nig Ltd</div>
                    </div>
                    <h3>OR</h3>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Bank Name:</Strong></div>
                        <div class="col-md-8" >Access bank</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" ><Strong>Account Number:</Strong></div>
                        <div class="col-md-8" >0724243060</div>
                    </div>
                    <div class="row ">
                        <div class="col-md-4" ><Strong>Account Name</Strong></div>
                        <div class="col-md-8" >CMPetas Global Services Nig Ltd</div>
                    </div>
                   
                    <div class="row mt-5">
                       
                        <div class="col-md-12" >
                          <div class="card alert">All bank transfers, cheque and cash payments should be made to:</div>
                          <div class="card alert">
                            <strong>Payment Instruction </strong> 
                            
                              <span><strong>1.</strong> Pay to the above account</span>
                              <span><strong>2.</strong> Upload your reciept at the <a href="{{url('/account/funds')}}">billing page</a> </span>
                              <span><strong>3.</strong> Once payment is confirmed your account will be funded with the with the amount you paid.</span>
 
                              
                          </div> 
                        </div>
                        <div class="col-md-12" >
                          <div class="card alert">
                            Do you need help? <br>
                             Contact us using the details below.
                             <span><i class="icofont-whatsapp"></i> WhatsApp: +234 08160747172</span>
                             <span><i class="icofont-email"></i> Email: support@cmpetas.com</span>
    
                              
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

                                 
