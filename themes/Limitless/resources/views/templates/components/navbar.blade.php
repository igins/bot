<div class="navbar navbar-expand-md navbar-dark">
  <div class="navbar-brand">
    <a href="{{url('/backend')}}" class="d-inline-block">
      <img src="{{asset('themes/limitless/global_assets/images/logo_light.png')}}" alt="">
    </a>
  </div>

  <div class="d-md-none">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
      <i class="icon-tree5"></i>
    </button>
    <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
      <i class="icon-paragraph-justify3"></i>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbar-mobile">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
          <i class="icon-paragraph-justify3"></i>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      {{--<li class="nav-item">--}}
        {{--<a href="#" class="navbar-nav-link">--}}
          {{--Text link--}}
        {{--</a>--}}
      {{--</li>--}}

      {{--<li class="nav-item dropdown">--}}
        {{--<a href="#" class="navbar-nav-link">--}}
          {{--<i class="icon-bell2"></i>--}}
          {{--<span class="d-md-none ml-2">Notifications</span>--}}
          {{--<span class="badge badge-mark border-white ml-auto ml-md-0"></span>--}}
        {{--</a>--}}
      {{--</li>--}}

      <li class="nav-item dropdown dropdown-user">
        <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
          <img src="{{$user->profile->avatar}}" class="rounded-circle mr-2" height="34" alt="">
          <span>{{$user->profile->full_name}}</span>
        </a>

        <div class="dropdown-menu dropdown-menu-right">
          <a href="{{route('backend.users.show', $user->id)}}" class="dropdown-item"><i class="icon-user-plus"></i> {{__("Мой профиль")}}</a>
          {{--<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>--}}
          {{--<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>--}}
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"><i class="icon-cog5"></i> {{__("Настройки")}}</a>
          <a href="#" class="dropdown-item"><i class="icon-switch2"></i> {{__("Выйти")}}</a>
        </div>
      </li>
    </ul>
  </div>
</div>
