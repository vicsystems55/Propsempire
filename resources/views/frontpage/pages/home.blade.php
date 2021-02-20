@extends('layouts.frontPageLayout')


@section('content')



<section class="home-seven">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-10 offset-lg-1">
					<div class="home_content home7">
						<div class="home-text text-center">
							<h2 class="fz55">Discover your place to live</h2>
							<p class="fz18 color-white">Get started in few clicks.</p>
						</div>
						<div class="home_adv_srch_opt home7">
							<div class="home1-advnc-search home7">
								<ul class="h1ads_1st_list mb0 text-center">
									<li class="list-inline-item">
										<div class="search_option_two">
											<!-- <div class="candidate_revew_select">
												<select class="selectpicker w100 show-tick">
													<option>All Cities</option>
													<option>Apartment</option>
													<option>Bungalow</option>
													<option>Condo</option>
													<option>House</option>
													<option>Land</option>
													<option>Single Family</option>
												</select>
											</div> -->
										</div>
									</li>
										
										
										
										

									<li class="list-inline-item">
										<form method="post" action="{{route('search')}}">
										@csrf
											<div class="form-group">
												<input type="text" name="key" class="form-control" id="exampleInputName1" placeholder="Enter keyword...">
											</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
													<button type="submit" class="btn btn-thm">Search</button>
												</div>
										</form>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


<!-- Property Cities -->
<section id="property-city" class="property-city pb30 bb1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a href="#property-city">
					<div class="mouse_scroll home8">
						<div class="icon">
							<h4>Scroll Down</h4>
							<p>to discover more</p>
						</div>
						<div class="thumb">
							<img src="{{config('app.url')}}propsempire/images/resource/mouse.png" alt="mouse.png">
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="main-title text-center">
					<h2>Find Properties in These Cities</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-4 col-xl">
				<div class="properti_city_home8 text-center">
					<div class="thmb">
						<img width="150" height="150" class=" rounded-circle shadow" src="{{config('app.url')}}propsempire/images/property/pc1.png" alt="pc1.png">
					</div>
					<div class="details">
						<h4>Lagos</h4>
						<p>24 Properties</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 col-xl">
				<div class="properti_city_home8 text-center">
				<div class="thmb">
						<img width="150" height="150" class=" rounded-circle shadow" src="{{config('app.url')}}propsempire/images/property/abj.jpg" alt="pc1.png">
					</div>
					<div class="details">
						<h4>Abuja</h4>
						<p>24 Properties</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 col-xl">
				<div class="properti_city_home8 text-center">
				<div class="thmb">
						<img width="150" height="150" class=" rounded-circle shadow" src="{{config('app.url')}}propsempire/images/property/port.jpg" alt="port.jpg">
					</div>
					<div class="details">
						<h4>Portharcourt</h4>
						<p>24 Properties</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 col-xl">
				<div class="properti_city_home8 text-center">
				<div class="thmb">
						<img width="150" height="150" class=" rounded-circle shadow" src="{{config('app.url')}}propsempire/images/property/cal.jpg" alt="cal.jpg">
					</div>
					<div class="details">
						<h4>Calabar</h4>
						<p>24 Properties</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<!-- Feature Properties -->
<section id="feature-property" class="feature-property mt80 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-title mb40">
						<h2>Featured Properties</h2>
						<p>Handpicked properties by our team. <a class="float-right" href="#">View All <span class="flaticon-next"></span></a></p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_home3_slider">
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp3.jpg" alt="fp3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Sale</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Single Family Home</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Luxury Family Home</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp1.jpg" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>Renovated Apartment</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property home3">
								<div class="thumb">
									<img class="img-whp" src="{{config('app.url')}}propsempire/images/property/fp2.jpg" alt="fp2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">For Rent</a></li>
											<li class="list-inline-item dn"></li>
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">$13,000<small>/mo</small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Villa</p>
										<h4>Gorgeous Villa Bay View</h4>
										<p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: 4</a></li>
											<li class="list-inline-item"><a href="#">Baths: 2</a></li>
											<li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
