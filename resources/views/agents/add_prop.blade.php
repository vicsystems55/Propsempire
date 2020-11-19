@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Form Wizard')

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/wizard.css')}}">
@endsection

@section('content')
<!-- Form wizard with icon tabs section start -->

<!-- Form wizard with step validation section end -->

<!-- vertical Wizard start-->
<section id="vertical-wizard">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Vertical Wizard</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <form action="#" class="wizard-vertical">
          <!-- step 1 -->
          <h3>
                    <div class="fonticon-wrap">
                        <i class="bx bx-home-circle"></i>
                    </div>
            
            <span class="icon-title">
              <span class="d-block">Property Details</span>
              <small class="text-muted"></small>
            </span>
          </h3>
          <!-- step 1 end-->
          <!-- step 1 content -->
          <fieldset class="pt-0">
            <h6 class="pb-50">Enter your Account Details</h6>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="firstName12">First Name </label>
                  <input type="text" class="form-control" id="firstName12" placeholder="Enter Your First Name">
                  <small class="text-muted form-text">Please enter your first name.</small>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="lastName1">Last Name</label>
                  <input type="text" class="form-control" id="lastName1" placeholder="Enter Your Last Name">
                  <small class="text-muted form-text">Please enter your last name.</small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="emailAddress12">Email</label>
                  <input type="email" class="form-control" id="emailAddress12" placeholder="Enter Your Email">
                  <small class="text-muted form-text">Please enter your email address.</small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="tel" class="form-control" placeholder="+91586386368">
                  <small class="text-muted form-text">Please enter your phone number.</small>
                </div>
              </div>
            </div>
          </fieldset>
          <!-- step 1 content end-->
          <!-- step 2 -->
          <h3>
            <span class="fonticon-wrap mr-1">
              <i class="livicon-evo"
                data-options="name:location.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">setup location</span>
              <small class="text-muted">Choose your location here.</small>
            </span>
          </h3>
          <!-- step 2 end-->
          <!-- step 2 content -->
          <fieldset class="pt-0">
            <h6 class="py-50">Setup Your Current Location</h6>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="proposalTitle1">Address Line 1</label>
                  <input type="text" class="form-control" id="proposalTitle1"
                    placeholder="Enter Your House no./ Flate No.">
                </div>
                <div class="form-group">
                  <label>Postcode</label>
                  <input type="text" class="form-control" placeholder="Enter Your Postcode">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="jobtitle">Address Line 2</label>
                  <input type="text" class="form-control" id="jobtitle" placeholder="Enter Your Area Name/ Landmark">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <select class="custom-select form-control" id="eventLocation12" name="location">
                    <option value="new-york">New York</option>
                    <option value="chicago">Chicago</option>
                    <option value="san-francisco">San Francisco</option>
                    <option value="boston">Boston</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>State</label>
                  <input type="text" class="form-control" placeholder="VIC">
                  <small class="form-text text-muted">Please enter your Postcode.</small>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Country</label>
                  <select name="country" class="form-control">
                    <option value="">Select</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                  <small class="form-text text-muted">Select your Country</small>
                </div>
              </div>
            </div>
          </fieldset>
          <!-- step 2 content end-->
          <!-- section 3 -->
          <h3>
            <span class="fonticon-wrap mr-1">
              <i class="livicon-evo"
                data-options="name:headphones.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">Support channel</span>
              <small class="text-muted">add your support agents.</small>
            </span>
          </h3>
          <!-- section 3 end-->
          <!-- step 3 content -->
          <fieldset class="pt-0">
            <h6 class="py-50">Select your Services</h6>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Delivery Type</label>
                  <select name="delivery" class="form-control">
                    <option value="">Select a Service Type Option</option>
                    <option value="overnight" selected="">Overnight Delivery (within 48 hours)</option>
                    <option value="express">Express Delivery (within 5 working days)</option>
                    <option value="basic">Basic Delivery (within 5 - 10 working days)</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="eventLocation12">Preferred Delivery Window</label>
                  <select name="preferreddelivery" class="form-control">
                    <option value="">Select a Preferred Delivery Option</option>
                    <option value="morning" selected="">Morning Delivery (8:00AM - 11:00AM)</option>
                    <option value="afternoon">Afternoon Delivery (11:00AM - 3:00PM)</option>
                    <option value="evening">Evening Delivery (3:00PM - 7:00PM)</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Packing Type</label>
                  <select name="packaging" class="form-control">
                    <option value="">Select a Packaging Type Option</option>
                    <option value="regular" selected="">Regular Packaging</option>
                    <option value="oversized">Oversized Packaging</option>
                    <option value="fragile">Fragile Packaging</option>
                    <option value="frozen">Frozen Packaging</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="mr-2">Requirements :</label>
                  <div class="c-inputs-stacked">
                    <div class="d-inline-block mr-2">
                      <fieldset>
                        <div class="checkbox pb-1">
                          <input type="checkbox" class="checkbox__input" id="checkbox114">
                          <label for="checkbox114">Ordanary</label>
                        </div>
                      </fieldset>
                    </div>
                    <div class="d-inline-block">
                      <fieldset>
                        <div class="checkbox pb-1">
                          <input type="checkbox" class="checkbox__input" id="checkbox12">
                          <label for="checkbox12">Express</label>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <!-- step 3 content end-->
          <!-- step 4 -->
          <h3>
            <span class="fonticon-wrap mr-1">
              <i class="livicon-evo" data-options="name:truck.svg; size: 50px; style:lines; strokeColor:#adb5bd;"></i>
            </span>
            <span class="icon-title">
              <span class="d-block">delivered</span>
              <small class="text-muted">Delivered to you.</small>
            </span>
          </h3>
          <!-- step 4 end-->
          <!-- step 4 content -->
          <fieldset class="pt-0">
            <h6 class="py-50">Enter your Payment Details</h6>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="eventName13">Name on Card</label>
                  <input type="text" class="form-control" id="eventName13" placeholder="Enter Name On Card">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Card Number</label>
                  <input type="text" class="form-control" placeholder="Enter Card No.">
                  <small class="form-text text-muted">Credit / Debit / ATM Card/Master Card</small>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Card Expiry Month</label>
                  <input type="number" class="form-control" name="ccmonth" placeholder="Card Expiry Month" value="01">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Card Expiry Year</label>
                  <input type="number" class="form-control" name="ccyear" placeholder="Card Expire Year" value="21">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Card CVV Number</label>
                  <input type="password" class="form-control" name="ccyear" placeholder="Card CVV Number" value="212">
                </div>
              </div>
            </div>
          </fieldset>
          <!-- step 4 content end-->
        </form>
      </div>
    </div>
  </div>
</section>
<!-- vertical Wizard end-->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/forms/wizard-steps.js')}}"></script>
@endsection