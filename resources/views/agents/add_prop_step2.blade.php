@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Add Listing')

<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/spinner/jquery.bootstrap-touchspin.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDOPFlhw8rl4qYiQt2VCkOrjGe3ATsOGr8"></script>
@section('content')
<!-- Basic Horizontal form layout section start -->

<!-- // Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->

<!-- // Basic Vertical form layout section end -->

<!-- // Basic Floating Label Form section start -->

<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
      <div class="card-header border-bottom">
          <h4 class="card-title p-1">Create Listing Step 2/3</h4>

          <div class="row">

            <div class="p-2 bg-primary col-md-4 text-white">
               Step 1
            </div>
            <div class="p-2 bg-primary text-white border-left-white mx-auto col-md-4">
               Step 2
            </div>
            <div class="p-2 border-primary mx-auto col-md-4">
               Step 3
            </div>

          </div>
        </div>
        <div class="card-content">
          <div class="card-body">
           <h1 class="text-center">You have successfull added listing</h1>
           <h3 class="text-center text-muted">Please proceed to add Images of your listing...</h3>


                                <div class="col-md-10 mx-auto  mt-2">
                                    <div class=" ">
                                            @error('featured_img')
                                            <p class="alert alert-warning" >
                                                <strong>{{ $message }}</strong>
                                            </p>
                                            @enderror

                                            @if(Session::has('message'))
                                                <p class="alert alert-success animate__animated animate__bounce" >
                                                    <strong>{{Session::get('message')}}</strong>
                                                </p>
                                            @endif
                                        <div class="row">
                                            <div class="col-md-5 mx-auto">

                                            

                                                <div  style="background-image:url({{config('app.url')}}/images/listings_images/{{$listing_data->featured_img1??'default.png'}}); background-size:cover; width: 250px; height:250px;" id="featured_img_chooser_preview" class="mx-auto shadow p-1">

                                                </div>

                            
                                                <div class="form-group   mt-2 mx-auto ">                                            
                                                    <button onclick="openFileOption4(this.id)" id="featured_img"  class=" btn btn-sm btn-block btn-primary shadow">Choose</button>
                                                </div>
                                                <form enctype="multipart/form-data" method="post" action="{{route('up_pix', $listing_data->slug)}}">
                                                    @csrf
                                                        <input id="featured_img_chooser" onchange="previewFile4(this.id);" type="file" name="featured_img" class="d-none" >
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-sm btn-block btn-primary shadow">Upload</button>
                                                    </div>

                                                </form>

                                            </div>

                                            <div class="col-md-7">

                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                        
                                                            <div  style="background-image:url({{config('app.url')}}/images/listings_images/{{$listing_data->featured_img1??'default.png'}}); background-size:cover; min-width: 100%; min-height:140px;" id="featured_img_chooser_preview" class="hvr-grow shadow-lg img-fluid mb-1">
                                                            </div>
                                                            <form method="post" action="{{route('remove_pix', $listing_data->slug)}}">
                                                            @csrf
                                                                <input type="hidden" name="pix" value="1">
                                                                <button class="btn btn-block btn-sm btn-outline-primary shadow">remove</button>
                                                            </form>
                                                            
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div  style="background-image:url({{config('app.url')}}/images/listings_images/{{$listing_data->featured_img2??'default.png'}}); background-size:cover; min-width: 100%; min-height:140px;" id="featured_img_chooser_preview" class="hvr-grow shadow mb-1">
                                                            </div>
                                                            <form method="post" action="{{route('remove_pix', $listing_data->slug)}}">
                                                            @csrf
                                                                <input type="hidden" name="pix" value="2">
                                                                <button class="btn btn-block btn-sm btn-outline-primary shadow">remove</button>
                                                            </form>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div  style="background-image:url({{config('app.url')}}/images/listings_images/{{$listing_data->featured_img3??'default.png'}}); background-size:cover; min-width: 100%; min-height:140px;" id="featured_img_chooser_preview" class="hvr-grow shadow mb-1">
                                                            </div>
                                                            <form method="post" action="{{route('remove_pix', $listing_data->slug)}}">
                                                            @csrf
                                                                <input type="hidden" name="pix" value="3">
                                                                <button class="btn btn-block btn-sm btn-outline-primary shadow">remove</button>
                                                            </form>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div  style="background-image:url({{config('app.url')}}/images/listings_images/{{$listing_data->featured_img4??'default.png'}}); background-size:cover; min-width: 100%; min-height:140px;" id="featured_img_chooser_preview" class="hvr-grow shadow mb-1">
                                                            </div>
                                                            <form method="post" action="{{route('remove_pix', $listing_data->slug)}}">
                                                            @csrf
                                                                <input type="hidden" name="pix" value="4">
                                                                <button class="btn btn-block btn-sm btn-outline-primary shadow">remove</button>
                                                            </form>
                                                        </div>
                                                    
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                        

                                
                                    </div>
                                </div>

                                <div class="row m-3">
                  
                  <div class="col-md-3">

                      <a href="{{route('agent.add_prop')}}" class="btn btn-primary btn-block btn-lg shadow mr-1 mb-1">Back</a>

                  </div>
                  <div class="col-md-6"></div>
                  <div class="col-md-3 ">

                      <a href="{{route('agent.add_prop3', $listing_data->slug)}}" class="btn btn-primary btn-block btn-lg shadow mr-1 mb-1">Next</a>
                  
                  </div>
              </div> 

                           
           


        

          

           


                    
                   
                

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Basic multiple Column Form section end -->
@endsection

@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
<script src="{{asset('js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('js/scripts/forms/number-input.js')}}"></script>
@endsection

<script>

function openFileOption4(_button)
        {
            console.log('i was clicked');
            var chooser = _button +'_chooser';
        document.getElementById(chooser).click();
        }
    function previewFile4(chooser){
        console.log('hello');


        var file = $('#' + chooser).get(0).files[0];

       

    

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }


</script>