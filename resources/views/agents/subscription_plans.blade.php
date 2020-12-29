@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Subscription Plans')
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
<section id="dashboard-ecommerce pl-1">

<div class="row">

    @foreach($subscription_plans as $plan)
        <div class="col-md-3">

            <div class="card bg-primary">
            <div class="card-body text-center">

                <h4 class="card-title white">{{$plan->plan_name}}</h4>


                    <p class="card-text white">Cost per month: NGN {{$plan->cost_per_month}}</p>
                    <p class="card-text white">Maximum Listings: {{$plan->max_listings}}</p>
                    <p class="card-text white"> Premium Listings: {{$plan->premium_listings}}</p>
                    <p class="card-text white"> Auto Boost: {{$plan->auto_boost}}</p>

                <a href="" class="btn btn-warning">Subscribe</a>
              </div>
            </div>
        
        </div>
    @endforeach

    
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

