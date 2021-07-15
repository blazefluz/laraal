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
        
            <div class="card mt-3" >
              <div class="card-body">
                <h3 class="text-center"><i class="icofont-money"></i> Upload Teller</h3>
                <hr>
                <div class="row d-flex justify-content-center ">
                  <div class="card alert">Please note if your amount and teller image doesn't match your payment will not be approved</div>
                  <div class="col-md-8 ">
                    <form method="POST" action="{{url('/account/payment/upload')}}" enctype="multipart/form-data">
                      @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="bname">Bank name</label>
                            <input type="text" class="form-control" name="bname" id="bname" value="" placeholder="GTbank">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="amount">Amount Paid</label>
                            <input type="number" min="0" class="form-control" name="amount" id="amount" value="">
                          </div>
                        </div>
                        <div class="form-row">
                         
                          <div class="form-group col-md-6">
                            <label for="imagep" >Upload Image</label>
                            <input type="file" name="imagep" id="imagep" class="form-control">
                          </div>
                        </div>
                     
                        <button type="submit" class="btn btn-primary">Upload Teller</button>
                      </form>
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

                                 
