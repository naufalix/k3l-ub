<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials.dashboard-head')
  </head>

  <body>

    @include('partials.dashboard-header')
    @include('partials.dashboard-sidebar')

    <div class="am-mainpanel">
      <div class="am-pagetitle">
        <h5 class="am-title">Dashboard</h5>
        <form id="searchBar" class="search-bar" action="http://www.themepixels.me/demo/amanda/app/index.html">
          <div class="form-control-wrapper">
            <input type="search" class="form-control bd-0" placeholder="Search...">
          </div><!-- form-control-wrapper -->
          <button id="searchBtn" class="btn btn-orange"><i class="fa fa-search"></i></button>
        </form><!-- search-bar -->
      </div><!-- am-pagetitle -->

      <div class="am-pagebody">
        @yield('content')
      </div><!-- am-pagebody -->
      <div class="am-footer">
        <span>Copyright &copy;. All Rights Reserved. Amanda Responsive Bootstrap 4 Admin Dashboard.</span>
        <span>Created by: ThemePixels, Inc.</span>
      </div><!-- am-footer -->
    </div><!-- am-mainpanel -->

    @include('partials.dashboard-script')

  </body>

</html>