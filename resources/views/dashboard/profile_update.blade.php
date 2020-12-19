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
            <div class="card mt-3" >
              <div class="card-body">
                <h3 class="text-center">Manage your account</h3>
                <hr>
                <div class="row mt-5 d-flex justify-content-center">
                  <div class="col-md-8 ">
                    <form method="POST" action="{{url('/account/profile/edit/'.$user->id)}}">
                      @csrf
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="fname">Firstname</label>
                            <input type="text" class="form-control" name="fname" id="fname" value="{{$user->first_name}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="lname">Lastname</label>
                            <input type="text" class="form-control" name="lname" id="lname" value="{{$user->last_name}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" min="0" class="form-control" name="phone" id="phone" value="{{$user->phone}}">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="dob">Date of Birth</label>
                            <input type="text" class="form-control" name="dob" value="{{$user->dob}}" placeholder="mm/dd/yyyy" id="dob">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="sex">Sex</label>
                            <select class="form-control" name="sex" id="sex">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" value="{{$user->city}}">
                          </div>
                          <div class="form-group col-md-4">
                            <label for="state">State</label>
                            <select  name="state" id="state" class="form-control" required>
                                {!!(isset($user->state)) ? ' <option selected  value="'.$user->state.'">'.$user->state.'</option>' : '' !!}
                              <option  value="Lagos">Lagos</option>
                              <option value="Abia">Abia</option>
                              <option value="Adamawa">Adamawa</option>
                              <option value="AkwaIbom">AkwaIbom</option>
                              <option value="Anambra">Anambra</option>
                              <option value="Bauchi">Bauchi</option>
                              <option value="Bayelsa">Bayelsa</option>
                              <option value="Benue">Benue</option>
                              <option value="Borno">Borno</option>
                              <option value="Cross River">Cross River</option>
                              <option value="Delta">Delta</option>
                              <option value="Ebonyi">Ebonyi</option>
                              <option value="Edo">Edo</option>
                              <option value="Ekiti">Ekiti</option>
                              <option value="Enugu">Enugu</option>
                              <option value="FCT">FCT</option>
                              <option value="Gombe">Gombe</option>
                              <option value="Imo">Imo</option>
                              <option value="Jigawa">Jigawa</option>
                              <option value="Kaduna">Kaduna</option>
                              <option value="Kano">Kano</option>
                              <option value="Katsina">Katsina</option>
                              <option value="Kebbi">Kebbi</option>
                              <option value="Kogi">Kogi</option>
                              <option value="Kwara">Kwara</option>
                              <option value="Nasarawa">Nasarawa</option>
                              <option value="Niger">Niger</option>
                              <option value="Ogun">Ogun</option>
                              <option value="Ondo">Ondo</option>
                              <option value="Osun">Osun</option>
                              <option value="Oyo">Oyo</option>
                              <option value="Plateau">Plateau</option>
                              <option value="Rivers">Rivers</option>
                              <option value="Sokoto">Sokoto</option>
                              <option value="Taraba">Taraba</option>
                              <option value="Yobe">Yobe</option>
                              <option value="Zamfara">Zamafara</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2">
                            <label for="zip">Zip/Postal</label>
                            <input type="text" class="form-control" name="zip" value="{{$user->zip}}" id="zip">
                          </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                  </div>
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

</script>
@endsection

                                 
