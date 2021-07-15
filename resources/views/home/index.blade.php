@extends('layouts.main')

@section('head')
  <style>.embed-container {  display: flex; justify-content: center; position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }

.slick-slide {
    width: 350px;
}
</style>
 
  @endsection
@section('content')
 

  <section id="main" >
  
    <section class="pt-3 pb-3">
        <div class="container">
          <div class="row my-4">
            <h2 class="text-white">General Games</h2>
          </div>
       
        <div class="row lotto-slider text-center">
            @foreach ($lottos as $lotto)
                <div class="col-lg-4 col-mb-4 " >
                    <div class="js-tilt" data-tilt >
                        <div style="transform-style: preserve-3d;">
                            <div class="card text-white border-0" >
                                <img class="card-img" src="{{asset('/images/thumbnails/banner.jpg')}}" alt="Card image">
                                <div class="card-img-overlay text-center" style="transform: translateZ(20px)">
                                    <img width="80" class="mx-auto"  src="{{asset('/images/icon/aw.png')}}" alt="">
                                    <div class="card-body mt-2" style="background: rgba(3, 12, 22, 0.71);">
                                        <div class="corner-ribbon bottom-left sticky orange">{{currency_format('ngn', $lotto->price)}}</div>
                                        <h3 class="card-title" style="font-size: 100%; text-transform: uppercase">{{$lotto->title}}</h3>
                                        {{-- <p class="card-text">This is a wider card with  This content is a little bit longer.</p> --}}
                                        <p class="card-text">Draw Date: {{datetime($lotto->enddate)}}</p>
                                    </div>
                                    <br>
                                    @php
                                        $date = Carbon\Carbon::now();
                                       
                                    @endphp
                                    <a href="{{url('lottery/'.$lotto->code)}}" class="btn btn-warning btn-block"><strong>{{ $lotto->status == 1 ? "Buy Ticket Now!" : "Expired" }}</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <section class="pt-0">
        <div class="container  ">
            <div class="row my-4">
                <h2 class="text-white">Winners</h2>
              </div>
            <div class="card p-3">
                <div class="row text-center ">
                    @foreach ($winners as $winner)
                        
                        <div class="col-md-3" >
                            <div class="card p-0 border-0 " style="background: rgb(223, 216, 201)">
                                <div class="card-body p-2 text-center">
                                 
                                            <img width="60"  src="{{asset('/images/icon/aw.png')}}" alt="">
                                            <span >{{ $winner->last_name }}</span>
                                       
                                </div>
                            </div>
                        </div>
                    @endforeach
                  
                 
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
    
    $('.js-tilt').tilt({
        scale: 1.0
    });
    
    $(document).ready(function() {
        $('.lotto-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            autoplay: true,
            // centerMode: true,
            variableWidth: true,
            centerPadding: '60px',
            infinite: true,
            autoplaySpeed: 5000,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: true,
                slidesToScroll: 2,
                // centerMode: true,
                // centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
        });
        $('.lotto-slider2').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            // centerPadding: '40px',
            infinite: true,
            variableWidth: true,
            // autoplaySpeed: 5000,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: true,
                // centerMode: true,
                centerPadding: '40px',
                slidesToShow: 2
            }
            }
        ]
        });
       
    });
</script>
@endsection

                                 
