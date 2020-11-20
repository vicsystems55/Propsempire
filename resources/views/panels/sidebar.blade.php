@if(Auth::user()->role =='admin')

      {{-- admin-menu --}}
      @if($configData['mainLayoutType'] == 'vertical-menu')
      <div class="main-menu menu-fixed @if($configData['theme'] === 'dark') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{asset('/')}}">
                <div class="brand-logo">
                  <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
                </div>
                <h6 class="brand-text mb-0">
                
                  ADMIN
                
                </h6>
                </a>
            </li>
                <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                  <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                  <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
                </li>
            </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            
                    <li class="nav-item">
                          <a href="">
                            <i class="menu-livicon livicon-evo-holder" data-icon="desktop">
                            </i> 
                            <span class="menu-title">Dashboard</span>
                            <span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>
                          </a>
                      </li>

                    <li class="nav-item has-sub">
                      <a href="#">
                      <i class="bx bxs-grid"></i>
                      <span class="menu-title" data-i18n="">UI</span>
                      </a>
                      <ul class="menu-content" style="">
                        <li class=""><a class="menu-item" href="documentation-card.html">Cards</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-colors.html">Colors</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-icons.html">Icons</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-widgets.html">Widgets</a>
                        </li>
                      </ul>
                  </li>
              
            </ul>
            </div>
        </div>
      @endif

@endif



@if(Auth::user()->role=='agent')


    {{-- agent-menu --}}
    @if($configData['mainLayoutType'] == 'vertical-menu')
    <div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
          <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto">
              <a class="navbar-brand" href="{{asset('/')}}">
              <div class="brand-logo">
                <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
              </div>
              <h6 class="brand-text mb-0">
              
                AGENT
              
              </h6>
              </a>
          </li>
              <li class="nav-item nav-toggle">
              <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
              </a>
              </li>
          </ul>
          </div>
          <div class="shadow-bottom"></div>
          <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
          
                  <li class="nav-item {{ (request()->is('agent')) ? 'active' : '' }}">
                        <a href="/agent">
                          <i class="menu-livicon livicon-evo-holder" data-icon="desktop">
                          </i> 
                          <span class="menu-title">Dashboard</span>
                          <span class="badge badge-light-danger badge-pill badge-round float-right mr-2"></span>
                        </a>
                    </li>

                    <li class="nav-item  {{ (request()->is('agent/add_prop')) ? 'active' : '' }}">
                        <a href="{{route('agent.add_prop')}}">
                          <i class="menu-livicon livicon-evo-holder" data-icon="desktop">
                          </i> 
                          <span class="menu-title">Add Property</span>
                          <span class="badge badge-light-danger badge-pill badge-round float-right mr-2"></span>
                        </a>
                    </li>

                  <li class="nav-item {{ (request()->is('agent/listings','/agent/listing/*' )) ? 'active' : '' }} has-sub">
                    <a href="">
                    <i class="bx bxs-grid"></i>
                    <span class="menu-title" data-i18n="">Listings</span>
                    </a>
                    <ul class="menu-content" style="">
                    <li class=""><a class="menu-item" href="{{route('agent.all_listings')}}">All Listings</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Free Listings</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Premium Listings</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Published</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Unpublished</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Expired Listings</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Inactive Listings</a>
                      </li>
                      <li class=""><a class="menu-item" href="">Favourites</a>
                      </li>
                    </ul>
                </li>

                <li class="nav-item has-sub">
                    <a href="#">
                    <i class="bx bxs-grid"></i>
                    <span class="menu-title" data-i18n="">Subscriptions</span>
                    </a>
                    <ul class="menu-content" style="">
                      <li class=""><a class="menu-item" href="documentation-card.html">My Subscriptions</a>
                      </li>
                      <li class=""><a class="menu-item" href="documentation-colors.html">History</a>
                      </li>
                     
                    </ul>
                </li>

                <li class="nav-item has-sub">
                    <a href="#">
                    <i class="bx bxs-grid"></i>
                    <span class="menu-title" data-i18n="">Notifications</span>
                    </a>
                    <ul class="menu-content" style="">
                      <li class=""><a class="menu-item" href="documentation-card.html">Request</a>
                      </li>
                      <li class=""><a class="menu-item" href="documentation-colors.html">Support Messages</a>
                      </li>
                     
                    </ul>
                </li>

                <li class="nav-item has-sub">
                    <a href="#">
                    <i class="bx bxs-grid"></i>
                    <span class="menu-title" data-i18n="">Accounts</span>
                    </a>
                    <ul class="menu-content" style="">
                      <li class=""><a class="menu-item" href="documentation-card.html">My Profile</a>
                      </li>
                      <li class=""><a class="menu-item" href="documentation-colors.html">Settings</a>
                      </li>
                     
                    </ul>
                </li>
            
          </ul>
          </div>
      </div>
    @endif


@endif




@if(Auth::user()->role == 'agency')

      {{-- admin-menu --}}
      @if($configData['mainLayoutType'] == 'vertical-menu')
      <div class="main-menu menu-fixed @if($configData['theme'] === 'dark') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{asset('/')}}">
                <div class="brand-logo">
                  <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
                </div>
                <h6 class="brand-text mb-0">
                
                  AGENCY
                
                </h6>
                </a>
            </li>
                <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                  <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                  <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
                </li>
            </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            
                    <li class="nav-item">
                          <a href="">
                            <i class="menu-livicon livicon-evo-holder" data-icon="desktop">
                            </i> 
                            <span class="menu-title">Dashboard</span>
                            <span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>
                          </a>
                      </li>

                    <li class="nav-item has-sub">
                      <a href="#">
                      <i class="bx bxs-grid"></i>
                      <span class="menu-title" data-i18n="">UI</span>
                      </a>
                      <ul class="menu-content" style="">
                        <li class=""><a class="menu-item" href="documentation-card.html">Cards</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-colors.html">Colors</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-icons.html">Icons</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-widgets.html">Widgets</a>
                        </li>
                      </ul>
                  </li>
              
            </ul>
            </div>
        </div>
      @endif

@endif



@if(Auth::user()->role=='vendor')

      {{-- admin-menu --}}
      @if($configData['mainLayoutType'] == 'vertical-menu')
      <div class="main-menu menu-fixed @if($configData['theme'] === 'light') {{"menu-light"}} @else {{'menu-dark'}} @endif menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{asset('/')}}">
                <div class="brand-logo">
                  <img src="{{asset('images/logo/logo.png')}}" class="logo" alt="">
                </div>
                <h6 class="brand-text mb-0">
                
                  VENDOR
                
                </h6>
                </a>
            </li>
                <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                  <i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i>
                  <i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i>
                </a>
                </li>
            </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            
                    <li class="nav-item">
                          <a href="">
                            <i class="menu-livicon livicon-evo-holder" data-icon="desktop">
                            </i> 
                            <span class="menu-title">Dashboard</span>
                            <span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>
                          </a>
                      </li>

                    <li class="nav-item has-sub">
                      <a href="#">
                      <i class="bx bxs-grid"></i>
                      <span class="menu-title" data-i18n="">UI</span>
                      </a>
                      <ul class="menu-content" style="">
                        <li class=""><a class="menu-item" href="documentation-card.html">Cards</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-colors.html">Colors</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-icons.html">Icons</a>
                        </li>
                        <li class=""><a class="menu-item" href="documentation-widgets.html">Widgets</a>
                        </li>
                      </ul>
                  </li>
              
            </ul>
            </div>
        </div>
      @endif

@endif