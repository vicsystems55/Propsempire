@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Dashboard')
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
<section id="dashboard-ecommerce">
    <div class="row">
      <!-- Greetings Content Starts -->
      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header pb-0">
            <h3 class="greeting-text">Listings</h3>
            
          </div>
          <div class="">
            <div class="pt-0 card-body">
            
              <div class="pb-0 d-flex justify-content-between">
                <div class="dashboard-content-left">
                <span class="">Total Listings</span>
                  <h3 class="text-primary text-bold-500">{{$my_listings->count()}}</h3>

                  <span class="">Premium Listings</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                  <span class="">Expired Listings</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                  <button type="button" class="btn btn-primary glow">More</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header pb-0">
            <h3 class="greeting-text">Subscription</h3>
            
          </div>
          <div class="">
            <div class="pt-0 card-body">
            
              <div class="pb-0 d-flex justify-content-between">
                <div class="dashboard-content-left">
                <span class="">Current Plan</span>
                  <h3 class="text-primary text-bold-500">{{$my_sub->plan_name??'No subscription yet.'}}</h3>

                  <span class="">Expiry</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                  <span class="">Days Left</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                  @if($my_sub)

                  <button type="button" class="btn btn-primary btn-block ">More</button>
                  @else

                  <a href="{{route('subscription_plans')}}" type="button" class="btn btn-warning btn-block ">View Plans</a>
                  @endif

                 
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="100" width="100" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
      <div class="card">
          <div class="card-header pb-0">
            <h3 class="greeting-text">Request</h3>
            
          </div>
          <div class="">
            <div class="pt-0 card-body">
            
              <div class="pb-0 d-flex justify-content-between">
                <div class="dashboard-content-left">
                <span class="">Client Request</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                  <span class="">Declined Request</span>
                  <h3 class="text-primary text-bold-500">0</h3>

                

                  <button type="button" class="btn btn-primary glow">More</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Multi Radial Chart Starts -->
      
     
    </div>

    <div class="row">
      <!-- Greetings Content Starts -->
      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header">
            <h3 class="greeting-text">Messages</h3>
            
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="d-flex justify-content-between ">
                <div class="dashboard-content-left">
                  <h1 class="text-primary font-large-2 text-bold-500">0</h1>
                
                  <button type="button" class="btn btn-primary glow">More</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header">
            
         
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-end">
                <div class="dashboard-content-left">
                  <h1 class="text-primary font-large-2 text-bold-500">Add Property</h1>
                 
                  <button type="button" class="btn btn-primary glow">Add New</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header">
           
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-end">
                <div class="dashboard-content-left">
                  <h1 class="text-primary font-large-2 text-bold-500">View Profile</h1>
                 
                  <a href="{{route('agent.my_profile')}}" type="button" class="btn btn-primary glow">View</a>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Multi Radial Chart Starts -->
      
     
    </div>

    <div class="row">
      <!-- Greetings Content Starts -->
      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header">
            <h3 class="greeting-text">Statistics</h3>
            <p class="mb-0">Best seller of the month</p>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="d-flex justify-content-between ">
                <div class="dashboard-content-left">
                  <h1 class="text-primary font-large-2 text-bold-500">$89k</h1>
                  <p>Total Views.</p>
                  <button type="button" class="btn btn-primary glow">View Reports</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        <div class="card">
          <div class="card-header">
            <h3 class="greeting-text">Favourites</h3>
            <p class="mb-0">Best seller of the month</p>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-end">
                <div class="dashboard-content-left">
                  <h1 class="text-primary font-large-2 text-bold-500">$89k</h1>
                  <p>You have done 57.6% more sales today.</p>
                  <button type="button" class="btn btn-primary glow">View Sales</button>
                </div>
                <div class="dashboard-content-right">
                  <img src="{{asset('images/icon/cup.png')}}" height="220" width="220" class="img-fluid"
                    alt="Dashboard Ecommerce" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
        
      </div>
      <!-- Multi Radial Chart Starts -->
      
     
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

