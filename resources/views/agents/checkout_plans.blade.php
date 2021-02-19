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
  <h1>{{$single_plan->plan_name}}</h1>

  <div class="card col-md-6">
      <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <td>Cost Per Month: </td>
                    <td>NGN {{number_format($single_plan->cost_per_month, 2)}}</td>
                </tr>
                <tr>
                    <td>Maximum Listings: </td>
                    <td>{{$single_plan->max_listings}}</td>
                </tr>
                <tr>
                    <td>Premium Listings: </td>
                    <td>{{$single_plan->premium_listings}}</td>
                </tr>
                <tr>
                    <td>Auto Boost: </td>
                    <td>{{$single_plan->auto_boost}}</td>
                </tr>
                <tr>
                    <td>Statu: </td>
                    <td>{{$single_plan->status}}</td>
                </tr>
            </table>

            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                <div class="ro mt-2" >
                    <div class="form-group col-md-6">
                        <label class="" for="">Number of Months</label>
                       
                        <input onchange="getDuration(this.id)" name="quantity" id="duration_id" value="1"  type="number" class="touchspin" data-bts-max="12" data-bts-step="1" data-bts-decimals="">
                    </div>
                    <div class="">
                        
                        <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                        <input type="hidden" name="orderID" value="345">
                        <input type="hidden" name="amount" value="{{$single_plan->cost_per_month * 100}}"> {{-- required in kobo --}}
                        
                        <input type="hidden" name="currency" value="NGN">
                        <input type="hidden" name="callback_url" value="{{ config('app.url')}}agent/subscribe">
                        <?php

                        

                        ?>
                        <script>
                            function getDuration(duration_id) {

                                var duration_value = document.getElementById(duration_id).value;

                                document.getElementById(duration_id).value = duration_value;

                                var collection = [];

                                console.log(duration_value);


                                // obj = document.getElementById('collection').value;


                                // var result = Object.keys(obj).map((key) => [Number(key), obj[key]]);

                                // console.log(duration_value);

                                // console.log(result);

                            //    var collection[] =  document.getElementById('collection').value;

                           
                            }

                        </script>
                        <input id="collection" type="hidden" name="metadata" value="{{ json_encode($array = [
                        
                        'subscription_plan_id'=> $single_plan->id,
                        'plan_name'=> $single_plan->plan_name,
                        'agent_id'=> Auth::user()->id,
                        'slug'=> Str::random(32),
                        
                    

                        
                        ]) }}" > 
                        {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                        <p>
                            <button class="btn btn-warning btn-block shadow " type="submit" value="Pay Now!">
                                <i class="fa fa-plus-circle fa-lg"></i> Subscribe 
                            </button>
                        </p>
                    </div>
                </div>
            </form>
      
      </div>
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

