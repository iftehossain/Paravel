<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('starlight_asset/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{asset('starlight_asset/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href=" {{asset('starlight_asset/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- Starlight CSS -->
    <link href="{{asset('starlight_asset/css/starlight.css')}}" rel="stylesheet">
    <!-- Select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>

  <body>
    @auth
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{route('home')}}" class="sl-menu-link @yield('dashboard')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('edit_profile')}}" class="sl-menu-link @yield('profile')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-compose tx-22"></i>
            <span class="menu-item-label">Edit Profile</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        @if (Auth::user()->role == 1)
        <a href="{{ route('header') }}" class="sl-menu-link @yield('header')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-information-circled tx-22"></i>
            <span class="menu-item-label">Header</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('category')}}" class="sl-menu-link @yield('category')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-image tx-22"></i>
            <span class="menu-item-label">Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('subcategory')}}" class="sl-menu-link @yield('subcategory')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-images tx-22"></i>
            <span class="menu-item-label">Sub Category</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('product')}}" class="sl-menu-link @yield('product')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-wand tx-22"></i>
            <span class="menu-item-label">Product</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('setting') }}" class="sl-menu-link @yield('setting')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-settings tx-22"></i>
            <span class="menu-item-label">Setting</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('contact_backend')}}" class="sl-menu-link @yield('contact')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-chatboxes tx-22"></i>
            <span class="menu-item-label">Contact (Message)</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{route('faq')}}" class="sl-menu-link @yield('faq')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-help-circled tx-22"></i>
            <span class="menu-item-label">FAQ</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('cupon.index') }}" class="sl-menu-link @yield('cupon')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-scissors tx-22"></i>
            <span class="menu-item-label">Cupon</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('client.index') }}" class="sl-menu-link @yield('client')">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-person-stalker tx-22"></i>
            <span class="menu-item-label">Client Says</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        @endif
      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{Auth::user()->name}}</span></span>
              <img src="{{asset('uploads/profile/'.Auth::user()->profile_image)}}" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('edit_profile') }}">
                  <i class="icon ion-ios-person-outline"></i> Edit Profile
                </a>
                </li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="icon ion-power"></i> Sign Out</a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->
    
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      @yield('breadcrumb')
      
      <div class="sl-pagebody">
        @yield('content')
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endauth
    @yield('guest')
    
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
    <script src="{{asset('starlight_asset/js/jquery-3.5.1.min.js')}}"></script>
    {{-- <script src="{{asset('starlight_asset/lib/jquery/jquery.js')}}"></script> --}}
    <script src="{{asset('starlight_asset/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/d3/d3.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/chart.js/Chart.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('starlight_asset/lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{asset('starlight_asset/js/starlight.js')}}"></script>
    <script src="{{asset('starlight_asset/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('starlight_asset/js/dashboard.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @yield('footer_script')
  </body>
</html>