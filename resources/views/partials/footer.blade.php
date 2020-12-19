
   
   <!-- Javascripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.1.0.min.js ')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js ')}}"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js ')}}"></script>
    <script src="{{ asset('assets/plugins/uniform/js/jquery.uniform.standalone.js ')}}"></script>
    <script src="{{ asset('assets/plugins/switchery/switchery.min.js ')}}"></script>
    <script src="{{ asset('assets/plugins/summernote-master/summernote.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
   
    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/form-elements.js')}}"></script>
    <script src="{{ asset('assets/js/space.min.js ')}}"></script>
    <script src="{{ asset('assets/js/nlga.js ')}}"></script>
    <script src="{{ asset('assets/js/custom.min.js ')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    @if(session()->has('message'))
<script>toastr.success('{{ session()->get('message') }}')</script>   

@endif

<script>
    $('.toast').toast({
    delay:3000,
    // Other options
});
</script>

