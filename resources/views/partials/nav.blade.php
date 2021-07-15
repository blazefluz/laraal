   <!-- Page Header -->
   <div class="page-header">
   
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="logo-sm">
                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                    <a class="logo-box" href="{{url('/')}}"><img src="{{asset('logo-m.png')}}" alt="" class="img-fluid"></a>
                </div>
                
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                         {{-- <img src="{{($user->business_logo != null ? 'images/profile/'.$user->business_logo : 'http://via.placeholder.com/36x36')}}" alt="" class="img-circle"> --}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/profile')}}">Profile</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li><a href="#"><span class="badge pull-right badge-danger">42</span>Messages</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('/settings')}}">Account Settings</a></li>
                            <li>
                                <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Log Out') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                            
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div><!-- /Page Header -->