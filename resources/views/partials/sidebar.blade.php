    <!-- Page Sidebar -->
    <div class="page-sidebar">
        <a class="logo-box text-center" href="{{url('/')}}">
           <img src="{{asset('logo-w.png')}}" width="150"  alt="" >
            <i class="icon-close" id="sidebar-toggle-button-close"></i>
        </a>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    @if($user->role == 1)
                   
                    @endif
                    @if ($user->role == 2)
                    <li>
                        <a href="{{url('/admin/dashboard')}}">
                            <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="{{url('/admin/payments')}}">
                            <i class="menu-icon icon-flash_on"></i><span>Payment</span><i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/lotteries')}}">
                            <i class="menu-icon icon-user"></i><span>Lotteries</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/users')}}">
                            <i class="menu-icon icon-user"></i><span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/admin/settings')}}">
                            <i class="menu-icon icon-settings"></i><span>Settings</span>
                        </a>
                    </li>
                    @endif
                 
                    {{-- <li>
                        <a href="charts.html">
                            <i class="menu-icon icon-show_chart"></i><span>Report</span>
                        </a>
                    </li> --}}
                  
                    <li>
                       
                        <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                       <i class="fas fa fa-power-off"></i>
                                        <span> {{ __('Log Out') }}</span> 
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div><!-- /Page Sidebar -->