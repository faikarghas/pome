<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>
    CMS - @yield('title')
  </title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- todo: css/script -->
  <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/fonts/boxicons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/css/core.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/css/theme-default.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/my-auth/css/auth.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/css/demo.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/my-dashboard/js/perfect-scrollbar/perfect-scrollbar.css') }}">
  <script src="{{ asset('vendor/my-dashboard/js/helpers.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/config.js') }}"></script>
  
  <style>
    .sorting_1{
      text-align: center;
    }

    .table-contact td{
        vertical-align: top;
      }
  </style>

  @vite('resources/css/admin.css')


  {{-- css:external --}}
  @stack('css-external')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
</head>

<body>
  <!-- begin:navbar -->
  {{-- @include('admin.layouts._dashboard.navbar') --}}

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      @include('admin.components.layouts._dashboard.sidebar')
      <div class="layout-page">
        @include('admin.components.layouts._dashboard.navbar')
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="toast-new"></div>

            @yield('breadcrumbs')
            @yield('content')
          </div>
          <!-- / Content -->
          <!-- Footer -->
          @include('admin.components.layouts._dashboard.footer')
          <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="{{ asset('vendor/my-dashboard/js/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/popper/popper.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/menu.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('vendor/my-dashboard/js/main.js') }}"></script>
  <!-- <script src="{{asset('js/app.js')}}"></script> -->

  {{-- sweet alert --}}
  {{-- @include('sweetalert::alert') --}}
  {{-- javascript:external --}}
  @stack('javascript-external')
  @stack('javascript-internal')


  <script>
    
  </script>
</body>

</html>