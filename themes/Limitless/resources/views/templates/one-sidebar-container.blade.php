@extends('limitless::templates.html')

@section('container')

  <!-- Main navbar -->
  @includeif('limitless::templates.components.navbar')
  <!-- /main navbar -->

  <!-- Page content -->
  <div class="page-content">

    <!-- Main sidebar -->
    @includeif('limitless::templates.components.sidebar.first-sidebar')
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Page header -->
      @yield('page-header')
      <!-- /page header -->

      <!-- Content area -->
      <div class="content">

        @yield('content')

      </div>
      <!-- /content area -->

      <!-- Footer -->
      @includeif('limitless::templates.footer')
      <!-- /footer -->

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->
@endsection
