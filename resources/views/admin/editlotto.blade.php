@extends('layouts.app')

@section('content')
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="page-title">
        <h3 class="breadcrumb-header">Add Lottory</h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white shadow  rounded">
                    <div class="panel-body">
                            <form  action="{{url('/admin/lottery/edit')}}/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-check  form-check-inline col-md-6">
                                                    <input class="form-check-input" type="radio" name="publish" id="publish" value="1" checked>
                                                    <label class="form-check-label" for="publish">
                                                        Publish
                                                    </label>
                                                  </div>
                                                  <div class="form-check form-check-inline col-md-6">
                                                    <input class="form-check-input" type="radio" name="publish" id="unpublish" value="2" >
                                                    <label class="form-check-label text-danger" for="unpublish">
                                                        Unpublish
                                                    </label>
                                                  </div>
                                               
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                               
                                                <div class="form-group col-md-8 col-sm-8">
                                                    <label for="title" class=" control-label">Title</label>
                                                        <input type="text" name="title" class="form-control" id="title" value="{{$data->title}}" required>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-4">
                                                    <label for="category" class="control-label">Category</label>
                                                    <select name="category" id="category" required class="form-control">
                                                        <option {{($data->category == 'general') ? 'selected' : ''}} value="general">General</option>
                                                        <option {{($data->category == 'vip') ? 'selected' : ''}} value="vip">VIP</option>
                                                    </select>   
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group col-md-12 col-sm-6">
                                                    <label for="startdate" class=" control-label">Start date</label>
                                                        <input type="text" name="startdate" value="{{date("m/d/Y", strtotime($data->startdate))}}" class="form-control date-picker" id="startdate" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group col-md-12 col-sm-6">
                                                    <label for="enddate" class=" control-label">End date</label>
                                                        <input type="text" name="enddate" value="{{date("m/d/Y", strtotime($data->enddate))}}" class="form-control date-picker" id="enddate" required>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="price" class="control-label">Price</label>
                                                            <input type="number" name="price" value="{{$data->price}}" class="form-control" id="price" min="0" required>
                                                            <p><small>Please don't add , or . e.g 300000</small></p>
                                                    </div>          
                                           
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="currency" class="control-label">Max Bet(play)</label>
                                                          <input type="number" min="1" name="max_play" value="{{$data->max_play}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-4 col-sm-4">
                                                        <label for="currency" class="control-label">Number of Winners</label>
                                                          <input type="number" min="1" name="no_winners" value="{{$data->no_winners}}" class="form-control">
                                                    </div>
                                                            
                                              
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                             
                                                <div class="form-group col-md-6">
                                                    <label for="youtube" class="control-label">Banner upload</label>
                                                       <input type="file" name="bimage" id="bimage" class="form-control" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="youtube" class="control-label">icon upload</label>
                                                       <input type="file" name="cimage" id="cimage" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group col-md-12">
                                                    <label for="desc" class="control-label">Description</label>
                                                       
                                                       <textarea class="form-control" name="desc" id="desc" cols="30" rows="10" placeholder="Write description" required>{{$data->desc}}</textarea>           
                                                </div>
                                            </div>
                                           
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <br>
                                                    <div class="col-md-12 text-center" >
                                                        <a href="{{url('admin/lottery')}}"  class="btn btn-default " style="margin-right: 10px">Cancel</a>
                                                        <button type="submit"  class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Main Wrapper -->
</div><!-- /Page Inner -->
@endsection
@section('script')
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{ asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-wizard.js')}}"></script>
<script>
      
    $(document).ready(function() {
        $('.feature-collapse').hide();
        $('#toggleRead').on('click', function(e){
            e.preventDefault();
            $('.feature-collapse').toggle();
        });
        

    });


</script>
@endsection
