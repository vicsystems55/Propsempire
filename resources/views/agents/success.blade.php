@extends('layouts.fullLayoutMaster')
{{-- page title --}}
@section('title','Success')

@section('content')
<!-- error 500 -->
<section class="row flexbox-container">
  <div class="col-xl-6 col-md-7 col-9">
      <!-- w-100 for IE specific -->
    <div class="card bg-transparent shadow-none"> 
      <div class="card-content">
      <div class="card-body text-center bg-transparent miscellaneous">
          <img src="{{asset('images/pages/500.png')}}" class="img-fluid my-3" alt="branding logo">
          <h1 class="error-title mt-1">Broe We don register you payment you fit proceed</h1>
          <p class="p-2">
            You are doing well.
          </p>
        <a href="{{asset('/')}}" class="btn btn-primary round glow">BACK TO HOME</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- error 500 end -->
@endsection