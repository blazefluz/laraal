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
                <h3 class="text-center"><i class="icofont-ui-game"></i> Games</h3>
                <hr>
                <div class="row  mt-5">
                  <div class="col-md-12 d-flex justify-content-center">
                 
                       
                          <div class=" table-responsive">

                            <table class="table ">
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
                              <tbody>
                                @foreach ($game_active as $item)
                                  <tr>
                                    <td>1</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->code}}</td>
                                    <td>{{$item->ticket_code}}</td>
                                    <td>{{datetime($item->enddate)}}</td>
                                    <td>{{currency_format('NGN',$item->price)}}</td>
                                    <td>{{datetime($item->created_at)}}</td>
                                    <td><span class=" btn btn-sm btn-success p-1 btn-rounded">{{$item->enddate > Carbon\Carbon::now() ? 'active' : 'completed'}}</span></td>
                                    
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

                                 
