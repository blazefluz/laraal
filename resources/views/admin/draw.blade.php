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
                <h3 class="text-center"><i class="icofont-ui-game"></i> Raffle Draw</h3>
                <hr>
                
                <div class="row  mt-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="text-center">
                            <div class="col-md-12">
                                <img width="150"  src="{{asset('/images/icon/aw.png')}}" alt="">
                            </div>
                            <h4 class="mt-1">{{$game_data->no_winners}} Winner</h4>
                            <h1 class="mt-3" style="text-transform: uppercase">{{$game_data->title}}</h1>
                            <div class="mt-5">
                                <a href="{{url('/admin/draw/result/'.$game_data->code)}}" class="btn btn-warning" style="font-size: 35px; padding: 20px"> PLAY DRAW</a>
                            </div>
                      {{-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Game History</a>
                        </li>
                        
                     
                      </ul> --}}
                      {{-- <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Game Title</th>
                                    <th>Game Code</th>
                                    <th>Ticket Id</th>
                                    <th>Draw Date</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    
        
                                </tr>
                          
                            </thead>
                           
                          </table>
                        </div>
                        
                       
                      </div> --}}
                      
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

                                 
