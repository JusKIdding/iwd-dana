<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('includes.head')

    <!-- yield view styles here -->
		@yield('view-styles')
  </head>

  <body>
    <!-- Add Nav Bar HERE -->
    {{-- @include('layouts.nav') --}}

    @yield('content')

    <!-- Placed at the end of the document so the pages load faster -->
		@include('includes.global-scripts')
		<!-- yield view scripts here -->
		@yield('view-scripts')
  </body>
</html>
