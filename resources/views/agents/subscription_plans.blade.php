@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Subscription Plans')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
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
       @if($subscriptions->contains('agent_id', Auth::user()->id))
        
       <div class="col-md-3 {{$plan->plan_name=='Free Plan'?'d-none':''}}">

       

        <div class="card bg-{{$plan->plan_name==$my_plan?'success':'secondary'}}">
        <div class="card-body ">

            <h4 class="card-title white">{{$plan->plan_name}}</h4>


                <p class="card-text white">Cost per month: <span class="font-weight-bold">NGN {{$plan->cost_per_month}} </span></p>
                <p class="card-text white">Maximum Live Listings: <span class="font-weight-bold">{{$plan->max_listings}} </span></p>
                <p class="card-text white"> Premium Listings: <span class="font-weight-bold">{{$plan->premium_listings}} </span></p>
                <p class="card-text white"> Auto Boost: <span class="font-weight-bold">{{$plan->auto_boost}} Minutes</span></p>
               
               
               
                <!-- @include('agents.sub_change') -->
                <a href="{{route('agent.checkout_plans', $plan->plan_name)}}" class="btn btn-primary btn-block {{$plan->plan_name==$my_plan?'d-none':''}}">Upgrade</a>
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
                       
                        <div class="">
                            <label class="text-white" for="">Number of Months</label>
                            <input name="months" id="min_price"  type="number" class="touchspin" value="1" data-bts-max="12" data-bts-step="1" data-bts-decimals="">
                        </div>
                   
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
<script src="{{asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')

<script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{asset('js/scripts/forms/number-input.js')}}"></script>
@endsection

