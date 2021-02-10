@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','File Uploader')
{{-- vendor style --}}
@section('vendor-styles')

<!-- <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.css" integrity="sha512-Ucip2staDcls3OuwEeh5s9rRVYBsCA4HRr18+qd0Iz3nYpnfUeCIMh/82aHKeYgdaXGebmi9vcREw7YePXsutQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />

@endsection
{{-- page-styles --}}
@section('page-styles')

<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/file-uploaders/dropzone.css')}}"> -->
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

        </div>

      </div>
    </div>

  <div class="card">
    <div class="card-body">

    <button id="select-files" class="btn btn-primary shadow">
      Add Picture
    </button>

              <form action="{{route('agent.add_pix')}}"
              class="dropzone "
              id="my-awesome-dropzone">
              @csrf
              </form>

          



            <div id="dpz-btn-select-files" class="card-body">
            
            
          
    </div>
  </div>
  <!-- multi file upload ends -->

 
  <!-- file upload tips ends -->
</section>
<!-- // Dropzone section end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')

<!-- <script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script> -->

@endsection

{{-- page scripts --}}
@section('page-scripts')

<!-- <script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>

          <script>
          Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 0.2, // MB
          dictDefaultMessage: 'Upload Pictures of property',
          dictRemoveFile: true,
          addRemoveLinks: true,
          dictRemoveFile: " Trash",
          previewsContainer: "#dpz-btn-select-files",
          clickable: "#select-files",

          
          
          accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
              done("Naha, you don't.");
            }
            else { done(); }
          }
        };
    </script> 

@endsection