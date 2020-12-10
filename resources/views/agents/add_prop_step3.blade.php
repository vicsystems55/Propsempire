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
        <div class="card-header">
          <h4 class="card-title">Step 3/3</h4>
          <div class="row">

          <div class="p-2 border-primary col-md-4 ">
            Step 1
          </div>
          <div class="p-2 border-primary  border-left-white mx-auto col-md-4">
            Step 2
          </div>
          <div class="bg-primary text-white p-2 border-primary mx-auto col-md-4">
            Step 3
          </div>

          </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                <h1 class="text-center">Almost done</h1>
                <h3 class="text-center font-italic">Subscription Type</h3>

                @if(Session::has('msg'))
                  <p class="alert alert-success">
                    {{Session::get('msg')}}
                  </p>

                @endif
                
                <div class="row">

                    <div class="col-md-4">
                      <div id="free" style="width:100%; height:230px;" class="c  shadow hvr-float-shadow mb-2">
                        <div class=" card-bod p-1">
                        <h4>Free</h4>
                        <ul>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                          </ul>
                          <a class="btn btn-secondary mt-2 btn-block shadow" href="">Get Started <br>
                            <i>(free)</i>
                          </a>

                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div id="standard" style="width:100%; height:230px;" class="border border-primary c shadow-lg hvr-float-shadow mb-2">
                        <div class="card-bod p-1">
                          <h4>Standard</h4>
                          <ul>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                          </ul>
                          @include('agents.standard_pay')
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div id="premium" style="width:100%; height:230px;" class="c shadow hvr-float-shadow mb-2">
                        <div class="card-bod p-1">
                          <h4>Premium</h4>
                          <ul>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                            <li>limited asset upload</li>
                          </ul>
                              @include('agents.premium_pay')
                        </div>
                      </div>
                    </div>

                </div>

                <script>

                  $(document).ready(function() {

                  

                        $('.c').click(function() { 

                         
                            var id = $(this).attr('id');

                          //  $('#'+id).addClass('border border-primary');

                          $('ul li a').click( function(){
                        if ( $(this).hasClass('current') ) {
                            $(this).removeClass('current');
                        } else {
                            $('li a.current').removeClass('current');
                            $(this).addClass('current');    
                        }
                    });
                            
                            
                            return true; 

                           
                        }); 

                        if ($("#c_radio1").is(":checked")) {
                              console.log('se');
                            $('#free').addClass("border border-primary");
                        }

                        

                  });

                </script>

                  
                    <!-- <input id="c_radio1" type="radio" name="subscription" value="free">
                    <input id="c_radio2" type="radio" name="subscription" value="free">
                    <input id="c_radio3" type="radio" name="subscription" value="free"> -->
               

               

                <div class="col-12 mt-3 d-flex justify-content-start">
                    <button type="submit" class="btn btn-primary btn-lg shadow mr-1 mt-2 mb-1">Previous</button>
                   
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