<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  @include('user_view.includes.meta')

  <title>
  @yield('title')
  </title>

  @stack('before-style')
  {{-- style --}}
  @include('user_view.includes.style')

  @stack('after-style')
</head>

<body class="index-page bg-gray-200">

  {{-- Navbar --}}
  @include('user_view.includes.navbar')
  {{-- End Navbar --}}
  </div></div></div>

  {{-- Header --}}
  @include('user_view.includes.header')
  {{-- End Header --}}

  {{-- MAIN --}}
  @yield('content')
  {{-- END MAIN --}}

  {{-- Footer --}}
  @include('user_view.includes.footer')
  {{-- End Footer --}}

  @stack('before-script')
  {{-- script --}}
  @include('user_view.includes.script')

  @stack('after-script')

</body>
</html>
