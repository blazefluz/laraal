<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.home.head')
    @yield('head')
</head>
<body >


        @include('partials.home.nav')
        <div></div>
        @yield('content')
      

@include('partials.home.footer') 
@yield('script')
@if(session()->has('message'))
<script>toastr.success('{{ session()->get('message') }}')</script>   

@endif

<script>
    $('.toast').toast({
    delay:3000,
    // Other options
});
</script>
</body>
</html>