</section>

<section>


	<div class="container">

		<div class="row">
			<div class="col-lg-6 offset-lg-3 pt-1">
				<div class="main-title text-center">
					<h2>Services</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
		</div>

		<div class="row">

			<div class="col-md-4 mx-auto p-1">
				<div class="card shadow mb-2">

					<div class="card-body">

						<h4 class="text-center">Plumber</h4>
					
					</div>
					
				</div>
			</div>

			<div class="col-md-4 mx-auto p-1">
				<div class="card shadow mb-2">

					<div class="card-body">

						<h4 class="text-center">Electrician</h4>
					
					</div>
					
				</div>
			</div>

			<div class="col-md-4 mx-auto p-1">
				<div class="card shadow mb-2">

					<div class="card-body">

						<h4 class="text-center">Painter</h4>
					
					</div>
					
				</div>
			</div>

			<div class="col-md-4 mx-auto p-1">
				<div class="card shadow mb-2">

					<div class="card-body">

						<h4 class="text-center">Interior Decorator</h4>
					
					</div>
					
				</div>
			</div>
		</div>

		<div class="container d-flex justify-content-center mt-3">
			<button class="btn btn-white shadow-lg  btn-lg col-4 border-primary border-rounded">Show More</button>
		</div>

	


		


	</div>

</section>

<!-- Feature Properties -->
<section id="feature-property" class="feature-property bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Most Searched For</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
			</div>
			<div class="row">

				@forelse($most_viewed_listings as $listing)

					<div class="col-md-6 col-lg-4">
						<div class="feat_property home7">
							<div class="thumb">
								<img style="width: 230px; height: 230px;" class="img-whp" src="{{config('app.url')}}listings_images/{{$listing->images[0]->file_path}}" alt="fp1.jpg">
								<div class="thmb_cntnt">
									<ul class="tag mb0">
										<li class="list-inline-item"><a href="#">{{$listing->type}}</a></li>
										<li class="list-inline-item"><a href="#">{{$listing->category}}</a></li>
									</ul>
									<ul class="icon mb0">
										<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
									</ul>
									<a class="fp_price" href="#"> NGN {{number_format( $listing->min_price, 2)}}</a>
								</div>
							</div>
							<div class="details">
								<div class="tc_content">
								
									
									<a href="{{route('single_view', $listing->slug)}}">
									<h4>{{$listing->title}}</h4>
									</a>
									<p class="text-secondary">{{$listing->title}}</p>
									<p><span class="flaticon-placeholder"></span> {{$listing->location}}</p>
									<ul class="prop_details mb0">
										<li class="list-inline-item"><a href="#">Beds: {{$listing->bedrooms}}</a></li>
										<li class="list-inline-item"><a href="#">Baths: {{$listing->bathrooms}}</a></li>
										<li class="list-inline-item"><a href="#">Sq Ft: {{$listing->total_area}}</a></li>
									</ul>
								</div>
								<div class="fp_footer">
									<ul class="fp_meta float-left mb0">
										<li class="list-inline-item"><a href="#"><img width="60" height="60" src="{{config('app.url')}}images/avatar/avatar.png" alt="pposter1.png"></a></li>
										<li class="list-inline-item"><a href="#">{{$listing->users->name}}</a></li>
									</ul>
									<div class="fp_pdate float-right">{{$listing->created_at->diffForHumans()}}</div>
								</div>
							</div>
						</div>
					</div>					


				@empty

						<h4>No Views greater than 100 yet...</h4>

				@endforelse




				
				

			</div>
		</div>

		<div class="col-lg-12 pb-2">
	<div class="mx-auto text-center">
	<a href="{{route('search')}}" class=" btn btn-lg btn-primary shadow">Show More</a>
	</div>
</div>
</section>







@endsection