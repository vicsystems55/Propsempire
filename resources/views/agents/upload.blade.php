@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','File Uploader')
{{-- vendor style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/ui/prism.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/file-uploaders/dropzone.min.css')}}">
@endsection
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/file-uploaders/dropzone.css')}}">
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
          <div class="card-body">
            
            <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
              <div class="dz-message">Drop Files Here To Upload</div>
            </form>

            <script>
              myDropzone.on("sending", function(file, xhr, formData) {
              // Will send the filesize along with the file as POST data.
              formData.append("filesize", file.size);
          });
                      
            </script>
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
<script src="{{asset('vendors/js/extensions/dropzone.min.js')}}"></script>
<script src="{{asset('vendors/js/ui/prism.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/extensions/dropzone.js')}}"></script>
@endsection