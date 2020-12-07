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

           <script>
               

                function openFileOption()
                    {
                    document.getElementById("file1").click();
                    }
                function previewFile(input){
                    console.log('hello');
                    var file = $("input[name=featured_img1]").get(0).files[0];
            
                    if(file){
                        var reader = new FileReader();
            
                        reader.onload = function(){
                            $("#previewImg").attr("src", reader.result);
                        }
            
                        reader.readAsDataURL(file);
                    }
                }

                function openFileOption2()
                    {
                    document.getElementById("file2").click();
                    }
                function previewFile2(input){
                    console.log('hello');
                    var file = $("input[name=featured_img2]").get(0).files[0];
            
                    if(file){
                        var reader = new FileReader();
            
                        reader.onload = function(){
                            $("#previewImg2").attr("src", reader.result);
                        }
            
                        reader.readAsDataURL(file);
                    }
                }



                function openFileOption3()
                    {
                    document.getElementById("file3").click();
                    }
                function previewFile3(input){
                    console.log('hello');
                    var file = $("input[name=featured_img3]").get(0).files[0];
            
                    if(file){
                        var reader = new FileReader();
            
                        reader.onload = function(){
                            $("#previewImg3").attr("src", reader.result);
                        }
            
                        reader.readAsDataURL(file);
                    }
                }


                function openFileOption4()
                    {
                    document.getElementById("file4").click();
                    }
                function previewFile4(input){
                    console.log('hello');
                    var file = $("input[name=featured_img4]").get(0).files[0];
            
                    if(file){
                        var reader = new FileReader();
            
                        reader.onload = function(){
                            $("#previewImg4").attr("src", reader.result);
                        }
            
                        reader.readAsDataURL(file);
                    }
                }
            </script>


           <form method="post" enctype="multipart/form-data" action="{{route('agent.add_assets', $listing_data->slug)}}">

        
                    @csrf
                <div class="row">

                    <div class="col-md-3 mx-auto">
                            <div class="p-1">
                            <img onclick="openFileOption()" width="200" height="200" class="img-thumbnail" id="previewImg" src="/images/banner/banner-21.jpg" alt="">
                               
                                @error('featured_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                       
                            <div class="form-group custom-file">

                    
                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                            <div class="p-1">
                            <img onclick="openFileOption2()" width="200" height="200" class="img-thumbnail" id="previewImg2" src="/images/banner/banner-21.jpg" alt="">

                            </div>
                       
                            <div class="form-group custom-file">

                    
                                <input id="file2" onchange="previewFile2();" type="file" name="featured_img2" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                            <div class="p-1">
                            <img onclick="openFileOption3()" width="200" height="200" class="img-thumbnail" id="previewImg3" src="/images/banner/banner-21.jpg" alt="">

                            </div>
                       
                            <div class="form-group custom-file">

                    
                                <input id="file3" onchange="previewFile3();" type="file" name="featured_img3" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                            <div class="p-1">
                            <img onclick="openFileOption4()" width="200" height="200" class="img-thumbnail" id="previewImg4" src="/images/banner/banner-21.jpg" alt="">

                            </div>
                       
                            <div class="form-group custom-file">

                    
                                <input id="file4" onchange="previewFile4();" type="file" name="featured_img4" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>
                    </div>


                
                </div>
                <div class="col-12 d-flex justify-content-center">
                     <button type="submit" class="btn btn-success btn-lg shadow mr-1 mt-2 mb-1">Upload Images</button>
                </div>
                </form>

          

           


                    
                   
                

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