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
                <h3 class="text-center">Hi, {{$user->username}} Profile</h3>
                <hr>
                <div class="row mt-5 d-flex justify-content-center">
                  <div class="col-md-8 ">
                    <div class="row">
                      <div class="col-md-4" ><Strong>Userame:</Strong></div>
                      <div class="col-md-8" >{{$user->username}} </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Full Name:</Strong></div>
                      <div class="col-md-8" >{{$user->first_name}} {{$user->last_name}}</div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Email:</Strong></div>
                      <div class="col-md-8" >{{$user->email}} </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Phone:</Strong></div>
                      <div class="col-md-8" >{{$user->phone}} </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Date of Birth:</Strong></div>
                      <div class="col-md-8" >{{$user->dob}} </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Sex:</Strong></div>
                      <div class="col-md-8" >{{$user->sex}} </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Address:</Strong></div>
                      <div class="col-md-8" >{{$user->address}} </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" ><Strong>City:</Strong></div>
                      <div class="col-md-8" >{{$user->city}} </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" ><Strong>City:</Strong></div>
                      <div class="col-md-8" >{{$user->state}} </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4" ><Strong>Zip:</Strong></div>
                      <div class="col-md-8" >{{$user->zip}} </div>
                    </div>
                    <hr>
                    <div class="row">
                     <a href="{{url('/account/profile/edit')}}" class="btn btn-block btn-primary">Update Account</a>
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

                                 
