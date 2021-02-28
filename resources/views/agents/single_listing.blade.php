@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','My Listings')
{{-- vendor css --}}
@section('vendor-styles')

<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css" integrity="sha512-Ucip2staDcls3OuwEeh5s9rRVYBsCA4HRr18+qd0Iz3nYpnfUeCIMh/82aHKeYgdaXGebmi9vcREw7YePXsutQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.min.js" integrity="sha512-+uGHdpCaEymD6EqvUR4H/PBuwqm3JTZmRh3gT0Lq52VGDAlywdXPBEiLiZUg6D1ViLonuNSUFdbL2tH9djAP8g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.all.min.js" integrity="sha512-TxryOYMwWBRIlZoSkKW+jZvJ834vF3u8mE0jDeTLEDdPplOVNNZfWm9VFtEuW365BFPLK5CEIF/vaHqmAey8XA==" crossorigin="anonymous"></script>
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

@if(Session::has('publish'))
<p class="alert alert-info alert-dismissible">{{ Session::get('publish') }}</p>
@endif

@if(Session::has('unpublish'))
<p class="alert alert-warning alert-dismissible">{{ Session::get('unpublish') }}</p>
@endif

  <div class="card">

    <div class="card-body">

      <h3>{{$single_listing->title}}</h3>
    
       Total Views: <span>{{$single_listing->views}}</span>
      

      <table class="table table-striped">

        <tr>
          <td>Description: </td>
          <td>{{$single_listing->description}}</td>
        </tr>
        <tr>
          <td>Location: </td>
          <td>{{$single_listing->location}}</td>
        </tr>
        <tr>
          <td>Category: </td>
          <td>{{$single_listing->category}}</td>
        </tr>
        <tr>
          <td>Type: </td>
          <td>{{$single_listing->type}}</td>
          
        </tr>

        <tr>
          <td>Subtype: </td>
          <td>{{$single_listing->subtype}}</td>
        </tr>

      </table>
      

        <div class="">
          <div class="row">
            <div class="col-3 mx-auto">
            <h6>Toilet: {{$single_listing->toilets}} </h6>
            </div>
            <div class="col-3 mx-auto">
            <h6>Bedrooms: {{$single_listing->bedrooms}} </h6>
            </div>

            <div class="col-3 mx-auto">
            <h6>Bathrooms: {{$single_listing->bathrooms}} </h6>
          </div>


      </div>

        <div class="row mt-1">
          <div class="col-3 mx-auto">
          <h6>Total Area: <br> {{$single_listing->total_area}} </h6>
          </div>
          <div class="col-3 mx-auto">
          <h6>Covered Area: <br> {{$single_listing->covered_area}} </h6>
          </div>

          <div class="col-3 mx-auto">
          <h6>Parking:<br> {{$single_listing->parking}} </h6>
          </div>


        </div>
        </div>

     


     
      
             <form action="{{route('agent.add_pix',$single_listing->slug)}}"
              class="dropzone "
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

      @if($user_subscription )

              
            @if($single_listing->status != 'published' )

              <form class="mb-2" method="post" class="text-center" action="{{route('agent.publish')}}">
                  @csrf
                  <input type="hidden" name="slug" value="{{$single_listing->slug}}">
                  <button  class="btn btn-block btn-success shadow">Publish</button>
                </form>


              @else

              <form class="mb-2" method="post" class="text-center" action="{{route('agent.unpublish')}}">
                  @csrf
                  <input type="hidden" name="slug" value="{{$single_listing->slug}}">
                  <button  class="btn btn-block btn-dark shadow">Unpublish</button>
                </form>



              @endif



              @if($single_listing->class == 'premium')

              <form class="mb-2" class="text-center" >
                  
                  <button  class="btn btn-block btn-black shadow">On Premium</button>

                </form>
              @else

              <form class="mb-2" method="post" class="text-center" action="{{route('agent.make_premium')}}">
                  @csrf
                  <input type="hidden" name="slug" value="{{$single_listing->slug}}">
                  <button  class="btn btn-block btn-warning shadow">Make Premium</button>
                </form>


              @endif


              <div class="mb-2" class="text-center">
          
         
                <a href="{{route('subscription_plans')}}" class="btn btn-block btn-primary shadow">Upgrade Plan</a>
              </div>

          @else
              <h4 class="text-warning">No Subscriptions yet..</h4>
            <div class="form-group">
              <a href="{{route('subscription_plans')}}" class="btn btn-block btn-primary shadow">Subscribe</a>
            </div>




      @endif

      

      
        

        

   

    <div class="popup-gallery">

    @foreach($images as $image)

    <div id="{{$image->id}}" class="card">
      <div class="card-body">

      <div class="d">
      <img style="width: 100px; height:100px;" class="img-thumbnail shadow" src="{{config('app.url')}}listings_images/{{$image->file_path}}" alt="">

      <button onclick="removePix(this.id)" id="{{$image->id}}" class="btn btn-sm shadow btn-danger float-right">Remove</button>

      <script>



        function removePix(img_id) {

          var url = "/agent/remove_pix/";

        

            console.log(img_id);

            var element = document.getElementById(img_id);
            element.classList.add("d-none");

          $.ajax({
          type: "POST",
          url: url + img_id,
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
          data: {
            id: img_id
          },
          success:  (data) => {
            console.log(data); 
            Swal.fire({
          title: 'Deleted!!',
          text: 'Image removed!!',
          icon: 'success',
          confirmButtonText: 'ok'
        })
          },

          error: function(data){
              console.log(data);
          },
          dataType: "json",
          contentType: 'application/x-www-form-urlencoded',
         
        });
          
        }

        
      </script>


      </div>

      </div>
    </div>

    
    <!-- <a class="" target="_blank" href="{{config('app.url')}}listings_images/{{$image->file_path}}" title="{{$image->id}}"><img class="p-1 shadow" src="{{config('app.url')}}listings_images/{{$image->file_path}}" width="200" height="200"></a> -->
    
    @endforeach
</div>

  



</div>

</div>
    
   
</section>
<!-- Dashboard Ecommerce ends -->
@endsection

@section('vendor-scripts')

<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
@endsection

@section('page-scripts')

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

           

           
          },

        

          
          accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
              done("Naha, you don't.");
            }
            else { done(); }
          }
        };
  </script> 



</script>

@endsection

