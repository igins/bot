<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

  <!-- Sidebar mobile toggler -->
  <div class="sidebar-mobile-toggler text-center">
    <a href="#" class="sidebar-mobile-main-toggle">
      <i class="icon-arrow-left8"></i>
    </a>
    Navigation
    <a href="#" class="sidebar-mobile-expand">
      <i class="icon-screen-full"></i>
      <i class="icon-screen-normal"></i>
    </a>
  </div>
  <!-- /sidebar mobile toggler -->


  <!-- Sidebar content -->
  <div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
      <div class="card-body">
        <div class="media">
          <div class="mr-3">
            <a href="#"><img src="{{$user->profile->avatar}}" width="38" height="38" class="rounded-circle" alt="{{$user->profile->full_name}}"></a>
          </div>

          <div class="media-body">
            <div class="media-title font-weight-semibold">{{$user->profile->full_name}}</div>
            <div class="font-size-xs opacity-50">
              {{--<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA--}}
            </div>
          </div>

          <div class="ml-3 align-self-center">
            <a href="#" class="text-white"><i class="icon-cog3"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
      <ul class="nav nav-sidebar" data-nav-type="accordion">

        @includeif('limitless::templates.components.sidebar.menu-item', ['items'=>$mainSidebarMenu->roots()])

      </ul>
    </div>
    <!-- /main navigation -->

  </div>
  <!-- /sidebar content -->

</div>
