<!DOCTYPE html>
<html lang="en">
<head>
  @include('user_view.includes.meta')

  <title>@yield('title')</title>

  @stack('before-style')
  {{-- style --}}
  @include('user_view.includes.style_alt')

  @stack('after-style')

</head>
<body>

  @include('user_view.includes.navbar_ppdb')
  @yield('content')
  @include('user_view.includes.footer_alt')

  @stack('before-script')
  {{-- script --}}
  @include('user_view.includes.script_alt')

  @stack('after-script')

</body>
</html>
