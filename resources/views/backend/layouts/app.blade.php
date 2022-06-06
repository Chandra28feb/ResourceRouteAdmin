<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- Header Part -->
@include('backend.partials.head')
<!-- End Header Part -->
<body class="sidebar-mini">
<div class="wrapper ">
<!-- Left Sidebar -->
@include('backend.partials.sidebar')
<!-- End Left Sidebar -->
<div class="main-panel" id="main-panel">
<!-- Top Navbar -->
{{-- @include('admin.partials.navbar') --}}
<!-- Top End Navbar -->
@if (Route::currentRouteName()=="admin.dashboard")
<!-- <div class="panel-header panel-header-lg">
<canvas id="bigDashboardChart"></canvas>
</div> -->
@endif
<div class="panel-header panel-header-sm">
</div>
@yield('content')
</div>
</div>
<!-- Js and Jquery files -->
@include('backend.partials.js')
<!-- End Js and Jquery files -->
@yield('script')
</body>
</html>
