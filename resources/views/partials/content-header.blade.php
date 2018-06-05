<div id="breadcrumbs-wrapper">
  <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Search">
  </div>
  <div class="container">
    <h5 class="breadcrumbs-title">@yield('content-title')</h5>
    <ol class="breadcrumbs">
      <li><a href="{{ url('/') }}">Dashboard</a></li>
      @yield('breadcrumbs')
    </ol>
  </div>
</div>