  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    @php
    if(isset($pagetitle)){

    }else{
      $pagetitle = '';
    }
    @endphp
    <div class="container d-flex align-items-center pl-0 pr-0 ">

      <a class="logo mr-auto" href="{{url('/')}}"><img src="{{asset('logo-m.png')}}" alt="" class="img-fluid"></a>
      @if (Route::has('login'))
                @auth
               
                    <div class="dropdown">
                      <button class="btn btn-rounded btn-warning  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icofont-ui-user"></i> Account
                      </button>
                      <div class="dropdown-menu px-2" aria-labelledby="dropdownMenuButton">
                      <a href="{{url('/account/profile')}}"><strong>Hi,{{$user->first_name}}</strong></a> 
                        <a class="dropdown-item" href="{{url('/')}}">Home</a>
                        <a class="dropdown-item" href="{{url('/account/game')}}">My Games</a>
                        <a class="dropdown-item" href="{{url('/account/profile')}}">Profile</a>
                        <a class="dropdown-item" href="{{url('/account/funds')}}">Billings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Log Out') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                      </div>
                    </div>
                  
                @else
                 <a class="btn btn-rounded btn-warning px-3 py-1 mr-2" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a class="btn btn-rounded btn-primary px-3 py-1 mr-2" href="{{ route('register') }}">Sign Up</a>
                    @endif
                @endauth
        @endif
     
 
    </div>
  </header><!-- End Header -->