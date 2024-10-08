<div class="am-header">
  <div class="am-header-left">
    <a id="naviconLeft" href="#" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
    <a id="naviconLeftMobile" href="#" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
    <a href="index-2.html" class="am-logo">Divisi K3L UB</a>
  </div><!-- am-header-left -->

  <div class="am-header-right">
    <div class="dropdown dropdown-notification d-none">
      <a href="#" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
        <i class="icon ion-ios-bell-outline tx-24"></i>
        <!-- start: if statement -->
        <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
        <!-- end: if statement -->
      </a>
      <div class="dropdown-menu wd-300 pd-0-force">
        <div class="dropdown-menu-header">
          <label>Notifications</label>
          <a href="#">Mark All as Read</a>
        </div><!-- d-flex -->

        <div class="media-list">
          <!-- loop starts here -->
          <a href="#" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                <span class="tx-12">October 03, 2017 8:45am</span>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
          <a href="#" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                <span class="tx-12">October 02, 2017 12:44am</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="#" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                <span class="tx-12">October 01, 2017 10:20pm</span>
              </div>
            </div><!-- media -->
          </a>
          <a href="#" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                <span class="tx-12">October 01, 2017 6:08pm</span>
              </div>
            </div><!-- media -->
          </a>
          <div class="media-list-footer">
            <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
          </div>
        </div><!-- media-list -->
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
    <div class="dropdown dropdown-profile">
      <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
        <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
        <span class="logged-name"><span class="hidden-xs-down">{{auth()->user()->name}}</span> <i class="fa fa-angle-down mg-l-3"></i></span>
      </a>
      <div class="dropdown-menu wd-200">
        <ul class="list-unstyled user-profile-nav">
          {{-- <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
          <li><a href="#"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
          <li><a href="#"><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
          <li><a href="#"><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
          <li><a href="#"><i class="icon ion-ios-folder-outline"></i> Collections</a></li> --}}
          <li><a href="/logout"><i class="icon ion-power"></i> Sign Out</a></li>
        </ul>
      </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
  </div><!-- am-header-right -->
</div><!-- am-header -->