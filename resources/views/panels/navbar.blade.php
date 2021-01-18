{{-- navabar  --}}
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu 
@if(isset($configData['navbarType'])){{$configData['navbarClass']}} @endif" 
data-bgcolor="@if(isset($configData['navbarBgColor'])){{$configData['navbarBgColor']}}@endif">
  <div class="navbar-wrapper">
    <div class="navbar-container content">
      <div class="navbar-collapse" id="navbar-mobile">
        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
          @if (request()->is('sk-layout-1-column'))
          <ul class="nav navbar-nav nav-back">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main hidden-xs font-small-3 d-flex align-items-center" href="{{asset('sk-layout-2-columns')}}">
                <i class="bx bx-left-arrow-alt"></i>Back
              </a>
            </li>
          </ul>
          @else
          <ul class="nav navbar-nav">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                <i class="ficon bx bx-menu"></i>
              </a>
            </li>
          </ul>
          @endif
          
         
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="starter-list">
                <ul class="search-list"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav float-right">
          
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
          <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
              <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="starter-list">
              <div class="search-input-close"><i class="bx bx-x"></i></div>
              <ul class="search-list"></ul>
            </div>
          </li>

          <?php

            $log = App\ActivityLog::where('for_', Auth::user()->id)->where('status', 'unread')->get();

          ?>

          @if($log->count() > 0)

          <li class="dropdown dropdown-notification nav-item">

            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
              <i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i>
              <span class="badge badge-pill badge-danger badge-up">{{$log->count()}}</span>
              </a>

              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">{{$log->count()}} new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                </li>
                <li class="scrollable-container media-list">

                @foreach($log as $msg)

                  <a href="{{route('agent.notification_read', $msg->id)}}">
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                            <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">{{$msg->title}}</h6><small class="notification-text">{{$msg->created_at->diffForHumans()}}</small>
                        </div>
                      </div>
                    </div>
                  </a>





                @endforeach
              
                  
                 
                
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
              </ul>

          </li>

          @else

          <li class="dropdown dropdown-notification nav-item">

            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
              <i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i>
           
              </a>

              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="dropdown-menu-header">
                  <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">No Messages</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                </li>
                <li class="scrollable-container media-list">
              
                  
               
                
                </li>
                <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Empty..</a></li>
              </ul>

            </li>



          @endif


          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <div class="user-nav d-sm-flex d-none">
                <span class="user-name">{{Auth::user()->name}}</span>
                <span class="user-status text-muted">{{Auth::user()->user_code}}</span>
              </div>
              <span><img class="round" src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right pb-0">
              <a class="dropdown-item" href="#">
                <i class="bx bx-user mr-50"></i> Edit Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="bx bx-envelope mr-50"></i> My Inbox
              </a>
              <a class="dropdown-item" href="#">
                <i class="bx bx-check-square mr-50"></i> Task</a>
                <a class="dropdown-item" href="#"><i class="bx bx-message mr-50"></i> Chats
              </a>
              <div class="dropdown-divider mb-0"></div>
              <a class="dropdown-item" href="{{ route('logout')}}"><i class="bx bx-power-off mr-50"></i> Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
