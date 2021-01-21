<template>
    <section id="feature-property" class="featur">

      <div class="justify-content-center">

            <input class="form-control col-md-4 mx-auto" type="text" v-model="keywords">

      </div>

		<div class="container-fluid ">
			<div class="r">
				<div class="c">
					<div class="">
					<div class="">
					
						<h2>Search Results</h2>
						
					</div>
				</div>
				</div>
				
					<div class="">

					<div class="row">

						<div v-for="result in results" :key="result.id" class="item col-md-3">
							<div class="feat_property home3">
								<div class="thumb"><div class="ribbon"><span>Advance</span></div>
									<img class="img-whp" :src="app_url+'/'+result.featured_img1" alt="fp1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">type</a></li>
											
										</ul>
										<ul class="icon mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
										</ul>
										<a class="fp_price" href="#">₦{{result.min_price}}<small></small></a>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<p class="text-thm">Apartment</p>
										<h4>{{result.title}}</h4>
										<p><span class="flaticon-placeholder"></span> {{result.location}}</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#">Beds: bedrooms</a></li>
											<li class="list-inline-item"><a href="#">Baths: bathrooms</a></li>
											<!-- <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li> -->
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
</template>

<script>
    export default {
         data() {
             
        return {
            app_url: process.env.APP_URL,
            keywords: null,
            results: []
        };
    },
    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },
    methods: {
        fetch() {
          
            axios.post('/search', { params: { key: this.keywords } },{
                 headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(
                    response => {
                        this.results = response.data
                        console.log(response.data)
                    }

                    
                
                )
                .catch(error => {});
        }
    }
    }
</script>
