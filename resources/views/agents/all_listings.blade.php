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

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">




@section('content')
<!-- Dashboard Ecommerce Starts -->
<section style="padding-left:12px; padding-right: 4px;" id="dashboard-ecommerce">

@if(Session::has('publish'))
<p class="alert alert-info alert-dismissible">{{ Session::get('publish') }}</p>
@endif

@if(Session::has('unpublish'))
<p class="alert alert-warning alert-dismissible">{{ Session::get('unpublish') }}</p>
@endif


@if(Session::has('upgrade'))
<p class="alert alert-info alert-dismissible">{{ Session::get('upgrade') }} 

  <a href="{{route('subscription_plans')}}">Please upgrade </a>

</p>
@endif


<!-- <div class="">


<h3 class="display-4 text-center">You have no Listings yet</h3>
    <a class="btn btn-primary text-center" href="{{route('agent.add_prop')}}">Create a Listing</a>
</div> -->


<div class="row">

@foreach($my_listings as $listing)

    <div class="col-md-4">

    <div class="card">
        <div class="card-content">
         
          <div id="carousel-example-card" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-card" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-card" data-slide-to="1"></li>
              <li data-target="#carousel-example-card" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded-0" role="listbox">
              <div class="carousel-item active">
                <img src="{{asset('listings_images')}}/{{$featured_img1??'default.png'}}" class="d-block w-100" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="{{asset('listings_images')}}/{{$featured_img1??'default.png'}}" class="d-block w-100" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="{{asset('listings_images')}}/{{$featured_img1??'default.png'}}" class="d-block w-100" alt="Third slide">
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
          <div class="">
            <h4 class="card-title">{{$listing->title}}</h4>
            
          </div>
            <p class="c">
            <h4 class="card-title text-center badge badge-primary">NGN {{number_format($listing->min_price, 2)}}</h4>
            </p>
            <p class="card-text">

                <ul>
                <li>location:</li>
                <li>location:</li>
                <li>location:</li>
                <li>location:</li>

                </ul>
           
            </p>
          </div>
        </div>

        @if($listing->status == 'published')

        <form method="post" class="text-center" action="{{route('agent.unpublish')}}">
          @csrf
          <input type="hidden" name="slug" value="{{$listing->slug}}">
          <button  class="btn btn-dark shadow">Unpublish</button>
        </form>


        @else

        <form method="post" class="text-center" action="{{route('agent.publish')}}">
          @csrf
          <input type="hidden" name="slug" value="{{$listing->slug}}">
          <button class="btn btn-success shadow">Publish Now</button>
        </form>
        
        @endif

      
            

            
       
      
        

        <div class="card-footer">
             <a target="_black" href="{{route('agent.single_listing',  $listing->slug)}}" class="btn btn-block btn-primary shadow">More</a>
        </div>
      </div>

        
    
    </div>


@endforeach

{{$my_listings->links()}}
   

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


