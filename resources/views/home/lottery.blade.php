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
          <div class="card p-3" style="background-color: #1a1207a1">
          {{-- <div class="card p-3" style="background-color: #b4b2af59"> --}}
              <div class="row">
                  <div class="col-md-6 d-flex justify-content-center">
                     <img class="img-fluid "  src="{{asset('/images/'.$lotto->banner_img)}}" alt="Card image">
                  </div>
                  <div class="col-md-6 text-center">
                    <img width="80" class="mx-auto mt-3 mb-3"  src="{{asset('/images/'.$lotto->icon_img)}}" alt="">
                    <div class="lotto-title">{{$lotto->title}}</div>
                    <div class="lotto-price">{{currency_format('NGN', $lotto->price)}}</div>
                    @if ($lotto->status == 1)
                        
                    <a href="{{url('/checkout/'.$lotto->code) }}" class="btn btn-lg btn-danger">Buy A Ticket Now!</a>
                    @else
                    <a href="#"  class="btn btn-lg btn-danger">Expired</a>
                    @endif
                    <br>
                    <br>
                    <div class="card text-center mt-2 mb-2 py-3 text-white d-flex justify-content-center" style="background-color: rgba(3, 14, 114, 0.863)">
                          <h4>DRAW DATE: <span class="text-danger">{{datetime($lotto->enddate)}}</span> </h4>
                          <ul class="lotto p-0 m-0 d-flex justify-content-center " id="timer">
                              <li class="lotto" ><span class="days">00</span> D</li>
                              <li class="lotto" ><span class="hours">00</span> H</li>
                              <li class="lotto" ><span class="minutes">00</span> M </li>
                              <li class="lotto" ><span class="seconds ">00</span> Sec</li>
                          </ul>
                           
                        </div>
                    </div>
                </div>
              </div>
              
              <div class="card mt-3" >
                  <div class="card-body">
                    <h3>Description</h3>
                    <p>{!!$lotto->desc!!}</p>
                    <h3>How do I play?</h3>
                    <ul>
                      <li><strong>1. </strong> Click on pay</li>
                      <li><strong>2. </strong> Fund account</li>
                      <li><strong>3. </strong> Buy ticket and get qualifyed for a raffle draw.</li>
                      <li><strong>4. </strong>If your ticket number is selected you will be called to 
                        claim the price. <br>   For game rules and details
                      please click on the rules section below <br></li>
                    </ul>
                    <h3>Game Rules</h3>
                    <ul>
                  
                      <li><strong>2. </strong>You must be 18 years and above.</li>
                      <li><strong>2. </strong>Noboby can claim your price for you.</li>
                      <li><strong>3. </strong> Your phone number must be valid. If the organizers is unable to you after two (2) days. The price will be transfered to another winner.</li>
                      <li><strong>4. </strong>Staffs and partners are not allowed to play this game</li>
                    </ul>
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
    var deadline = '{{$lotto->enddate}}';

function getTimeRemaining(endtime){
	var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
  'total': t,
  'days': days,
  'hours': hours,
  'minutes': minutes,
  'seconds': seconds
  }
}

function initTime(identifier, endtime){
	var timer = document.getElementById('timer');
  var daySpan = timer.querySelector('.days');
  var hourSpan = timer.querySelector('.hours');
  var minuteSpan = timer.querySelector('.minutes');
  var secondSpan = timer.querySelector('.seconds');
  var timeInterval = setInterval(function(){
  	var t = getTimeRemaining(endtime);
    daySpan.innerHTML = t.days;
    hourSpan.innerHTML = t.hours;
    minuteSpan.innerHTML = t.minutes;
    secondSpan.innerHTML = ('0' + t.seconds).slice(-2);
 		if(t.total<=0){
    	clearInterval(timeInterval);
    }
  }, 1000);
}

initTime('timer', deadline);
</script>
@endsection

                                 
