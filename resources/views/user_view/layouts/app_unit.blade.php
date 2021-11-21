<!DOCTYPE html>
<html lang="en">
<head>
  @include('user_view.includes.meta')

  <title>@yield('title')</title>

  @stack('before-style')
  {{-- style --}}
  @include('user_view.includes.style')

  @stack('after-style')

</head>
<body>

  @include('user_view.includes.navbar')
  @yield('content')
  @include('user_view.includes.footer')

  @stack('before-script')
  {{-- script --}}
  @include('user_view.includes.script')
  
  @stack('after-script')
  
</body>
</html>