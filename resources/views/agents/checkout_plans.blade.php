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
  <h1>Veiw how i go take pay</h1>

  <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="ro mt-2" >
        <div class="">
            
            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
            <input type="hidden" name="orderID" value="345">
            <input type="hidden" name="amount" value="{{$single_plan->cost_per_month}}00"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="currency" value="NGN">
            <input type="hidden" name="callback_url" value="{{ config('app.url')}}/agent/subscribe">
            <?php

               

            ?>
            <input type="hidden" name="metadata" value="{{ json_encode($array = [
            
            'subscription_plan_id'=> $single_plan->id,
            'plan_name'=> $single_plan->plan_name,
            'agent_id'=> Auth::user()->id,
            'slug'=> Str::random(32)
          

            
            ]) }}" > 
            {{-- For other necessary things you want to add to your payload. it is optional though --}}
            
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
             {{-- employ this in place of csrf_field only in laravel 5.0 --}}

            <p>
                <button class="btn btn-warning shadow btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Subscribe 
                </button>
            </p>
        </div>
    </div>
</form>
    
   
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

