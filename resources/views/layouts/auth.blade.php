<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.home.head')
@yield('head')
<body  class="">
      
    @include('partials.home.nav')
 <!-- Page Container -->
 <main id="main">

     <section >
        <!-- Page Content -->
        <section class="container" class=" pt-5">  
            @yield('content')
          
        </section>
      
    </section>
 </main>
       
@include('partials.footer') 
@yield('script')

</body>
</html>
