@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','My Listings')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
@endsection
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<!-- Dashboard Ecommerce Starts -->
<section style="padding-left:12px; padding-right: 4px;" id="dashboard-ecommerce">

<!-- <div class="">


<h3 class="display-4 text-center">You have no Listings yet</h3>
    <a class="btn btn-primary text-center" href="{{route('agent.add_prop')}}">Create a Listing</a>
</div> -->

<div class="row mt-3">

<div class="col-md-7">

  <div class="card">

    <div class="card-body">

      <h3>{{$single_listing->title}}</h3>
    
    </div>
  </div>



</div>

<div class="col-md-5">

  <h4>Details</h4>



</div>

</div>
    
   
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@endsection

