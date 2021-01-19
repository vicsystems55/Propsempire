@extends('layouts.frontPageLayout')


@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<section class="home-three bg-img3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="home3_home_content">
						<h1>Find your Next Empire.</h1>
						<h4>find Property across the globe  </h4>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="home3_home_content">
						<a class="popup_video_btn popup-iframe popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y"><i class="flaticon-play"></i></a>
					</div>
				</div>

			</div>
			
			<!-- Search  -->

			<div class="row">
				<div class="col-lg-12">
					<div class="home_adv_srch_opt home3">

						<div class="homepic">
						<img class="nav_logo_img img-fluid mt20" style="height: auto; width: 500px;" src="/propsempire/images/background/fam.png" alt="header-logo2.png">
					     </div>

						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Buy</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
							</li>
								<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Shotlet</a>
							</li>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Hotel</a>
					</li>
						
						</ul>
						<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="home1-advnc-search home3">
									<ul class="h1ads_1st_list mb0">
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="search_key" placeholder="Enter keyword...">
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li class="list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li class="list-inline-item">
											<div class="small_dropdown2 home3">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="₦52,239"> 
														<input type="text" class="amount2" placeholder="₦985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										
										<li class="list-inline-item">
											<div class="search_option_button">
											    <button type="submit" class="btn btn-thm3">Search</button>
											</div>
										</li>


										<script>

											$(document).ready(function(){
											
												$("#search_key").keyup(function(){
												let _token   = $('meta[name="csrf-token"]').attr('content');
													$.ajax({
														url: "{{route('search')}}",
														type:"POST",
														data:{
															name:'name',
															
															_token: _token
															},
														beforeSend:function(){
															$('.cc').addClass('d-none');
															$('.loader').removeClass('d-none');
															console.log('we never go yet');
														},
														success:function(response){
															console.log(response);

															
																
														},
													});										
												});
											});

										</script>
									</ul>
								</div>
							  </div>


								
								
								</div>
								</div>
							</div>
						</div>
					<!-- end Search  -->
			
			
	</section>


	<div style="height:900px;" class="loader d-none mt-5 p-5">
	
		<h4 class="text-center text-secondary ">Loading...</h4>
											
	</div>



<div class="cc">
								<!-- Feature Properties -->
	<section id="feature-property" class="feature-property mt80 pb50">

		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-12">
					<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_home3_slider">

						@foreach($listings as $listing)

						<div class="item">
							<div class="feat_property home3">
								<div class="thumb"><div class="ribbon"><span>Advance</span></div>
									<img class="img-whp" src="{{config('app.url')}}listings_images/{{$listing->featured_img1}}" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">{{$listing->type}}</a></li>
											
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">₦{{$listing->max_price}}<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>{{$listing->title}}</h4>
										<p><span class="flaticon-placeholder"></span> {{$listing->description}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: {{$listing->bedrooms}}</a></li>
											<li class="list-inline-item"><a href="#">Baths: {{$listing->bathrooms}}</a></li>
											<!-- <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>


						@endforeach
						
						
					</div>
				</div>
			</div>
		</div>
		
	</section>

		<!-- End Feature Properties -->


	<section class="our-listing bgc-f7 pb30-991">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="grid_list_search_result style2">
							<div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
								<div class="left_area">
									<p>9 Search results</p>
								</div>
							</div>
							<div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
								<div class="right_area style2 text-right">
									<ul>
										<li class="list-inline-item"><span class="shrtby">Sort by:</span>
											<select class="selectpicker show-tick">
												<option>Busness Plan</option>
												<option>Advance Plan</option>
												<option>Pro Plan</option>
												<option>Vip Plan</option>
												<option>Royal Plan </option>
												<option>The king Plan </option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

					@foreach($listings as $listings)


						<div class="col-md-6 col-lg-4">
							<div class="feat_property home7 style4">
								<div class="thumb"><div class="ribbon"><span>Busness</span></div>
									<div class="fp_single_item_slider">
										<div class="item">
											<img class="img-whp" src="{{config('app.url')}}listings_images/{{$listing->featured_img1}}" alt="fp1.jpg">
										</div>
										<div class="item">
											<img class="img-whp" src="{{config('app.url')}}listings_images/{{$listing->featured_img2}}" alt="fp2.jpg">
										</div>
									</div>
									<div class="thmb_cntnt style2">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">{{$listing->type}}</a></li>
											<li class="list-inline-item"><a href="#">Agent</a></li>
										</ul>
									</div>
									<div class="thmb_cntnt style3">
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">₦{{$listing->min_price}}<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>
											<a href="{{route('single_view',$listing->slug)}}">{{$listing->title}}</a>
											
										
										</h4>
										<p><span class="flaticon-placeholder"></span> {{$listing->description}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a class="text-thm3" href="#">Beds: {{$listing->bedrooms}}</a></li>
											<li class="list-inline-item"><a class="text-thm3" href="#">Baths: {{$listing->bathrooms}}</a></li>
											<li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{config('app.url')}}/images/avatar/{{$listing->users->avatar}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">{{$listing->users->name}}</a></li>
										
											

										</ul>
										<div class="fp_pdate float-right">{{$listing->created_at->diffForHumans()}}</div>
									</div>
								</div>
							</div>
						</div>
						



					@endforeach

							
						
						
						<div class="col-lg-12 mt20">
							<div class="mbp_pagination">
								<ul class="page_navigation">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active" aria-current="page">
										<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">29</a></li>
									<li class="page-item">
										<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>




@endsection