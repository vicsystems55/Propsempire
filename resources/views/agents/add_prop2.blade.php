@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Add Listing')

<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
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
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Create Listing Step 1/3</h4>
        </div>
        <div class="card-content pt-3">
          <div class="card-body">
            <form method="post" class="form" action="{{route('agent.add_listing')}}">
                @csrf  
            <div class="form-body">
                <div class="row">
                  <div class="col-md-6 col-12">
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
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                    <label for="description">Description</label>
                      <input type="text" id="description" class="form-control" placeholder="Description"
                        name="description">
                        @error('description')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                      
                    </div>
                  </div>
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
                  <div class="col-md-6 col-12">
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
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                        <option value="All Categories">All Categories</option>
                        <option value="rent">For Rent</option>
                        <option value="sale" selected="selected">For Sale</option>
                        <option value="venture">Joint Venture</option>
                        <option value="let">Short Let</option>
                        </select>
                    </div>
                  </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="type">Type</label>
                          <select name="type" id="type" class="form-control">
                            <option value="All Types" selected="selected">All Types</option>
                            <option value="flat">Flat</option>
                            <option value="house">House</option>
                            <option value="land">Land</option>
                            <option value="commercial property">Commercial Property</option>
                            <option value="event_center">Event Centre / Venue</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="type">Sub Type</label>
                          <select name="subtype" id="type" class="form-control">
                      
                              <option value="all">Null</option>
                              
                            </select>
                        </div>
                      </div>
                      <div class="col-md-6">
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
                     

                        

                     

                      <div class="col-sm-6">
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
                                      <label for="parking">Parking</label>
                                  </div>
                                </fieldset>
                              </li>
                              
                            
                            </ul>
                          </div>

                      </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Min Price</label>
                                    <input name="min_price" id="min_price" type="text" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2">
                                </div>

                                <div class="col-md-6">
                                <label for="">Max Price</label>
                                <input id="max_price" name="max_price" type="text" class="touchspin" value="50" data-bts-step="0.5" data-bts-decimals="2">
                                
                                </div>
                            </div>
                        </div>

                  
                  <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg shadow mr-1 mt-2 mb-1">Create</button>
                   
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
<!-- // Basic multiple Column Form section end -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('js/scripts/forms/number-input.js')}}"></script>
@endsection