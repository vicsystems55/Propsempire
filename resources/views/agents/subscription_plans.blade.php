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
<section style="padding-left: 12px;" id="dashboard-ecommerce">

<div class="row">

    @foreach($subscription_plans as $plan)
       @if($subscriptions->contains('agent_id', '1'))
        
       <div class="col-md-3">

       

        <div class="card bg-{{$plan->plan_name==$my_plan->plan_name?'success':'secondary'}}">
        <div class="card-body ">

            <h4 class="card-title white">{{$plan->plan_name}}</h4>


                <p class="card-text white">Cost per month: <span class="font-weight-bold">NGN {{$plan->cost_per_month}} </span></p>
                <p class="card-text white">Maximum Listings: <span class="font-weight-bold">{{$plan->max_listings}} </span></p>
                <p class="card-text white"> Premium Listings: <span class="font-weight-bold">{{$plan->premium_listings}} </span></p>
                <p class="card-text white"> Auto Boost: <span class="font-weight-bold">{{$plan->auto_boost}} Minutes</span></p>
                @include('agents.sub_change')
        </div>
        </div>

        </div>


        @else

        
       <div class="col-md-3">

            <div class="card bg-secondary">
            <div class="card-body ">

                <h4 class="card-title white">{{$plan->plan_name}}</h4>


                    <p class="card-text white">Cost per month: <span class="font-weight-bold">NGN {{$plan->cost_per_month}} </span></p>
                    <p class="card-text white">Maximum Listings: <span class="font-weight-bold">{{$plan->max_listings}} </span></p>
                    <p class="card-text white"> Premium Listings: <span class="font-weight-bold">{{$plan->premium_listings}} </span></p>
                    <p class="card-text white"> Auto Boost: <span class="font-weight-bold">{{$plan->auto_boost}} Minutes</span></p>
                    @include('agents.sub_pay')
            </div>
            </div>

            </div>



       @endif
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

