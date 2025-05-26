<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Laundry</title>
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
</body>
</html>
