<header class="header-nav menu_style_home_one style2 home3 navbar-scrolltofixed stricky main-menu" >
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid "  style="height: auto; width: 264px;" src="/propsempire/images/Logo1.png" alt="Logo1.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" style="height: auto; width: 264px;" src="/propsempire/images/Logo1.png" alt="Logo1.png">
		            <img class="logo2 img-fluid" style="height: auto; width: 264px;" src="/propsempire/images/Logo1.png" alt="Logo1.png">
		            
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            <li>
						<a href="#"><span class="title">Home</span></a> </li>
						<!-- next menue-->
		            <li>
		                <a href="#"><span class="title">Property</span></a>
		                
	                	<ul>
		                    <li><a href="#">For Rent</a></li>
							<li><a href="#">For Sale</a></li>
							<li><a href="#">Shotlet</a></li>
							
	                	</ul>
					</li>
				<!-- next menue-->

		            <li>
		                <a href="agencies.html"><span class="title">Agencies</span></a></li>
					<!-- next menue-->


		            <li class="last">
		                <a href="page-contact.html"><span class="title">Blog</span></a>
					</li>
					<!-- next menue-->
					<li class="last">
		                <a href="page-contact.html"><span class="title">Contact</span></a>
					</li>
					
					<!-- <li class="list-inline-item list_s">
                        <a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg">
                             <span class="dn-lg text-thm3">Login/Register</span>
                        </a>
                    </li> -->
					
	                <li class="list-inline-item add_listing home2">
                        <a href="{{route('register')}}">
                            <span class="flaticon-user"></span><span class="dn-lg"> Join Today</span>
                        </a>
                    </li>
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Modal -->
	

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" style="height: auto; width: 164px;" src="/propsempire/images/Logo1.png" alt="header-logo2.png">
		            
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="{{route('choose')}}"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	            
				</li>
			
				
				<li><span>Property</span>
					<ul>
						<li><a href="#">For Rent</a></li>
							<li><a href="#">For Sale</a></li>
							<li><a href="#">Shotlet</a></li>
							<li><a href="#">Hotels</a></li>
						
					</ul>
				</li>
				
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="{{route('login')}}"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="{{route('register')}}"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="{{route('agent.add_prop')}}"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>