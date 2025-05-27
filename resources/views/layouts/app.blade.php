<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>@yield('title', 'Laundry Dashboard')</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <!-- KaiAdmin CSS -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/kaiadmin.min.css') }}" rel="stylesheet" />

  @yield('styles')
</head>
<body>
  <div class="min-height-300 bg-dark position-absolute w-100"></div>

  @include('layouts.sidebar')

  <main class="main-content position-relative border-radius-lg">
    
    @yield('content')
  </main>
 
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2" href="#">
      <i class="fa fa-cog py-2"></i>
    </a>
  </div>

  <!-- Core JS Files -->
  <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

  <!-- Plugins -->
  <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/jsvectormap/world.js') }}"></script>
  <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

  <!-- KaiAdmin JS -->
  <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>

  <!-- Optional demo scripts (remove in production) -->
  <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
  <script src="{{ asset('assets/js/demo.js') }}"></script>
   

  @yield('scripts')
</body>
</html>
