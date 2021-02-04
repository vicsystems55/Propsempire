@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Add Listing')



<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDOPFlhw8rl4qYiQt2VCkOrjGe3ATsOGr8"></script>
@section('content')
<!-- Basic Horizontal form layout section start -->

<!-- // Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->

<!-- // Basic Vertical form layout section end -->

<!-- // Basic Floating Label Form section start -->

<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section>
  <div>
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title p-1">Create Listing Step 1/3</h4>

          <div class="row">

            <div class="p-2 bg-primary col-md-4 text-white">
               Step 1
            </div>
            <div class="p-2 border-primary mx-auto col-md-4">
               Step 2
            </div>
            <div class="p-2 border-primary mx-auto col-md-4">
               Step 3
            </div>

          </div>
        </div>
        <div class="">
          <div class="card-bod py-sm-0">

         <div class="p-1">
         <p class="alert alert-warning">
            Rules for listing property <br>
            It is important that you read and understand the rules of listing properties in Propsempire <a href="">click here of details</a>
          </p>
         </div>
            <form method="post" class="form" action="{{route('agent.add_prop1')}}">
                @csrf  
            <div class="form-body">

            <div class="row">
              <div class="col-md-6">

              <div class="form-group p-1">
                 
                  <ul class="list-unstyled mb-0">
                      <li class="d-inline-block mr-2 mb-1">
                        <!-- <fieldset>
                          <div class="radio radio-shadow">
                              <input type="radio" id="radioshadow1"  checked>
                              <label for="radioshadow1">Publish</label>
                          </div>
                        </fieldset>
                      </li>
                      <li class="d-inline-block mr-2 mb-1">
                        <fieldset>
                          <div class="radio radio-shadow">
                              <input type="radio" id="radioshadow2"  >
                              <label for="radioshadow2">Unpublish</label>
                          </div>
                        </fieldset> -->
                      </li>

                    </ul>
                 </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                    <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" placeholder="Title"
                        name="title">
                        @error('title')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                      
                    </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                    <label for="description">Description</label>
                      <textarea col="10" row="30" type="text" id="description" class="form-control" placeholder="Description"
                        name="description"></textarea>
                        @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                      
                    </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                    <label for="city-column">Video url</label>
                      <input type="text" id="video_url" class="form-control" placeholder="Video description" >
                      @error('video_url')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                  </div>

                  <div class="col-md-12 col-12">
                    <div class="form-group">
                    <label for="city-column">Location</label>
                      <input type="text" id="location" class="form-control" placeholder="Enter Location" name="location">
                      @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    </div>
                  </div>

                  <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                    <label for=""> Price</label>
                                    <input name="min_price" id="min_price" data-bts-prefix="NGN" type="number" class="touchspin" value="20000" data-bts-max="1000000s" data-bts-step="500" data-bts-decimals="2">
                                </div>

                                <!-- <div class="col-md-6">
                                <label for="">Maximum Price</label>
                                <input id="max_price" name="max_price" data-bts-prefix="NGN" type="number" class="touchspin" value="20000" data-bts-max="1000000s" data-bts-step="500" data-bts-decimals="2">
                                
                                </div> -->

                                
                            </div>
                        </div>

                        
              
              
              </div>

              <div class="col-md-6">

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="category">Category</label>
                      <select  name="category" id="category" class="form-control">
                        <option value="" selected="selected" >- Select -</option>
                        <option value='rent'>Rent</option>
                        <option value='sale'>Sale</option>
                        <option value='short_let'>Short Let</option>
                        <option value='joint_venture'>Joint Venture</option>
                        
                      
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                        <div class="form-group">
                          <label for="type">Type</label>
                          <select onchange="set()" name="type" id="type" class="form-control" required>
                          <option value="" selected="selected" >- Select -</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="type">Sub Type</label>
                          <select  name="subtype" id="subtype" class="form-control" required>
                            <option value="" selected="selected" >- Select -</option>
                          </select>
                        </div>
                      </div>

                      <script>
                       function set() {

                        $type =  document.getElementById('type').value;

                          if ($type == 'Land') {

                            document.getElementById('landCheck').classList.add('d-none');

                            alert('disappear bedroom');
                            
                          }

                        

                         
                         
                       }
                      
                      </script>

                      <div id="landCheck" class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Bedrooms</label>
                                    <input name="bedrooms" id="bedrooms" type="text" class="touchspin" value="1" data-bts-step="1" data-bts-decimals="0">
                                </div>

                                <div class="col-md-4">
                                <label for="">Toilet</label>
                                <input id="toilets" name="toilets" type="text" class="touchspin" value="1" data-bts-step="1" data-bts-decimals="0">
                                
                                </div>

                                <div class="col-md-4">
                                <label for="">Bathrooms</label>
                                <input id="bathrooms" name="bathrooms" type="text" class="touchspin" value="1" data-bts-step="1" data-bts-decimals="0">
                                
                                </div>
                            </div>
                        </div>

                        <div id="" class="col-md-12 mt-2">
                            <div class="row">
           
                                <div class="col-md-6">
                                    <label for="">Total Area</label>
                                    <input name="total_area" id="total_area" data-bts-postfix="SQRM" type="number" class="touchspin" value="100" data-bts-max="1000000s" data-bts-step="500" data-bts-decimals="2">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Covered Area</label>
                                    <input name="covered_area" id="covered_area" data-bts-postfix="SQRM" type="number" class="touchspin" value="100" data-bts-max="1000000s" data-bts-step="500" data-bts-decimals="2">
                                </div>

                                <div class="col-md-4 pt-1">
                                    <label for="">Parking</label>
                                    <input name="bedrooms" id="bedrooms" type="text" class="touchspin" value="1" data-bts-step="1" data-bts-decimals="0">
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group mt-2">
                          <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="checkbox checkbox-primary">
                                      <input name="furnished" type="checkbox" id="furnished" value="1" >
                                      <label for="furnished">Furnished</label>
                                  </div>
                                </fieldset>
                              </li>
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="checkbox checkbox-primary">
                                      <input name="parking"  type="checkbox" id="parking"  value="1">
                                      <label for="parking">Serviced</label>
                                  </div>
                                </fieldset>
                              </li>
                              
                            
                            </ul>
                          </div>

                      </div>
              
              
              </div>
            
            
            
            </div>
               
                   

                <div class="row">
                  
                    <div class="col-md-8"></div>
                    <div class="col-md-4 p-2">

                      <button type="submit" class="btn btn-primary btn-block btn-lg shadow mr-1 mb-1">Next</button>
                    
                    </div>
                </div>          

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>

var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
    
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
        
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});

$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
    
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});
</script>
<!-- // Basic multiple Column Form section end -->
@endsection

@section('vendor-scripts')


<script src="{{asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')

<script src="{{asset('js/scripts/forms/number-input.js')}}"></script>
<script src="{{asset('category/js/lga.js')}}"></script>
@endsection