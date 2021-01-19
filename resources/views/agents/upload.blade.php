@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','File Uploader')
{{-- vendor style --}}
@section('vendor-styles')

@endsection
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css" integrity="sha512-Ucip2staDcls3OuwEeh5s9rRVYBsCA4HRr18+qd0Iz3nYpnfUeCIMh/82aHKeYgdaXGebmi9vcREw7YePXsutQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />
@endsection

@section('content')
<section style="padding-left: 9px;">
  <!-- single file upload ends -->

  <!-- multi file upload starts -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        <div class="card-header border-bottom">
          <h4 class="card-title p-1">Create Listing Step 2/3</h4>

          <div class="row">

            <div class="p-2 bg-primary col-md-4 text-white">
               Step 1
            </div>
            <div class="p-2 bg-primary border-white text-white mx-auto col-md-4">
               Step 2
            </div>
            <div class="p-2 border-primary mx-auto col-md-4">
               Step 3
            </div>

          </div>
        </div>
        </div>
        <div class="card-content">


        <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Remove Thumbnail</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
          
          <form action="/file-upload"
      class="drop"
      id="my-awesome-dropzone"></form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
  Dropzone.options.myAwesomeDropzone = false;
var myAwesomeDropzone = new Dropzone("div#my-awesome-dropzone", { url: "/file/post"});
Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  createImageThumbnails: false,
  dictDefaultMessage: "one",
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};

Dropzone.autoDiscover = false;


      
</script>
          <div class="card-body">
         

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- multi file upload ends -->

 
  <!-- file upload tips ends -->
</section>
<!-- // Dropzone section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone-amd-module.min.js" integrity="sha512-AbQlw5cF2Yotp5oubG4/Ye8N8Hnda2DH+l+vlrw0+KA0D8GiPn/RBdvVe5D5XBqzWcBq4yVe1KxiJjsbKa+n4g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>
@endsection