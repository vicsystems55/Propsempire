@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Form Wizard')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDOPFlhw8rl4qYiQt2VCkOrjGe3ATsOGr8"></script>
@endsection

@section('content')


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
<!-- Form wizard with icon tabs section start -->

<!-- Form wizard with step validation section end -->

<!-- vertical Wizard start-->
<section id="vertical-wizard">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Vertical Wizard</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <form id="formElem" action="{{route('agent.add_prop')}}" class="wizard-vertical">
          <!-- step 1 -->
          <h3>
            <span class="fonticon-wrap mr-1">
              <i class="bx bx-home-circle" data-options="name:gear.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">Property Details</span>
              <small class="text-muted">Details of property</small>
            </span>
          </h3>
          <!-- step 1 end-->
          <!-- step 1 content -->
            @include('agents.prop_details')
          <!-- step 1 content end-->
          <!-- step 2 -->
          <h3>
          <span class="fonticon-wrap mr-1">
              <i class="bx bx-home-circle" data-options="name:gear.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">Upload Assets</span>
              <small class="text-muted">Upload pictures of property</small>
            </span>
          </h3>
          <!-- step 2 end-->
          <!-- step 2 content -->
            @include('agents.upload_assets')
          <!-- step 2 content end-->
          <!-- section 3 -->
          <h3>
          <span class="fonticon-wrap mr-1">
              <i class="bx bx-home-circle" data-options="name:gear.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">Overview</span>
              <small class="text-muted">Add more details</small>
            </span>
          </h3>
          <!-- section 3 end-->
          <!-- step 3 content -->
            @include('agents.final')
          <!-- step 3 content end-->
          <!-- step 4 -->
          
          <!-- step 4 end-->
          <!-- step 4 content -->
         
          <!-- step 4 content end-->
        </form>
      </div>
    </div>
  </div>
</section>
<!-- vertical Wizard end-->
@endsection
{{-- vendor scripts --}}
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