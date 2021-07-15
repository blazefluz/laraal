<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @yield('head')
</head>
<body  class="page-sidebar-fixed">
 <!-- Page Container -->
 <div class="page-container">      
    @include('partials.sidebar')
    <!-- Page Content -->
    <div class="page-content">  
        @include('partials.nav')
        @yield('content')
      
    </div>
  
</div>
       
@include('partials.footer') 
@yield('script')

</body>
</html>
