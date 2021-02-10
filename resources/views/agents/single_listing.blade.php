@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','My Listings')
{{-- vendor css --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css" integrity="sha512-Ucip2staDcls3OuwEeh5s9rRVYBsCA4HRr18+qd0Iz3nYpnfUeCIMh/82aHKeYgdaXGebmi9vcREw7YePXsutQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />

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

      <p><span class="font-weight-bold ">Description:</span> <span class="font-italic">{{$single_listing->description}}</span></p>
      <p><span class="font-weight-bold">Location:</span> {{$single_listing->location}}</p>
      <p><span class="font-weight-bold">Category:</span> {{$single_listing->category}}</p>
   

      <div class="row">
      <p class="col-md-6"><span class="font-weight-bold">Type:</span> {{$single_listing->type}}</p>
      <p class="col-md-6"><span class="font-weight-bold">Subtype:</span> {{$single_listing->subtype}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Toilets: </span>{{$single_listing->bedrooms}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Bedrooms: </span>{{$single_listing->bedrooms}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Bathrooms: </span>{{$single_listing->bedrooms}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Status: </span>{{$single_listing->bedrooms}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Parking: </span>{{$single_listing->bedrooms}}</p>
      </div>
      
      <div class="row">
        <p class="col-md-6"><span class="font-weight-bold">Total Area: </span>{{$single_listing->bedrooms}}</p>
        <p class="col-md-6"><span class="font-weight-bold">Covered Area: </span>{{$single_listing->bedrooms}}</p>
      </div>


     
      
             <form action="{{route('agent.add_pix',$single_listing->slug)}}"
              class="dropzone"
              id="my-awesome-dropzone">
              @csrf
              </form>

              <div id="dpz-btn-select-files" class="card-body">

</div>

      <button id="select-files" class="btn btn-primary btn-block shadow">
          Add Picture
        </button>

             

  

            
    
    </div>
  </div>



</div>

<div class="col-md-5">

  <h4>Details</h4>

  <button class="btn btn-success shadow">Publish</button>

  <button class="btn btn-warning shadow">Make Premium</button>

<div class="p-1">
<a href="{{route('subscription_plans')}}" class="btn btn-primary btn-lg shadow">Subscribe to a Plan</a>
</div>

   

    <div class="popup-gallery">

    @foreach($images as $image)
    <a class="" target="_blank" href="{{config('app.url')}}listings_images/{{$image->file_path}}" title="{{$image->id}}"><img class="p-1 shadow" src="{{config('app.url')}}listings_images/{{$image->file_path}}" width="100" height="100"></a>
    @endforeach
</div>

  



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
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>
<script>
          Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 0.2, // MB
          dictDefaultMessage: 'Upload Pictures of property',
          
          dictRemoveFile: true,
          addRemoveLinks: true,
          dictRemoveFile: " Trash",
          // previewsContainer: "#dpz-btn-select-files",
          clickable: "#select-files",

          init: function() {
           
            this.on("addedfile", function(file) { 
              
              alert("Added file."); 
              
              });
          },

          sending: function(file, xhr, formData){
            formData.append("listing_id", '{{$single_listing->id}}');
            formData.append("listing_slug", '{{$single_listing->slug}}');
           
          },

          success: function(file, data){
            console.log(data);

            location.reload();

           
          },

        

          
          accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
              done("Naha, you don't.");
            }
            else { done(); }
          }
        };
  </script> 


  <script>
          $(document).ready(function() {
	$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
});

</script>

@endsection

