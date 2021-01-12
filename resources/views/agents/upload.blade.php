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
          <h4 class="card-title">Multiple Files Upload</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p class="card-text">This example uploads a multiple files using dropzone js library. By default, dropzone
              is a multiple file uploader. User can either click on the dropzone area and select multiple files or just
              drop all selected files in the dropzone area. This example is the most basic setup for dropzone.</p>
            <form action="#" class="dropzone dropzone-area" id="dpz-multiple-files">
              <div class="dz-message">Drop Files Here To Upload</div>
            </form>
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