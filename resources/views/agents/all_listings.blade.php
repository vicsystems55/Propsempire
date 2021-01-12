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
<section id="dashboard-ecommerce">

<!-- <div class="">


<h3 class="display-4 text-center">You have no Listings yet</h3>
    <a class="btn btn-primary text-center" href="{{route('agent.add_prop')}}">Create a Listing</a>
</div> -->

<div class="row">

@foreach($my_listings as $listing)

    <div class="col-md-4">

    <div class="card">
        <div class="card-content">
          <div class="card-body">
            <h4 class="card-title">{{$listing->title}}</h4>
            <h6 class="card-subtitle">Support card subtitle</h6>
          </div>
          <div id="carousel-example-card" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-card" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-card" data-slide-to="1"></li>
              <li data-target="#carousel-example-card" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded-0" role="listbox">
              <div class="carousel-item active">
                <img src="{{asset('images/slider/01.jpg')}}" class="d-block w-100" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slider/02.jpg')}}" class="d-block w-100" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="{{asset('images/slider/03.jpg')}}" class="d-block w-100" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-card" role="button" data-slide="prev">
              <span class="bx bx-chevron-left icon-prev" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-card" role="button" data-slide="next">
              <span class="bx bx-chevron-right icon-next" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda mollitia
              officia dolorum eius quasi.Chocolate sesame snaps apple pie danish cupcake sweet roll jujubes tiramisu.
            </p>
            <p class="card-text">
           
            </p>
          </div>
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

